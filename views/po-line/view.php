<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PoLine */

$this->title = $model->po_line_id;
$this->params['breadcrumbs'][] = ['label' => 'Po Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="po-line-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'po_line_id' => $model->po_line_id, 'po_id' => $model->po_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'po_line_id' => $model->po_line_id, 'po_id' => $model->po_id], [
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
            'po_line_id',
            'po_id',
            'mr_line_id',
            'mr_id',
            'userx_id',
            'po_line_quantity',
            'po_line_date',
            'location_id',
            'po_line_xdate1',
            'po_line_xdate2',
            'po_line_xdate3',
            'po_line_xboolean1:boolean',
            'po_line_xboolean2:boolean',
            'po_line_xboolean3:boolean',
            'po_line_xboolean4:boolean',
            'po_line_xboolean5:boolean',
            'po_line_xvarchar1',
            'po_line_xvarchar2',
            'po_line_xvarchar3',
            'po_line_xinterger1',
            'po_line_xinterger2',
            'po_line_xinterger3',
        ],
    ]) ?>

</div>
