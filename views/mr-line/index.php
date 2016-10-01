<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MrLineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mr Lines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mr-line-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mr Line', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mr_line_id',
            'mr_id',
            'material_id',
            'mr_line_mat_manual_desc',
            'userx_id',
            // 'client_id',
            // 'budget_id',
            // 'cost_center_id',
            // 'mr_line_quantity',
            // 'mr_line_date',
            // 'location_id',
            // 'mr_line_xdate1',
            // 'mr_line_xdate2',
            // 'mr_line_xdate3',
            // 'mr_line_xboolean1:boolean',
            // 'mr_line_xboolean2:boolean',
            // 'mr_line_xboolean3:boolean',
            // 'mr_line_xboolean4:boolean',
            // 'mr_line_xboolean5:boolean',
            // 'mr_line_xvarchar1',
            // 'mr_line_xvarchar2',
            // 'mr_line_xvarchar3',
            // 'mr_line_xinterger1',
            // 'mr_line_xinterger2',
            // 'mr_line_xinterger3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
