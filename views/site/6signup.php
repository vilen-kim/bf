<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\web\View;
?>

<div id="signup">
	<div class="container">
		<h1>Записаться на консультацию</h1>

		<h3 align="center">Оставьте свои контактные данные и мы обязательно с вами свяжемся.</h3>

		<div class="col-sm-6 col-sm-offset-3">
		<?php
			$form = ActiveForm::begin(['id' => 'signupForm']);
			    echo $form->field($model, 'name')
			    	->textInput(['placeholder' => 'Как вас зовут (обязательно)'])
			    	->label(false);
			    echo $form->field($model, 'phone')
			    	->textInput(['placeholder' => 'Номер телефона (обязательно)'])
			    	->label(false);
			    echo $form->field($model, 'email')
			    	->textInput(['placeholder' => 'Электронная почта'])
			    	->label(false);
			    
			    echo Html::beginTag('div', ['align' => 'center']);
			        echo Html::submitButton('Записаться', [
			        	'class' => 'btn btn-primary g-recaptcha',
			    		'data-sitekey' => Yii::$app->params['site_key'],
			    		'data-callback' => 'onSubmitRecaptcha',
			        ]);
			    echo Html::endTag('div');
			ActiveForm::end();
		?>
		</div>

	</div>
</div>