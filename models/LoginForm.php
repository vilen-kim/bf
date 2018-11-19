<?php

namespace app\models;

use Yii;
use yii\base\Model;

class LoginForm extends Model
{
    public $password;


    public function rules()
    {
        return [
            ['password', 'required', 'message' => 'Это обязательное поле'],
        ];
    }
}
