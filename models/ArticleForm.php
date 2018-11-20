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
    const SCENARIO_UPDATE = 'update';


    public function rules()
    {
        return [
            [['caption', 'text'], 'required', 'message' => 'Это обязательное поле'],
            ['image', 'required', 'message' => 'Укажите изображение', 'except' => self::SCENARIO_UPDATE],
            [['text'], 'string'],
            ['image', 'file'],
            [['caption', 'imagePath'], 'string', 'max' => 255],
        ];
    }
}
