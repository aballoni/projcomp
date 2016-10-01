<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MreceiptLineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mreceipt Lines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mreceipt-line-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mreceipt Line', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mreceipt_line_id',
            'mreceipt_id',
            'po_line_id',
            'po_id',
            'userx_id',
            // 'mreceipt_line_quantity',
            // 'mreceipt_line_invoice',
            // 'mreceipt_line_date',
            // 'location_id',
            // 'mreceipt_line_xdate1',
            // 'mreceipt_line_xdate2',
            // 'mreceipt_line_xdate3',
            // 'mreceipt_line_xboolean1:boolean',
            // 'mreceipt_line_xboolean2:boolean',
            // 'mreceipt_line_xboolean3:boolean',
            // 'mreceipt_line_xboolean4:boolean',
            // 'mreceipt_line_xboolean5:boolean',
            // 'mreceipt_line_xvarchar1',
            // 'mreceipt_line_xvarchar2',
            // 'mreceipt_line_xvarchar3',
            // 'mreceipt_line_xinterger1',
            // 'mreceipt_line_xinterger2',
            // 'mreceipt_line_xinterger3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
