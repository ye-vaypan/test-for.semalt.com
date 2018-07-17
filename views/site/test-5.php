<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h3>Задание № 5</h3>
    </div>

    <div class="body-content">

        <div class="row">
            <div><strong>5) Нужно поменять 2 переменные местами без использования третьей:</strong></div>

            <pre>
                $а = [1,2,3,4,5];
                $b = ‘Hello world’;
                list($b, $a) = array($a, $b);
                echo "переменная a = $a";
                echo "переменная b = $b";
            </pre>

            <?php
            $a = [1,2,3,4,5];
            $b = 'Hello world';

            list($b, $a) = array($a, $b);

            echo "переменная a = $a <br>";
            echo "переменная b = $b";
            ?>

        </div>

    </div>
</div>
