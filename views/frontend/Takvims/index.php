<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\takvim\models\TakvimSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Takvim';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="takvim-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            

            'takvim_date',
            'gun',
            'ay',
            'yil',
            'saat',
             'takvimtip',

            
        ],
    ]); ?>
</div>
