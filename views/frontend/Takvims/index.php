<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\takvim\models\TakvimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Takvims';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="takvim-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Takvim', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'takvim_date',
            'gun',
            'ay',
            'yil',
            'saat',
            // 'takvimtip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
