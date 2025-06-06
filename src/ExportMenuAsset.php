<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2023
 * @package yii2-export
 * @version 1.4.3
 */

namespace weebz\yii2export;

/**
 * Asset bundle for ExportMenu Widget (for export menu data)
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
use kartik\base\AssetBundle as KartikAssetBundle;
use yii\web\AssetBundle; // ou nem precisa se não estiver usando diretamente

class ExportMenuAsset extends KartikAssetBundle
{
    public function init()
    {
        $this->depends = array_merge([
            'yii\web\JqueryAsset',
            'yii\bootstrap5\BootstrapAsset',
            'yii\bootstrap5\BootstrapPluginAsset',
            'kartik\dialog\DialogAsset',
        ], $this->depends);

        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/kv-export-data']);

        parent::init();
    }
}

