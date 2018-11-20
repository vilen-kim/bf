<?php
	use yii\helpers\Html;

	$this->title = "Bona Fides";

	echo $this->render('../modals/sokov.php');
	echo $this->render('../modals/kuzmenko.php');

	echo $this->render('./1main.php');
	echo $this->render('./2why.php');
	echo $this->render('./3stages.php');
	echo $this->render('./4about.php');
	echo $this->render('./5practics.php', ['articles' => $articles]);
	echo $this->render('./6signup.php', ['model' => $model]);
	echo $this->render('./7organization.php');
?>