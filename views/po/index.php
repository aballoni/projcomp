<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="po-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Po', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'po_id',
            'po_code',
            'po_date',
            'po_xdate1',
            'po_xdate2',
            // 'po_xdate3',
            // 'po_xboolean1:boolean',
            // 'po_xboolean2:boolean',
            // 'po_xboolean3:boolean',
            // 'po_xboolean4:boolean',
            // 'po_xboolean5:boolean',
            // 'po_xvarchar1',
            // 'po_xvarchar2',
            // 'po_xvarchar3',
            // 'po_xinterger1',
            // 'po_xinterger2',
            // 'po_xinterger3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
