<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h3>Задание № 1</h3>
    </div>

    <div class="body-content">

        <div class="row">
            <div><strong>Написать алгоритм решения задачи:</strong></div>

            <p>В классе 28 учеников. 75% из них занимаются спортом. Сколько учеников в классе
                занимаются спортом и сколько всего учеников в классе?</p>

                <pre>
                public function calculate($totalPeople, $percentSportPeople):self
                {
                    $peoples = new static();
                    $peoples->sportPeople = $totalPeople*$percentSportPeople/100;
                    $peoples->totalPeople = $totalPeople;
                    $peoples->percentSportPeople = $percentSportPeople;
                    $peoples->otherPeople = $totalPeople - $peoples->sportPeople;

                    return $peoples;
                }
                </pre>

            <div class="row">
                <div class="col-lg-5">

                    <?php $form = ActiveForm::begin(['id' => 'test-one']); ?>

                    <?= $form->field($model, 'totalPeople')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'percentSportPeople') ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        <?= Html::a('Clear', '/', [
                            'class' => 'btn btn-danger',
                        ]) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>

            <div class="row">
                <?php if (!empty($students)) :?>
                    <div><?= $students->getAttributeLabel('Total People')?>: <?= $students->totalPeople?></div>
                    <div><?= $students->getAttributeLabel('Percent ')?>: <?= $students->percentSportPeople?></div>
                    <div><?= $students->getAttributeLabel('People who go in for sports')?>: <?= $students->sportPeople?></div>
                    <div><?= $students->getAttributeLabel('People who do not go in for sports ')?>: <?= $students->otherPeople?></div>
                <?php endif;?>
            </div>
        </div>

    </div>
</div>
