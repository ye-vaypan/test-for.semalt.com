<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h3>Задание № 3</h3>
    </div>

    <div class="body-content">

        <div class="row">
            ​Как получить первый элемент массива ​[2,3,56,65,56,44,34,45,3,5,35,345,3,5]
        </div>

        <?php
        $array = [2,3,56,65,56,44,34,45,3,5,35,345,3,5];
        $first = reset($array);
        ?>

        <p><strong>Пример Массива : </strong>[2,3,56,65,56,44,34,45,3,5,35,345,3,5]</p>

        <p><strong>PHP код : </strong></p>

        <pre>
                 $array = [2,3,56,65,56,44,34,45,3,5,35,345,3,5];
                 $first = reset($array);
                 echo $first;
        </pre>

        <p><strong>Первый элемент : </strong><?= $first?></p>

    </div>
</div>
