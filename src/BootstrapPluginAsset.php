<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace newerton\bootstrap4;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap javascript files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 */
class BootstrapPluginAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap/dist';
    public $js = [
        'js/bootstrap.bundle.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'newerton\bootstrap4\BootstrapAsset',
    ];
}
