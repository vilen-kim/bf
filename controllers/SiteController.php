<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\SignupForm;
use app\models\LoginForm;
use app\models\User;
use app\models\Articles;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'login'],
                        'roles' => ['?', '@'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['admin', 'logout', 'add-article'],
                        'roles' => ['@'],
                    ]
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


    public function actionAdmin()
    {
        $model = Articles::find()->select(['caption', 'image'])->all();
        return $this->render('admin', ['model' => $model]);
    }


    public function actionAddArticle()
    {
        $model = new Articles;
        return $this->render('addArticle', ['model' => $model]);
    }


    public function actionLogin()
    {
        $model = new LoginForm;
        if ($model->load(Yii::$app->request->post())){
            $user = User::findByUsername('admin');
            $hash = Yii::$app->security->generatePasswordHash(Yii::$app->params['password']);
            if (Yii::$app->security->validatePassword($model->password, $hash)){
                Yii::$app->user->login($user);
                return $this->redirect('admin');
            } else {
                echo 'Неверный пароль';
            }
        }
        return $this->render('login', ['model' => $model]);
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['site/index']);
    }
}
