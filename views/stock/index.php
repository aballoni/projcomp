<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stocks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stock', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stock_id',
            'stock_description',
            'stock_date',
            'stock_quantity1',
            'stock_quantity2',
            // 'stock_value1',
            // 'stock_value2',
            // 'userx_id',
            // 'stock_xboolean1:boolean',
            // 'stock_interger1',
            // 'stock_xvarchar1',
            // 'location_id',
            // 'material_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
