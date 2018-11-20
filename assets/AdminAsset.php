<?php
    namespace app\assets;
    use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/admin.css',
        'css/fileinput.min.css',
    ];
    public $js = [
        'js/fileinput.min.js',
        'js/piexif.min.js',
        'js/purify.min.js',
        'js/sortable.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
