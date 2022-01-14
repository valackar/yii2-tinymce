<?php

namespace valackar\tinymce;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

class Assets extends AssetBundle
{
    public $sourcePath ='@valackar/tinymce/editor';

    public $js = [
        'tinymce.min.js',
    ];

    public $depends = [
        YiiAsset::class,
    ];
}
