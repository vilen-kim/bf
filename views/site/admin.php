<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\web\View;
	use app\assets\AdminAsset;
	AdminAsset::register($this);
?>

<div id="admin">
	<div class="container">
		<div class="pull-right">
			<?= Html::a('Выход', ['site/logout']) ?>
		</div>
		
		<h1>Администрирование статей</h1>

		<?= Html::a('Добавить статью', ['site/article'], ['class' => 'btn btn-success']) ?>

		<div style="margin-top: 40px">
			<ol>
				<?php
					foreach($model as $article) {
						$url = Html::a($article->caption, ['site/article', 'id' => $article->id]);
						echo Html::tag('li', $url);
					}
				?>
			</ol>
		</div>

	</div>
</div>