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
        '/css/site.css',
        '/bootstrap/dist/css/bootstrap.min.css',
        '/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css',
        '/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css',
        '/plugins/bower_components/morrisjs/morris.css',
        '/css/animate.css',
        '/css/style.min.css',
        '/css/colors/megna.css',
    ];
    public $js = [
        '/plugins/bower_components/jquery/dist/jquery.min.js',
        '/bootstrap/dist/js/tether.min.js',
        '/bootstrap/dist/js/bootstrap.min.js',
        '/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js',
       '/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js',
       '/js/jquery.slimscroll.js',
        '/js/waves.js',
       '/plugins/bower_components/raphael/raphael-min.js',
        '/plugins/bower_components/morrisjs/morris.js',
        '/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js',
       '/plugins/bower_components/peity/jquery.peity.min.js',
        '/plugins/bower_components/peity/jquery.peity.init.js',
      '/js/custom.min.js',
        '/js/dashboard.js',
       '/plugins/bower_components/styleswitcher/jQuery.style.switcher.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
