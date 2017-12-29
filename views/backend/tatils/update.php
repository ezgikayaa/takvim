<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\takvim\models\Tatil */

$this->title = 'Update Tatil: ' . $model->tatil_id;
$this->params['breadcrumbs'][] = ['label' => 'Tatils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tatil_id, 'url' => ['view', 'id' => $model->tatil_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tatil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
