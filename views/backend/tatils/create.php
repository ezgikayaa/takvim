<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\takvim\models\Tatil */

$this->title = 'Create Tatil';
$this->params['breadcrumbs'][] = ['label' => 'Tatils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tatil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
