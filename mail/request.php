<?php
	use yii\helpers\Html;
?>

<h3>Новая заявка от <?= $model->name ?></h3>

<p><b>Дата подачи заявки:</b> <?= Yii::$app->formatter->asDate($model->date, 'dd.MM.yyyy') ?></p>

<p><b>Номер телефона:</b> <?= $model->phone ?></p>

<?php if ($model->email){ ?>
	<p><b>Электронная почта:</b> <?= $model->email ?></p>	
<?php } ?>