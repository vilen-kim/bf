<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\SignupForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                ],
            ],
        ];
    }



    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }



    public function actionIndex()
    {
        $model = new SignupForm;

        $post = Yii::$app->request->post();
        if ($model->load($post)){
            if (isset($post['g-recaptcha-response'])) {
                $secretKey = Yii::$app->params['secret_key'];
                $response = $post['g-recaptcha-response'];
                $remoteIp = Yii::$app->request->userIP;
                $reCaptchaValidationUrl = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteIp");
                $result = json_decode($reCaptchaValidationUrl, TRUE);
                
                print_r($result);
                // if($result['success'] == 1) {
                //     $userMessage = '<div>Success: you\'ve made it :)</div>';
                // } else {
                //     $userMessage = '<div>Fail: please try again :(</div>';
                // }
            }
        }

        return $this->render('index', ['model' => $model]);
    }
}
