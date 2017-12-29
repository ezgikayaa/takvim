<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\takvim\models\Tatil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tatil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tatil_id')->textInput() ?>

    <?= $form->field($model, 'tatil_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tatil_tipi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
