<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2023
 * @package yii2-export
 * @version 1.4.3
 */

namespace kartik\export;

use kartik\base\AssetBundle;

/**
 * Asset bundle for ExportMenu Widget (for export menu data)
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
use yii\web\AssetBundle;

class ExportMenuAsset extends AssetBundle
{
    public function init()
    {
        // Garante dependência de jQuery e Bootstrap (com JS)
        $this->depends = array_merge([
            'yii\web\JqueryAsset',
            'yii\bootstrap5\BootstrapAsset',        // ou Bootstrap5Asset se for o caso
            'yii\bootstrap5\BootstrapPluginAsset',  // garante bootstrap.bundle.min.js
            '\\kartik\\dialog\\DialogAsset',
        ], $this->depends);

        $this->setSourcePath(__DIR__.'/assets');
        $this->setupAssets('js', ['js/kv-export-data']);

        parent::init();
    }
}
