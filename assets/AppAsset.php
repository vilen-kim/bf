<?php
    namespace app\assets;
    use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/all.css',
        'css/template.css',
        'css/header.css',
        'css/footer.css',
        'css/main.css',
        'css/why.css',
        'css/stages.css',
        'css/about.css',
        'css/practics.css',
        'css/signup.css',
        'css/animations.css',
    ];
    public $js = [
        'js/css3-animate-it.js',
        'js/signup.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
