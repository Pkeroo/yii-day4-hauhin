<?php
$this->title = 'kpi1';
$this->params['breadcrumbs'][] = [
    'label' => 'kpi',
    'url' => ['/kpi/index',]
];
$this->params['breadcrumbs'][] = $this->title;
use yii\grid\GridView;
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'tableOptions' => ['class' => 'table table-striped table-bordered table-responsive table-hover'],
    'headerRowOptions'=> ['class'=>'success']
]);
?>