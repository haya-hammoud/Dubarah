<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/main.css',
        'css/owl.carousel.css',
        'css/responsive.css',
        'css/slider.css',
        'css/presets/preset1.css',
        'css/presets/preset2.css',
        'css/presets/preset3.css',
        'css/presets/preset4.css',
    ];
    public $js = [
    'js/bootstrap.min.js',
    'js/custom.js',
    'js/gmaps.min.js',
    'js/gomap.js',
    'js/jquery.min.js',
    'js/magnific-popup.min.js',
    'js/map.js',
    'js/modernizr.min.js',
    'js/owl.carousel.min.js',
    'js/price-range.js',
    'js/scrollup.min.js',
    'js/smoothscroll.min.js',
    'js/switcher.js',
    

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
