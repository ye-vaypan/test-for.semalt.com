<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h3>Задание № 9</h3>
    </div>

    Что выведет следующий код на JavaScript и почему:
    for( var i =0; i < 10; i++){
    setTimeout(function () {
    console.log(i);
    }, 100);
    }
    <div class="row">
        <div><strong>Что выведет следующий код на JavaScript и почему: </strong></div>
        <pre>
            for( var i =0; i < 10; i++){
                setTimeout(function () {
                    console.log(i);
                }, 100);
            }
        </pre>

        <div><strong>Ответ : </strong></div>

        <pre>
                Выдаст 10
                Время выполнения цыкла  совпадает с установленным таймаутом, асинхронное выполнение...?
            </pre>

    </div>
</div>
