<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Stock */

$this->title = $model->stock_id;
$this->params['breadcrumbs'][] = ['label' => 'Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->stock_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->stock_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'stock_id',
            'stock_description',
            'stock_date',
            'stock_quantity1',
            'stock_quantity2',
            'stock_value1',
            'stock_value2',
            'userx_id',
            'stock_xboolean1:boolean',
            'stock_interger1',
            'stock_xvarchar1',
            'location_id',
            'material_id',
        ],
    ]) ?>

</div>
