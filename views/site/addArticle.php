<?php
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\web\View;
	use dosamigos\ckeditor\CKEditor;
	use app\assets\AdminAsset;
	AdminAsset::register($this);
?>

<div id="admin">
	<div class="container">
		<div class="pull-right">
			<?= Html::a('Выход', ['site/logout']) ?>
		</div>
		
		<h1>Добавить статью</h1>

		<?php
			$form = ActiveForm::begin(['id' => 'addForm']);
			    echo $form->field($model, 'caption')
			    	->textInput(['placeholder' => 'Введите название'])
			    	->label(false);
			    echo $form->field($model, 'text')
			    	->widget(CKEditor::className(), [
        				'options' => ['rows' => 6],
        				'preset' => 'basic'
    			])->label(false);
			    echo Html::beginTag('div', ['align' => 'center']);
			        echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']);
			    echo Html::endTag('div');
			ActiveForm::end();
		?>

	</div>
</div>