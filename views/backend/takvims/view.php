<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Takvim */

$this->title = $model->takvim_date;
$this->params['breadcrumbs'][] = ['label' => 'Takvims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="takvim-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->takvim_date], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->takvim_date], [
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
            'takvim_date',
            'gün',
            'ay',
            'yıl',
            'saat',
            'takvimtip',
        ],
    ]) ?>

</div>
