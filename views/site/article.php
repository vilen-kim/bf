<?php
	use yii\helpers\Html;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	use yii\web\View;
	use dosamigos\ckeditor\CKEditor;
	use kartik\file\FileInput;
	use app\assets\AdminAsset;
	AdminAsset::register($this);
?>

<div id="admin" style="padding-bottom: 40px">
	<div class="container">
		<div class="pull-right">
			<?= Html::a('Выход', ['site/logout']) ?>
		</div>
		
		<?php
			$title = ($id) ? 'Изменить статью' : 'Добавить статью';
			$button = ($id) ? 'Обновить' : 'Сохранить';

			echo Html::tag('h1', $title);

			if ($id){
				echo Html::a('Удалить статью', [
					'site/delete', 'id' => $id], [
					'class' => 'btn btn-danger',
					'style' => 'margin-bottom: 40px'
				]);
			}

			$form = ActiveForm::begin(['id' => 'addForm']);
				echo $form->field($model, 'caption')
					->textInput(['placeholder' => 'Введите название'])
					->label('Заголовок статьи');

				echo $form->field($model, 'image')
					->widget(FileInput::classname(), [
				    	'options' => [
				    		'accept' => 'image',
				    		'name' => 'img',
				    		'id' => 'img',
				    	],
				    	'pluginOptions' => [
					        'maxFileCount' => 1,
							'allowedFiletypes' => 'image',
							'showCaption' => false,
							'dropZoneEnabled' => false,
							'showUpload' => false,
							'showRemove' => false,
							'showCancel' => false,
							'initialPreview' => [$model->imagePath],
							'initialPreviewAsData' => true,
				    	],
					])->label('Изображение');
				
				echo $form->field($model, 'text')
					->widget(CKEditor::className(), [
						'options' => ['rows' => 6],
						'preset' => 'standart'
				])->label('Содержание');
				
				echo Html::beginTag('div', ['align' => 'center']);
					echo Html::submitButton($button, ['class' => 'btn btn-success']);
				echo Html::endTag('div');

			ActiveForm::end();
		?>

	</div>
</div>