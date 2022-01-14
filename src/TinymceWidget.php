<?php

namespace valackar\tinymce;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;
use yii\widgets\InputWidget;

class TinymceWidget extends InputWidget
{
    public $editorConfig = [];

    public function run()
    {
        $config = [
            'selector' => "#{$this->options['id']}",
        ];

        Assets::register($this->getView());

        echo Html::activeTextarea($this->model, $this->attribute, $this->options);

        $config = ArrayHelper::merge($config, $this->editorConfig);
        $config = Json::encode($config);

        $js = "tinymce.init({$config});";

        $this->getView()->registerJs($js, View::POS_END);
    }
}
