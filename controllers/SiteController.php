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
use app\models\ArticleForm;
use yii\web\UploadedFile;

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
                        'actions' => ['admin', 'logout', 'article', 'delete'],
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
        $model = Articles::find()->select(['id', 'caption'])->all();
        return $this->render('admin', ['model' => $model]);
    }


    public function actionArticle($id=null)
    {
        $model = new ArticleForm;
        if (Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            $model->image = UploadedFile::getInstanceByName('img');
            if ($model->validate()){
                $file = $model->image;
                if ($file->saveAs('images/articles/' . $file->name)){
                    $article = ($id) ? Articles::findOne(['id' => $id]) : new Articles;
                    $article->caption = $model->caption;
                    $article->image = '/images/articles/' . $file->name;
                    $article->text = $model->text;
                    if ($article->save()){
                        return $this->redirect(['site/admin']);
                    }
                }
            }
        }
        if ($id){
            $article = Articles::findOne(['id' => $id]);
            if ($article){
                $model->caption = $article->caption;
                $model->text = $article->text;
                $model->imagePath = $article->image;
            } else {
                $id = null;
            }
        }
        return $this->render('article', ['model' => $model, 'id' => $id]);
    }


    public function actionDelete($id)
    {
        $model = Articles::findOne(['id' => $id]);
        if ($model)
            $model->delete();
        return $this->redirect(['site/admin']);
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
