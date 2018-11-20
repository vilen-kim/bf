<?php
	use yii\helpers\Html;
?>

<div id="practice">
	<div class="container">
		<h1>Наша практика</h1>

		<div class="col-sm-12 row">
			<?php
				foreach($articles as $article){
					$img = Html::img($article->image, ['width' => '100%', 'style' => 'margin-bottom: 10px;']);
					$text = Html::tag('span', $article->caption, ['style' => 'color: #111; font-weight: bold']);
					$link = Html::a($img . $text, ['site/show', 'id' => $article->id]);
					echo Html::tag('div', $link, [
						'class' => 'col-sm-4',
						'style' => 'padding: 0 80px; text-align: center; margin-bottom: 40px;'
					]);
				}
			?>
		</div>

	</div>
</div>