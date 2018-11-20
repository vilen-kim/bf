<?php
	use yii\helpers\Html;
?>

<div id="show">
	<div class="container">
		<h1><?= $model->caption ?></h1>
		
		<div class="text-justify">
			<?= $model->text ?>
		</div>
	</div>
</div>