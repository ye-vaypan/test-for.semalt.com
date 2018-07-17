<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h3>Задание № 6</h3>
    </div>

    <div class="body-content">

        <div class="row">
            <div><strong>Чем отличается оператор == от === ?</strong></div>

            <div><strong>Ответ : </strong></div>

                <table border="1">
                    <tr>
                        <td>$a == $b</td>
                        <td>Равно TRUE</td>
                        <td> если $a равно $b после преобразования типов.</td>
                    </tr>
                    <tr>
                        <td>$a === $b</td>
                        <td>Тождественно равно	TRUE</td>
                        <td> если $a равно $b и имеет тот же тип.</td>
                    </tr>
                </table>

        </div>

    </div>
</div>
