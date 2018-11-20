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
    <div><img src="https://mc.yandex.ru/watch/51230620" style="position:absolute; left:-9999px;" alt="" /></div>
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
                    ['label' => 'Главная', 'url' => ['site/index', '#' => 'main']],
                    ['label' => 'Почему мы?', 'url' => ['site/index', '#' => 'why']],
                    ['label' => 'Этапы', 'url' => ['site/index', '#' => 'stages']],
                    ['label' => 'О нас', 'url' => ['site/index', '#' => 'about']],
                    ['label' => 'Наша практика', 'url' => ['site/index', '#' => 'practice']],
                    ['label' => 'Записаться', 'url' => ['site/index', '#' => 'signup']],
                    ['label' => 'Об организации', 'url' => ['site/index', '#' => 'organization']],
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
        <div class="col-sm-2 col-sm-offset-4">Телефоны:<br>8 (34672) 7-06-02<br>8-929-292-26-22</div>
        <div class="col-sm-2"><a href="https://metrika.yandex.ru/stat/?id=51230620&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/51230620/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="51230620" data-lang="ru" /></a></div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
