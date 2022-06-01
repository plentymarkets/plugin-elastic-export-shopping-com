<?php

namespace ElasticExportShoppingCOM\Generator;

use ElasticExport\Helper\ElasticExportPriceHelper;
use ElasticExport\Helper\ElasticExportPropertyHelper;
use ElasticExport\Helper\ElasticExportStockHelper;
use ElasticExport\Services\FiltrationService;
use Plenty\Modules\DataExchange\Contracts\CSVPluginGenerator;
use Plenty\Modules\Helper\Services\ArrayHelper;
use Plenty\Modules\DataExchange\Models\FormatSetting;
use ElasticExport\Helper\ElasticExportCoreHelper;
use Plenty\Modules\Helper\Models\KeyValue;
use Plenty\Modules\Item\Search\Contracts\VariationElasticSearchScrollRepositoryContract;
use Plenty\Plugin\Log\Loggable;

/**
 * Class ShoppingCOM
 * @package ElasticExportShoppingCOM\Generator
 */
class ShoppingCOM extends CSVPluginGenerator
{
    use Loggable;

    const DELIMITER = ",";

    const CONDITION_NEW         = 'New';
    const CONDITION_USED        = 'Used';
    const CONDITION_REFURBISHED = 'Refurbished';

    /**
     * @var ElasticExportCoreHelper $elasticExportHelper
     */
    private $elasticExportHelper;

    /**
     * @var ElasticExportStockHelper
     */
    private $elasticExportStockHelper;

    /**
     * @var ElasticExportPriceHelper
     */
    private $elasticExportPriceHelper;

    /**
     * @var ElasticExportPropertyHelper
     */
    private $elasticExportPropertyHelper;

    /**
     * @var ArrayHelper
     */
    private $arrayHelper;

    /**
     * @var FiltrationService
     */
    private $filtrationService;

    /**
     * ShoppingCOM constructor.
     *
     * @param ArrayHelper $arrayHelper
     */
    public function __construct(ArrayHelper $arrayHelper)
    {
        $this->arrayHelper = $arrayHelper;
    }

    /**
     * Generates and populates the data into the CSV file.
     *
     * @param VariationElasticSearchScrollRepositoryContract $elasticSearch
     * @param array $formatSettings
     * @param array $filter
     */
    protected function generatePluginContent($elasticSearch, array $formatSettings = [], array $filter = [])
    {
        $this->elasticExportHelper = pluginApp(ElasticExportCoreHelper::class);
        $this->elasticExportStockHelper = pluginApp(ElasticExportStockHelper::class);
        $this->elasticExportPriceHelper = pluginApp(ElasticExportPriceHelper::class);
        $this->elasticExportPropertyHelper = pluginApp(ElasticExportPropertyHelper::class);

        $settings = $this->arrayHelper->buildMapFromObjectList($formatSettings, 'key', 'value');
		$this->filtrationService = pluginApp(FiltrationService::class, ['settings' => $settings, 'filterSettings' => $filter]);

        $this->setDelimiter(self::DELIMITER);

        $this->addCSVContent($this->head());

        if($elasticSearch instanceof VariationElasticSearchScrollRepositoryContract)
        {
            // Initiate the counter for the variations limit
            $limitReached = false;
            $limit = 0;

            do
            {
                // Stop writing if limit is reached
                if($limitReached === true)
                {
                    break;
                }

                // Get the data from Elastic Search
                $resultList = $elasticSearch->execute();

                if(!is_null($resultList['error']) && count($resultList['error'] ?? []) > 0)
                {
                    $this->getLogger(__METHOD__)->error('ElasticExportShoppingCOM::log.occurredElasticSearchErrors', [
                        'Error message' => $resultList['error'],
                    ]);
                }

                if(is_array($resultList['documents']) && count($resultList['documents'] ?? []) > 0)
                {
                    $previousItemId = null;

                    foreach ($resultList['documents'] as $variation)
                    {
                        // Stop and set the flag if limit is reached
                        if($limit == $filter['limit'])
                        {
                            $limitReached = true;
                            break;
                        }

                        // If filtered by stock is set and stock is negative, then skip the variation
                        if($this->filtrationService->filter($variation))
                        {
                            continue;
                        }

                        try
                        {
                            // Set the caches if we have the first variation or when we have the first variation of an item
                            if($previousItemId === null || $previousItemId != $variation['data']['item']['id'])
                            {
                                $previousItemId = $variation['data']['item']['id'];

                                // Build the new row for printing in the CSV file
                                $this->buildRow($variation, $settings);

                                // New line was added
                                $limit++;
                            }
                        }
                        catch(\Throwable $throwable)
                        {
                            $this->getLogger(__METHOD__)->error('ElasticExportShoppingCOM::logs.fillRowError', [
                                'Error message ' => $throwable->getMessage(),
                                'Error line'     => $throwable->getLine(),
                                'VariationId'    => (string)$variation['id']
                            ]);
                        }
                    }
                }

            } while ($elasticSearch->hasNext());
        }
    }

