<?php
    use app\widgets\Alert;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use app\assets\AppAsset;
    AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet"> 
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="container">
        <?php
            NavBar::begin([
                'brandLabel' => Html::img('@web/images/logo.png', ['height' => '40px']),
                'brandUrl' => ['site/index'],
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Главная', 'url' => '#main'],
                    ['label' => 'Почему мы?', 'url' => '#why'],
                    ['label' => 'Этапы', 'url' => '#stages'],
                    ['label' => 'О нас', 'url' => '#about'],
                    ['label' => 'Наша практика', 'url' => '#practice'],
                    ['label' => 'Записаться', 'url' => '#signup'],
                    ['label' => 'Об организации', 'url' => '#organization'],
                ],
            ]);
            NavBar::end();
        ?>
    </div>
</header>

<div class="page">
    <?= $content ?>
</div>

<footer>
    <div class="container">
        <div class="col-sm-4">Общество с ограниченной ответственностью<br>"Юридическая компания БОНА ФИДЕС"</div>
        <div class="col-sm-2 col-sm-offset-6">Телефоны:<br>8 (34672) 7-06-02<br>8-929-292-26-22</div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
