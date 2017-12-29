<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\takvim\models\Tatil */

$this->title = $model->tatil_id;
$this->params['breadcrumbs'][] = ['label' => 'Tatils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tatil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tatil_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tatil_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tatil_id',
            'tatil_adi',
            'tatil_tipi',
        ],
    ]) ?>

</div>
