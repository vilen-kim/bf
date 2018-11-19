<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\web\View;
	use app\assets\AdminAsset;
	AdminAsset::register($this);
?>

<div id="login">
	<div class="container">
		<h1>Вход в панель администрирования</h1>

		<div class="col-sm-6 col-sm-offset-3">
		<?php
			$form = ActiveForm::begin(['id' => 'loginForm']);
			    echo $form->field($model, 'password')
			    	->textInput(['placeholder' => 'Введите пароль'])
			    	->label(false);
			    
			    echo Html::beginTag('div', ['align' => 'center']);
			        echo Html::submitButton('Войти');
			    echo Html::endTag('div');
			ActiveForm::end();
		?>
		</div>

	</div>
</div>