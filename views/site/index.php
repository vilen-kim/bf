<?php
	use yii\helpers\Html;
?>

<div id="main">
	<div class="container">
		<div style="position: absolute; top: 490px; left: 520px; font-size: 46px; color: #222">
			Оказание юридических услуг
		</div>
	</div>
</div>

<div id="why">
	<div class="container">
		<h1>Почему мы?</h1>
		
		<div class="col-md-12 row">
			<div class="col-md-1 col-md-offset-1">
				<?= Html::img('@web/images/why1.svg', ['width' => '100%']) ?>
			</div>
			<div class="col-md-4">
				<h3>Индивидуальный подход к каждому клиенту</h3>
				Наше сотрудничество с клиентом строится с учетом всех его пожеланий.
			</div>
			<div class="col-md-1">
				<?= Html::img('@web/images/why2.svg', ['width' => '100%']) ?>
			</div>
			<div class="col-md-4">
				<h3>Профессионализм в процессе оказания услуг</h3>
				Наши юристы имеют высшее юридическое образование и обладают самой высокой квалификацией.
			</div>
		</div>

		<div class="col-md-12 row" style="margin-top: 60px">
			<div class="col-md-1 col-md-offset-1">
				<?= Html::img('@web/images/why3.svg', ['width' => '100%']) ?>
			</div>
			<div class="col-md-4">
				<h3>Демократичные цены</h3>
				Наши услуги доступны каждому, в чем вы можете убедиться сами.<br>
				<?php
					$pdf = Html::img('@web/images/pdf.svg', ['height' => 20]);
					echo Html::a($pdf . ' Прайс-лист от 30.09.2018', '@web/files/Price.pdf');
				?>
			</div>
			<div class="col-md-1">
				<?= Html::img('@web/images/why4.svg', ['width' => '100%']) ?>
			</div>
			<div class="col-md-4">
				<h3>Лояльное отношение к клиенту</h3>
				Независимо от условий, ваших финансовых возможностей или специфики вашего случая, вы в любом случае можете рассчитывать на понимание и готовность пойти навстречу с нашей стороны.
			</div>
		</div>
			
	</div>
</div>