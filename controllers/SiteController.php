<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\SignupForm;
use app\models\LoginForm;

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
            $model->sendEmail();
        }
        return $this->render('index', ['model' => $model]);
    }


    public function actionLogin()
    {
        $model = new LoginForm;
        if ($model->load(Yii::$app->request->post())){
            if ($model->password == Yii::$app->params['password']){
                return $this->redirect('admin')
            }
        }
        return $this->render('login', ['model' => $model]);
    }
}
