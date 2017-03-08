<?php

namespace ElasticExportShoppingCOM;

use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\DataExchangeServiceProvider;

class ElasticExportShoppingCOMServiceProvider extends DataExchangeServiceProvider
{
    public function register()
    {

    }

    public function exports(ExportPresetContainer $container)
    {
        $container->add(
            'ShoppingCOM-Plugin',
            'ElasticExportShoppingCOM\ResultField\ShoppingCOM',
            'ElasticExportShoppingCOM\Generator\ShoppingCOM',
            '',
            true
        );
    }
}