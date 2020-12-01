<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/bootstrap.min.css",
        "css/mdb.min.css",
        "css/owl.carousel.min.css",
        "css/owl.theme.default.min.css",
        "css/responsive.css",
        "css/home.css",
        "css/style.css",
        "css/services.css",
        "css/typography-settings.css",
        "css/about.css",
        "css/slick.css",
        "css/anime.css",
    ];
    public $js = [
        "js/jquery.min.js",
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/mdb.js",
        "js/owl.carousel.min.js",
        "js/main.js",
        "js/app.js",
        "js/slick.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