    /**
     * Creates the header of the CSV file.
     *
     * @return array
     */
    private function head():array
    {
        return array(
            'Händler-SKU',
            'Hersteller',
            'EAN',
            'Produktname',
            'Produktbeschreibung',
            'Preis',
            'Produkt-URL',
            'Produktbild-URL',
            'Kategorie',
            'Verfügbar',
            'Verfügbarkeitdetails',
            'Versand: Landtarif',
            'Produktgewicht',
            'Produkttyp',
            'Grundpreis',
            'Zustand',
        );
    }

    /**
     * Creates the variation row and prints it into the CSV file.
     *
     * @param array $variation
     * @param KeyValue $settings
     */
    private function buildRow($variation, KeyValue $settings)
    {
        // Get the price list
        $priceList = $this->elasticExportPriceHelper->getPriceList($variation, $settings, 2, ',');

        // Only variations with the Retail Price greater than zero will be handled
        if(!is_null($priceList['price']) && $priceList['price'] > 0)
        {
            // Get shipping cost
            $shippingCost = $this->getShippingCost($variation, $settings);

            // Get first item image
            $image = array_shift($this->elasticExportHelper->getImageListInOrder($variation, $settings, 1, ElasticExportCoreHelper::ITEM_IMAGES));

            $data = [
                'Händler-SKU' 			=> $variation['data']['item']['id'],
                'Hersteller' 			=> $this->elasticExportHelper->getExternalManufacturerName((int)$variation['data']['item']['manufacturer']['id']),
                'EAN' 					=> $this->elasticExportHelper->getBarcodeByType($variation, $settings->get('barcode')),
                'Produktname' 			=> $this->elasticExportHelper->getMutatedName($variation, $settings),
                'Produktbeschreibung' 	=> $this->elasticExportHelper->getMutatedDescription($variation, $settings),
                'Preis' 				=> $priceList['price'],
                'Produkt-URL' 			=> $this->elasticExportHelper->getMutatedUrl($variation, $settings, true, false),
                'Produktbild-URL' 		=> $image,
                'Kategorie'				=> $this->elasticExportHelper->getCategory((int)$variation['data']['defaultCategories'][0]['id'], $settings->get('lang'), $settings->get('plentyId')),
                'Verfügbar' 			=> 'Ja',
                'Verfügbarkeitdetails' 	=> $this->elasticExportHelper->getAvailability($variation, $settings),
                'Versand: Landtarif' 	=> $shippingCost,
                'Produktgewicht'        => $variation['data']['variation']['weightG'],
                'Produkttyp' 			=> $this->elasticExportPropertyHelper->getItemPropertyByBackendName($variation, 'product_type', $settings->get('lang')),
                'Grundpreis' 			=> $this->elasticExportPriceHelper->getBasePrice($variation, (float) $priceList['price']),
                'Zustand'               => $this->translateCondition($variation['data']['item']['conditionApi']['id'])
            ];

            $this->addCSVContent(array_values($data));
        }
    }

    /**
     * Get the shipping cost.
     *
     * @param $variation
     * @param $settings
     * @return string
     */
    private function getShippingCost($variation, $settings):string
    {
        $shippingCost = $this->elasticExportHelper->getShippingCost($variation['data']['item']['id'], $settings, 0);

        if(!is_null($shippingCost) && $shippingCost > 0)
        {
            return number_format((float)$shippingCost, 2, ',', '');
        }

        return '';
    }

    /**
     * @param  int      $condition
     * @return string
     */
    private function translateCondition(int $condition):string
    {
        switch ($condition){
            case 0:
                return self::CONDITION_NEW;
            case 1:
                return self::CONDITION_USED;
            case 2:
                return self::CONDITION_USED;
            case 3:
                return self::CONDITION_USED;
            case 4:
                return self::CONDITION_USED;
            case 5:
                return self::CONDITION_REFURBISHED;
            default:
                return self::CONDITION_NEW;
        }
    }
}