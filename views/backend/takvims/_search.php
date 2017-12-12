<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TakvimSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="takvim-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'takvim_date') ?>

    <?= $form->field($model, 'gün') ?>

    <?= $form->field($model, 'ay') ?>

    <?= $form->field($model, 'yıl') ?>

    <?= $form->field($model, 'saat') ?>

    <?php // echo $form->field($model, 'takvimtip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
