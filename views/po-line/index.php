<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PoLineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Po Lines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="po-line-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Po Line', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'po_line_id',
            'po_id',
            'mr_line_id',
            'mr_id',
            'userx_id',
            // 'po_line_quantity',
            // 'po_line_date',
            // 'location_id',
            // 'po_line_xdate1',
            // 'po_line_xdate2',
            // 'po_line_xdate3',
            // 'po_line_xboolean1:boolean',
            // 'po_line_xboolean2:boolean',
            // 'po_line_xboolean3:boolean',
            // 'po_line_xboolean4:boolean',
            // 'po_line_xboolean5:boolean',
            // 'po_line_xvarchar1',
            // 'po_line_xvarchar2',
            // 'po_line_xvarchar3',
            // 'po_line_xinterger1',
            // 'po_line_xinterger2',
            // 'po_line_xinterger3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
