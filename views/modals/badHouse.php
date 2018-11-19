<?php
    use yii\bootstrap\Modal;
    use yii\helpers\Html;

    Modal::begin([
        'id' => 'modalBadHouse',
        'header' => '<h2>Некачественная новостройка</h2>',
        'size' => Modal::SIZE_LARGE,
        'clientOptions' => [
            'show' => false,
        ],
    ]);
?>

<div class="text-justify">
    <p><b>Покупка некачественного жилого помещения, как бороться с застройщиками?</b></p>

    <p>Не всегда приобретение нового жилья, может стать особенным событием в жизни людей. Сегодня, проблема передачи покупателям жилых помещений, не отвечающих стандартам качества, является наиболее распространенной проблемой жилищных правоотношений.</p>

    <p>Покупка новенькой квартиры, в новостройке всегда несет за собой риск, особенно в случае долевого строительства, не только оказаться без потраченных денежных средств и крыши над головой, а также получить долгожданный объект недвижимости, ненадлежащего качества. Нередки случаи передачи квартиры с плохо установленными оконными блоками, трещинами во внутренних стенах или вовсе, обрушившегося потолка. В большинстве случаев ни один из застройщиков не передал покупателям квартиру идеального качества, напротив, переданные жилые помещения содержат мелкие недостатки, а порой и крупные, которые могут доставить не мало проблем счастливым покупателям.</p>

    <p>Любые нарушения, допущенные застройщиком при строительстве, конечно справедливо обсудить с застройщиком, и с его стороны произвести безвозмездное устранение допущенных нарушений, однако на практике не всегда просто добиться справедливости.</p>

    <p>С чего же начать, как нужно действовать при получении своего нового жилья. Ответы на эти вопросы, Вы можете узнать в интервью юриста нашей компании Сокова Д. А.</p>

    <audio controls>
        <source src="/audio/BadHouse.mp3" type="audio/mpeg">
        Ваш браузер не поддерживает элементы аудио. Для прослушивания перейдите по 
        <?= Html::a('ссылке', 'https://vk.com/@499979013-pokupka-nekachestvennogo-zhilogo-pomescheniya-kak-borotsya-s') ?>
    </audio>
</div>

<?php Modal::end();