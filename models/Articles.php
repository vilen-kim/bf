<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $caption
 * @property string $text
 * @property string $image
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['caption', 'text'], 'required', 'message' => 'Это обязательное поле'],
            ['image', 'required', 'message' => 'Изображение надо загрузить на сервер'],
            [['text'], 'string'],
            [['caption', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Caption',
            'text' => 'Text',
            'image' => 'Image',
        ];
    }
}
