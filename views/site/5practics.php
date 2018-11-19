<?php
	use yii\helpers\Html;
?>

<div id="practice">
	<div class="container">
		<h1>Наша практика</h1>

		<div class="col-sm-12 row">
			<div class="col-sm-4" style="padding: 0 80px; text-align: center">
				<?php
					$img = Html::img('@web/images/notWork.jpg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text = Html::tag('span', 'Работодатель и зарплата', ['style' => 'color: #111; font-weight: bold']);
					echo Html::a($img . $text, '', ['id' => 'notWork']);
				?>
			</div>
			<div class="col-sm-4" style="padding: 0 80px; text-align: center">
				<?php
					$img = Html::img('@web/images/buyAuto.jpg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text = Html::tag('span', 'Покупка автомобиля', ['style' => 'color: #111; font-weight: bold']);
					echo Html::a($img . $text, '', ['id' => 'buyAuto']);
				?>
			</div>
			<div class="col-sm-4" style="padding: 0 80px; text-align: center">
				<?php
					$img = Html::img('@web/images/osagoMoney.jpg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text = Html::tag('span', 'ОСАГО и денежная компенсация', ['style' => 'color: #111; font-weight: bold']);
					echo Html::a($img . $text, '', ['id' => 'osagoMoney']);
				?>
			</div>
		</div>

		<div class="col-sm-12 row" style="margin-top: 40px">
			<div class="col-sm-4" style="padding: 0 80px; text-align: center">
				<?php
					$img = Html::img('@web/images/tourBankruptcy.jpg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text = Html::tag('span', 'Банкротство туроператора', ['style' => 'color: #111; font-weight: bold']);
					echo Html::a($img . $text, '', ['id' => 'tourBankruptcy']);
				?>
			</div>
			<div class="col-sm-4" style="padding: 0 80px; text-align: center">
				<?php
					$img = Html::img('@web/images/landScape.jpg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text = Html::tag('span', 'Земельный участок', ['style' => 'color: #111; font-weight: bold']);
					echo Html::a($img . $text, '', ['id' => 'landScape']);
				?>
			</div>
			<div class="col-sm-4" style="padding: 0 80px; text-align: center">
				<?php
					$img = Html::img('@web/images/trainLate.jpg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text = Html::tag('span', 'Компенсации пассажиру', ['style' => 'color: #111; font-weight: bold']);
					echo Html::a($img . $text, '', ['id' => 'trainLate']);
				?>
			</div>
		</div>

		<div class="col-sm-12 row" style="margin-top: 40px">
			<div class="col-sm-4" style="padding: 0 80px; text-align: center">
				<?php
					$img = Html::img('@web/images/badHouse.jpg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text = Html::tag('span', 'Некачественная новостройка', ['style' => 'color: #111; font-weight: bold']);
					echo Html::a($img . $text, '', ['id' => 'badHouse']);
				?>
			</div>
		</div>	
	</div>
</div>

<?php
$this->registerJs('
	$("#practice #notWork").on("click", function(){
		$("#modalNotWork").modal();
		return false;
	});

	$("#practice #buyAuto").on("click", function(){
		$("#modalBuyAuto").modal();
		return false;
	});

	$("#practice #osagoMoney").on("click", function(){
		$("#modalOsagoMoney").modal();
		return false;
	});

	$("#practice #tourBankruptcy").on("click", function(){
		$("#modalTourBankruptcy").modal();
		return false;
	});

	$("#practice #landScape").on("click", function(){
		$("#modalLandScape").modal();
		return false;
	});

	$("#practice #trainLate").on("click", function(){
		$("#modalTrainLate").modal();
		return false;
	});

	$("#practice #badHouse").on("click", function(){
		$("#modalBadHouse").modal();
		return false;
	});
');