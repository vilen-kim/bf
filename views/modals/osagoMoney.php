<?php
    use yii\bootstrap\Modal;
    use yii\helpers\Html;

    Modal::begin([
        'id' => 'modalOsagoMoney',
        'header' => '<h2>ОСАГО и денежная компенсация</h2>',
        'size' => Modal::SIZE_LARGE,
        'clientOptions' => [
            'show' => false,
        ],
    ]);
?>
<div class="text-justify">
    <p><b>Ваша гражданская ответственность застрахована по полису ОСАГО, но в результате ДТП страховая или потерпевший требует денежные средства в качестве компенсации ущерба? Правомерны ли такие требования и что делать в подобной ситуации?</b></p>

    <p>В связи с реформой законодательства об ОСАГО, проведенной в 2015 года, размер восстановительного ремонта транспортного средства потерпевшего рассчитывается с учетом «Положения о единой методике определения размера расходов на восстановительный ремонт в отношении поврежденного транспортного средства» (утв. Банком России 19.09.2014 N 432-П).</p>

    <p>Особенностью данного нормативного правового акта является то, что размер восстановительного ремонта рассчитывается с учетом износа деталей, что приводит к тому, что потерпевшему зачастую не хватает страхового возмещения для восстановления своего транспортного средства. Соответственно, лицо, которое понесло убытки в результате ДТП вынужденно тратить свои личные денежные средства для полного восстановления автомобиля.</p>

    <p>После вынесения Постановления Конституционного суда от 10.03.2017 года № 6 "По делу о проверке конституционности статьи 15, пункта 1 статьи 1064, статьи 1072 и пункта 1 статьи 1079 Гражданского кодекса Российской Федерации в связи с жалобами граждан А.С.Аринушенко, Г.С.Бересневой и других" зачастую потерпевшие обращаются в суд к непосредственному причинителю вреда с требованиями о взыскании убытков, а по существу разницы между стоимостью восстановительного ремонта с учетом износа и без учета износа.</p>

    <p>Но у одного из наших клиентов возникла проблема, когда страховая компания обратилась к последнему с требованием о взыскании убытков в порядке регресса, так как у потерпевшего был полис КАСКО и соответственно, страховая компания была вынуждена произвести ремонт в полном объеме.</p>

    <p>В настоящем деле, юристами нашей компании удалось доказать, подобное толкование положений действующего законодательства в системной взаимосвязи означало бы полное дезавуирование целей и задач законодательства об ОСАГО, привело бы к нарушению баланса интересов и гарантий возмещения вреда, причиненного имуществу потерпевшего как основного принципа обязательного страхования (статья 3 Закона об ОСАГО) ввиду неоправданного перекладывания бремени по возмещению ущерба на причинителя вреда, тогда как его ответственность за причинение вреда застрахована участником профессиональной деятельности страховщиков в обязательном порядке в силу закона.</p>

    <p>Противоположный подход приведет к необоснованному освобождению страховой компании, застраховавшей гражданскую ответственность лица, причинившего вред от исполнения ее обязательств возместить потерпевшему вред в пределах лимита, установленного статьи 7 Закона об ОСАГО и такое толкование полностью лишает страхователя материально-правового интереса в заключении договора ОСАГО и повлечет к утрате заложенного в него законодателем смысла.</p>

    <p>Суд прислушался к нашей позиции и отказал страховой компании в удовлетворении исковых требований.</p>
</div>

<?php Modal::end();