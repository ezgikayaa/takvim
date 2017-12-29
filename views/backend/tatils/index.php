<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\takvim\models\TatilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tatils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tatil-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tatil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tatil_id',
            'tatil_adi',
            'tatil_tipi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
