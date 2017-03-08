<?php

namespace ElasticExportShoppingCOM\Generator;

use Plenty\Modules\DataExchange\Contracts\CSVPluginGenerator;
use Plenty\Modules\Helper\Services\ArrayHelper;
use Plenty\Modules\Item\DataLayer\Models\Record;
use Plenty\Modules\Item\DataLayer\Models\RecordList;
use Plenty\Modules\DataExchange\Models\FormatSetting;
use ElasticExport\Helper\ElasticExportCoreHelper;
use Plenty\Modules\Helper\Models\KeyValue;
use Plenty\Modules\Item\Property\Contracts\PropertySelectionRepositoryContract;
use Plenty\Modules\Item\Property\Models\PropertySelection;
use Plenty\Modules\Helper\Contracts\UrlBuilderRepositoryContract;

class ShoppingCOM extends CSVPluginGenerator
{
    /**
     * @var ElasticExportCoreHelper
     */
    private $elasticExportHelper;

    /*
     * @var ArrayHelper
     */
    private $arrayHelper;

    /**
     * @var array $idlVariations
     */
    private $idlVariations;

    /**
     * Shopping constructor.
     * @param ArrayHelper $arrayHelper
     */
    public function __construct(ArrayHelper $arrayHelper)
    {
        $this->arrayHelper = $arrayHelper;
    }

    /**
     * @param array $resultData
     * @param array $formatSettings
     * @param array $filter
     */
    protected function generatePluginContent($resultData, array $formatSettings = [], array $filter = [])
    {
        $this->elasticExportHelper = pluginApp(ElasticExportCoreHelper::class);
        if(is_array($resultData['documents']) && count($resultData['documents']) > 0)
        {
            $settings = $this->arrayHelper->buildMapFromObjectList($formatSettings, 'key', 'value');

            $this->setDelimiter(",");

            $this->addCSVContent([
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
            ]);

            //Create a List of all VariationIds
            $variationIdList = array();
            foreach($resultData['documents'] as $variation)
            {
                $variationIdList[] = $variation['id'];
            }

            //Get the missing fields in ES from IDL
            if(is_array($variationIdList) && count($variationIdList) > 0)
            {
                /**
                 * @var \ElasticExportKaufluxDE\IDL_ResultList\KaufluxDE $idlResultList
                 */
                $idlResultList = pluginApp(\ElasticExportKaufluxDE\IDL_ResultList\KaufluxDE::class);
                $idlResultList = $idlResultList->getResultList($variationIdList, $settings);
            }

            //Creates an array with the variationId as key to surpass the sorting problem
            if(isset($idlResultList) && $idlResultList instanceof RecordList)
            {
                $this->createIdlArray($idlResultList);
            }

            foreach($resultData['documents'] as $item)
            {
                $deliveryCost = $this->elasticExportHelper->getShippingCost($item['data']['item']['id'], $settings);
                if(!is_null($deliveryCost))
                {
                    $deliveryCost = number_format((float)$deliveryCost, 2, ',', '');
                }
                else
                {
                    $deliveryCost = '';
                }

                $data = [
                    'Händler-SKU' 			=> $item['data']['item']['id'],
                    'Hersteller' 			=> $this->elasticExportHelper->getExternalManufacturerName((int)$item['data']['item']['manufacturer']['id']),
                    'EAN' 					=> $item['data']['barcodes'][0]['code'],
                    'Produktname' 			=> $this->elasticExportHelper->getName($item, $settings),
                    'Produktbeschreibung' 	=> $this->elasticExportHelper->getDescription($item, $settings),
                    'Preis' 				=> number_format((float)$this->idlVariations[$item['id']]['variationRetailPrice.price'], 2, ',', ''),
                    'Produkt-URL' 			=> $this->elasticExportHelper->getUrl($item, $settings, true, false),
                    'Produktbild-URL' 		=> $this->elasticExportHelper->getMainImage($item, $settings),
                    'Kategorie'				=> $this->elasticExportHelper->getCategory((int)$item['data']['defaultCategories'][0]['id'], $settings->get('lang'), $settings->get('plentyId')),
                    'Verfügbar' 			=> 'Ja',
                    'Verfügbarkeitdetails' 	=> $this->elasticExportHelper->getAvailability($item, $settings),
                    'Versand: Landtarif' 	=> $deliveryCost,
                    'Produktgewicht'        => $item['data']['variation']['weightG'],
                    'Produkttyp' 			=> $this->elasticExportHelper->getItemCharacterByBackendName($item, $settings, 'product_type'),
                    'Grundpreis' 			=> $this->elasticExportHelper->getBasePrice($item, $this->idlVariations[$item['id']]),
                ];

                $this->addCSVContent(array_values($data));
            }
        }
    }

    /**
     * @param RecordList $idlResultList
     */
    private function createIdlArray($idlResultList)
    {
        if($idlResultList instanceof RecordList)
        {
            foreach($idlResultList as $idlVariation)
            {
                if($idlVariation instanceof Record)
                {
                    $this->idlVariations[$idlVariation->variationBase->id] = [
                        'itemBase.id' => $idlVariation->itemBase->id,
                        'variationBase.id' => $idlVariation->variationBase->id,
                        'itemPropertyList' => $idlVariation->itemPropertyList,
                        'variationRetailPrice.price' => $idlVariation->variationRetailPrice->price,
                        'variationRetailPrice.vatValue' => $idlVariation->variationRetailPrice->vatValue,
                    ];
                }
            }
        }
    }
}