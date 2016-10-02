<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CostCenterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cost Centers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cost-center-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cost Center', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cost_center_id',
            'cost_description',
            'cost_remarks',
/*            'cost_xvarchar1',
            'cost_xdate1',*/
            // 'cost_xboolean1:boolean',
            // 'cost_xinterger1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
