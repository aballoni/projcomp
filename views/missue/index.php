<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MissueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Missues';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="missue-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Missue', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'missue_id',
            'missue_remarks',
            'missue_date',
            'missue_xdate1',
            'missue_xdate2',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
