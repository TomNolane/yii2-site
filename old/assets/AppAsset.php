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
        'http://fonts.googleapis.com/css?family=Open+Sans:300,400,700',
        'css/bootstrap.min.css',
        'css/bootstrap-theme.css',
        'css/font-awesome.min.css', 
        'css/main.css',
        'css/bannerscollection_zoominout.css',  
        'css/preloader.css',
       // 'css/site.css',
    ];
    public $js = [ 
        'http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js',
        'http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js', 
        'js/facebook.js',
        'js/jquery.ui.touch-punch.min.js',
        'js/bannerscollection_zoominout.js',
        'js/js_for_slider.js',
        'js/headroom.min.js',
        'http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js',
        'js/jQuery.headroom.min.js', 
        'js/template.js',
        'js/ancor.js',
        'js/preloader.js',
    ];
    public $jsOptions = [
        //'position'=> \yii\web\View::POS_HEAD
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
        //'yii\bootstrap\BootstrapPluginAsset',
    ];
}
