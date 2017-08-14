<?php

namespace ElasticExportShoppingCOM;

use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\DataExchangeServiceProvider;

/**
 * Class ElasticExportShoppingCOMServiceProvider
 * @package ElasticExportShoppingCOM
 */
class ElasticExportShoppingCOMServiceProvider extends DataExchangeServiceProvider
{
    /**
     * Registering the service provider.
     */
    public function register()
    {

    }

    /**
     * Adds the export format to the export container.
     *
     * @param ExportPresetContainer $container
     */
    public function exports(ExportPresetContainer $container)
    {
        $container->add(
            'ShoppingCOM-Plugin',
            'ElasticExportShoppingCOM\ResultField\ShoppingCOM',
            'ElasticExportShoppingCOM\Generator\ShoppingCOM',
            '',
            true,
            true
        );
    }
}