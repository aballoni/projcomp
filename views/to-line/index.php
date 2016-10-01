<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ToLineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'To Lines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="to-line-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create To Line', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'to_line_id',
            'to_id',
            'to_line_quantity',
            'material_id',
            'to_line_mat_manual_desc',
            // 'to_line_invoice',
            // 'to_line_reference',
            // 'to_line_dimensions',
            // 'location_id',
            // 'to_line_xdate1',
            // 'to_line_xdate2',
            // 'to_line_xdate3',
            // 'to_line_xboolean1:boolean',
            // 'to_line_xboolean2:boolean',
            // 'to_line_xboolean3:boolean',
            // 'to_line_xboolean4:boolean',
            // 'to_line_xboolean5:boolean',
            // 'to_line_xvarchar1',
            // 'to_line_xvarchar2',
            // 'to_line_xvarchar3',
            // 'to_line_xinterger1',
            // 'to_line_xinterger2',
            // 'to_line_xinterger3',
            // 'userx_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
