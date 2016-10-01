<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MissueLineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Missue Lines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="missue-line-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Missue Line', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'missue_line_id',
            'missue_id',
            'material_id',
            'missue_quantity',
            'missue_mat_manual_desc',
            // 'missue_invoice',
            // 'location_id',
            // 'missue_xdate1',
            // 'missue_xdate2',
            // 'missue_xdate3',
            // 'missue_xboolean1:boolean',
            // 'missue_xboolean2:boolean',
            // 'missue_xboolean3:boolean',
            // 'missue_xboolean4:boolean',
            // 'missue_xboolean5:boolean',
            // 'missue_xvarchar1',
            // 'missue_xvarchar2',
            // 'missue_xvarchar3',
            // 'missue_xinterger1',
            // 'missue_xinterger2',
            // 'missue_xinterger3',
            // 'userx_id',
            // 'client_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
