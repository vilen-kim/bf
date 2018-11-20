<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ArticleForm extends Model
{
    public $caption;
    public $image;
    public $imagePath;
    public $text;


    public function rules()
    {
        return [
            [['caption', 'text'], 'required', 'message' => 'Это обязательное поле'],
            ['image', 'required', 'message' => 'Укажите изображение'],
            [['text'], 'string'],
            ['image', 'file'],
            [['caption', 'imagePath'], 'string', 'max' => 255],
        ];
    }
}
