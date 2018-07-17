<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h3>Задание № 2</h3>
    </div>

    <div class="body-content">

        <div class="row">
            <div><strong> Реализовать алгоритм извлечения числовых значений со строки:
                    </strong></div>

            <p><strong>Пример строки : </strong>This server has 386 GB RAM and 5000 GB storage</p>

            <p><strong>Пример Кода : </strong></p>
            <pre>
                public function findNumInString($enteredString):self
                {
                    $testTwo = new static();
                    $values = explode(' ', $enteredString);
                    $str = [];
                    foreach ($values as $value)
                    {
                        $temp = preg_replace("/[^0-9]/", '', $value);
                        if (!empty($temp))
                        {
                            $str [] = $temp;
                        }
                    }

                    $testTwo->enteredString = $str;

                    return $testTwo;
                }
                </pre>

            <div class="row">
                <div class="col-lg-5">

                    <?php $form = ActiveForm::begin(['id' => 'test-two']); ?>

                    <?= $form->field($model, 'enteredString')->textInput(['autofocus' => true]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        <?= Html::a('Clear', \yii\helpers\Url::to(['url' => ['/site/test-2']]), [
                            'class' => 'btn btn-danger',
                        ]) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>

            <div class="row">
                <?php if (!empty($str)) :?>
                <?php foreach ($str->enteredString as $value):?>
                    <div><?= $str->getAttributeLabel('Recived numbers')?>: <?= $value?></div>
                    <?php endforeach;?>
                <?endif;?>
            </div>
        </div>

    </div>
</div>
