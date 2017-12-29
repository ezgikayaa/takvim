<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\takvim\models\Takvim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="takvim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'takvim_date')->textInput() ?>

    <?= $form->field($model, 'gun')->textInput() ?>

    <?= $form->field($model, 'ay')->textInput() ?>

    <?= $form->field($model, 'yil')->textInput() ?>

    <?= $form->field($model, 'saat')->textInput() ?>

    <?= $form->field($model, 'takvimtip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
