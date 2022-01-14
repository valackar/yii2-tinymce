# TinyMCE v5 Расширение для Yii2

TinyMCE - WYSIWYG редактор для встраивания в веб-страницы.

## Установка

Устанвливается через [Composer](http://getcomposer.org/download/) 

`php composer.phar require --prefer-dist valackar/yii2-tinymce "*"`

или добавить 

`valackar/yii2-tinymce: "*"`

в разделе `require` вашего composer.json файла.

## Использование

```php
use valackar\tinymce\TinymceWidget;

echo $form->field($model, 'attrebuteName')->widget(TinymceWidget::className(), [
    'editorConfig' => [
        //конфигурация редактора(подробнее в офицальной документации, ссылки ниже)
    ]
])
```

## Полезные ссылки

TinyMCE Configuration options reference - <https://www.tiny.cloud/docs/configure/>

TinyMCE API Reference - <https://www.tiny.cloud/docs/api/>
