<?php
	use yii\helpers\Html;
?>

<div id="about">
	<div class="container">
		<h1>Немного о нас</h1>
		
		<div class="col-sm-12 row">
			<div class="col-sm-4" style="padding: 0 80px; text-align: center">
				<?php
					$img2 = Html::img('@web/images/why2.svg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$img = Html::img('@web/images/face1.jpg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text1 = Html::tag('span', 'Соков<br>Денис Алексеевич', ['style' => 'color: #111; font-weight: bold']);
					$text2 = Html::tag('span', 'Юрист', ['style' => 'color: #555']);
					echo Html::a($img2 . $text1 . '<br>' . $text2, '', ['id' => 'sokov']);
				?>
			</div>
			<div class="col-sm-4" style="padding: 0 80px; text-align: center">
				<?php
					$img = Html::img('@web/images/face2.jpg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text1 = Html::tag('span', 'Маслов<br>Теймур Илхамович', ['style' => 'color: #111; font-weight: bold']);
					$text2 = Html::tag('span', 'Директор', ['style' => 'color: #555']);
					echo Html::a($img2 . $text1 . '<br>' . $text2, null);
				?>
			</div>
			<div class="col-sm-4" style="padding: 0 80px; text-align: center">
				<?php
					$img = Html::img('@web/images/face3.svg', ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text1 = Html::tag('span', 'Кузьменко<br>Андрей Сергеевич', ['style' => 'color: #111; font-weight: bold']);
					$text2 = Html::tag('span', 'Юрист', ['style' => 'color: #555']);
					echo Html::a($img2 . $text1 . '<br>' . $text2, '', ['id' => 'kuzmenko']);
				?>
			</div>
		</div>
			
	</div>
</div>

<?php
$this->registerJs('
	$("#about #sokov").on("click", function(){
		$("#modalSokov").modal();
		return false;
	});

	$("#about #kuzmenko").on("click", function(){
		$("#modalKuzmenko").modal();
		return false;
	});
');