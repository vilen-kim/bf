<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\web\View;
?>

<div id="organization" style="padding-bottom: 60px">
	<div class="container">
		<h1>Об организации</h1>

		<h3>Мы находимся по адресу: Ханты-Мансийский автономный округ - Югра, г. Нягань, 2 мкр, дом 4А (здание Отель Югра86):</h3>

		<div align="center">
			<iframe
				src="https://yandex.ru/map-widget/v1/-/CBBTfOAlsA"
				width="746"
				height="533"
				frameborder="0"
				allowfullscreen="true"
			></iframe>
			<?= Html::img('/images/where.jpg', ['width' => '50%', 'style' => 'margin-top: 20px']) ?>
		</div>
	</div>
</div>