<?php

namespace app\models;

use Yii;
use yii\base\Model;

class SignupForm extends Model
{
    public $name;
    public $phone;
    public $email;
    public $reCaptcha;



    public function rules()
    {
        return [
            [['name', 'phone'], 'required', 'message' => 'Это обязательное поле'],
            ['email', 'email'],
            [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className()]
        ];
    }



    public function sendEmail($html = 'request') {
        $res = Yii::$app->mailer->compose(['html' => $html], ['model' => $this])
            ->setSubject("Заявка на консультацию от " . $this->name)
            ->send();
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
}
