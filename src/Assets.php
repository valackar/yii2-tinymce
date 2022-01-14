<?php

namespace valackar\tinymce;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

class Assets extends AssetBundle
{
    public $sourcePath ='@anatoliy700/tinymce/editor';

    public $js = [
        'tinymce.min.js',
    ];

    public $depends = [
        YiiAsset::class,
    ];
}
