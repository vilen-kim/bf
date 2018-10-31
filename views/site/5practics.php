<?php
	use yii\helpers\Html;
?>

<div id="practice">
	<div class="container">
		<h1>Наша практика</h1>

		<div class="col-sm-12 row">
			<div class="col-sm-4" style="padding: 0 80px; text-align: center">
				<?php
					$img = Html::img('@web/images/buyAuto.jpg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text = Html::tag('span', 'Покупка автомобиля', ['style' => 'color: #111; font-weight: bold']);
					echo Html::a($img . $text, '', ['id' => 'buyAuto']);
				?>
			</div>
			
		</div>
	</div>
</div>

<?php
$this->registerJs('
	$("#practice #buyAuto").on("click", function(){
		$("#modalBuyAuto").modal();
		return false;
	});
');