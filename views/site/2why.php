<?php
	use yii\helpers\Html;

	$pdf = Html::img('@web/images/pdf.svg', ['height' => 20]);
	$priceF = Html::a($pdf . ' Прайс-лист для физических лиц от 30.09.2018', '@web/files/PriceF.pdf');
	$priceU = Html::a($pdf . ' Прайс-лист для юридических лиц от 01.10.2018', '@web/files/PriceU.pdf');
	$data = [
		[
			'image' =>  '@web/images/why1.svg',
			'header' => '<h3>Индивидуальный подход к каждому клиенту</h3>',
			'description' => 'Наше сотрудничество с клиентом строится с учетом всех его пожеланий.',
		],
		[
			'image' =>  '@web/images/why2.svg',
			'header' => '<h3>Профессионализм в процессе оказания услуг</h3>',
			'description' => 'Наши юристы имеют высшее юридическое образование и обладают самой высокой квалификацией.',
		],
		[
			'image' =>  '@web/images/why3.svg',
			'header' => '<h3>Демократичные цены</h3>',
			'description' => "Наши услуги доступны каждому, в чем вы можете убедиться сами.<br>$priceF<br>$priceU",
		],
		[
			'image' =>  '@web/images/why4.svg',
			'header' => '<h3>Лояльное отношение к клиенту</h3>',
			'description' => 'Независимо от условий, ваших финансовых возможностей или специфики вашего случая, вы в любом случае можете рассчитывать на понимание и готовность пойти навстречу с нашей стороны.',
		],
	];
?>

<div id="why">
	<div class="container">
		<h1>Почему мы?</h1>
		
		<div class="row">
			<?php
			for ($i = 0; $i < 4; $i++){
				echo Html::tag('div', Html::img($data[$i]['image']), ['class' => 'col-xs-2 col-sm-1 col-sm-offset-1']);
				echo Html::beginTag('div', ['class' => 'col-sm-4']);
					echo Html::tag('div', $data[$i]['header'], ['class' => 'col-xs-10']);
					echo Html::tag('div', $data[$i]['description'], ['class' => 'col-xs-12']);
				echo Html::endTag('div');
			}
			?>
		</div>

	</div>
</div>