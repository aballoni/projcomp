<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Torders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="torder-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Torder', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'to_id',
            'to_cm_identification',
            'to_from',
            'to_to',
            'to_expeditor',
            // 'to_expeditor_phone',
            // 'to_receiver',
            // 'to_receiver_phone',
            // 'to_date_expedite',
            // 'to_date_eta',
            // 'to_modal',
            // 'to_vessel_name',
            // 'to_tug_name',
            // 'to_truck_plate',
            // 'to_transporter',
            // 'to_remarks',
            // 'to_xdate1',
            // 'to_xdate2',
            // 'to_xdate3',
            // 'to_xboolean1:boolean',
            // 'to_xboolean2:boolean',
            // 'to_xboolean3:boolean',
            // 'to_xboolean4:boolean',
            // 'to_xboolean5:boolean',
            // 'to_xvarchar1',
            // 'to_xvarchar2',
            // 'to_xvarchar3',
            // 'to_xinterger1',
            // 'xinterger2',
            // 'xinterger3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
