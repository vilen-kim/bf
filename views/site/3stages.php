<?php
	use yii\helpers\Html;

	$data = [
		[
			'image' =>  '@web/images/stage.svg',
			'header' => '<h3>1. Консультирование</h3>',
		],
		[
			'image' =>  '@web/images/stage.svg',
			'header' => '<h3>2. Подготовка претензий</h3>',
		],
		[
			'image' =>  '@web/images/stage.svg',
			'header' => '<h3>3. Подготовка процессуальных и иных документов</h3>',
		],
		[
			'image' =>  '@web/images/stage.svg',
			'header' => '<h3>4. Формулировка правовой позиции по делу</h3>',
		],
		[
			'image' =>  '@web/images/stage.svg',
			'header' => '<h3>5. Досудебное урегулирование споров</h3>',
		],
		[
			'image' =>  '@web/images/stage.svg',
			'header' => '<h3>6. Представление интересов клиента в суде</h3>',
		],
		[
			'image' =>  '@web/images/stage.svg',
			'header' => '<h3>7. Регистрационные действия</h3>',
		],
		[
			'image' =>  '@web/images/stage.svg',
			'header' => '<h3>8. Сопровождение исполнительного производства</h3>',
		],
	];
?>

<div id="stages" style="margin-top: 80px">
	<div class="container">
		<h1>Мы оказываем услуги на любом этапе</h1>
		<?php
		for ($i = 0; $i < 7; $i += 2){
			echo Html::beginTag('div', ['class' => 'row']);
				echo Html::tag('div', Html::img($data[$i]['image']), ['class' => 'col-xs-2 col-sm-1 col-sm-offset-1']);
				echo Html::tag('div', $data[$i]['header'], ['class' => 'col-xs-10 col-sm-4']);
				echo Html::tag('div', Html::img($data[$i+1]['image']), ['class' => 'col-xs-2 col-sm-1 col-sm-offset-1']);
				echo Html::tag('div', $data[$i+1]['header'], ['class' => 'col-xs-10 col-sm-4']);
			echo Html::endTag('div');
		}
		?>
	</div>
</div>