<?php
    use yii\bootstrap\Modal;
    use yii\helpers\Html;

    Modal::begin([
        'id' => 'modalKuzmenko',
        'header' => '<h2>Кузьменко Андрей Сергеевич</h2>',
        'size' => Modal::SIZE_DEFAULT,
        'clientOptions' => [
            'show' => false,
        ],
    ]);
?>

<h3 style="margin-bottom: 10px">Юрист</h3>

<p>Диплом магистратуры, Тюменской государственной академии мировой экономики управления и права, Юридический факультет, форма обучения очная, по специальности Юриспруденция.</p>
<p>Опыт работы – 5 лет.</p>

 <?php Modal::end();