<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;

$this->title = 'Index Takvim';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;


Portlet::begin(['title' => $this->title,'subTitle' => 'takvims data','icon' => 'glyphicon glyphicon-cog']);

echo $this->render('index');

Portlet::end();



