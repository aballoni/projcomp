<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MreceiptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mreceipts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mreceipt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mreceipt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mreceipt_id',
            'mreceipt_identification',
            'mreceipt_remarks',
            'mreceipt_date',
            'mreceipt_xdate1',
            // 'mreceipt_xdate2',
            // 'mreceipt_xdate3',
            // 'mreceipt_xboolean1:boolean',
            // 'mreceipt_xboolean2:boolean',
            // 'mreceipt_xboolean3:boolean',
            // 'mreceipt_xboolean4:boolean',
            // 'mreceipt_xboolean5:boolean',
            // 'mreceipt_xvarchar1',
            // 'mreceipt_xvarchar2',
            // 'mreceipt_xvarchar3',
            // 'mreceipt_xinterger1',
            // 'mreceipt_xinterger2',
            // 'mreceipt_xinterger3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
