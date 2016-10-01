<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MreceiptLine */

$this->title = $model->mreceipt_line_id;
$this->params['breadcrumbs'][] = ['label' => 'Mreceipt Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mreceipt-line-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'mreceipt_line_id' => $model->mreceipt_line_id, 'mreceipt_id' => $model->mreceipt_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'mreceipt_line_id' => $model->mreceipt_line_id, 'mreceipt_id' => $model->mreceipt_id], [
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
            'mreceipt_line_id',
            'mreceipt_id',
            'po_line_id',
            'po_id',
            'userx_id',
            'mreceipt_line_quantity',
            'mreceipt_line_invoice',
            'mreceipt_line_date',
            'location_id',
            'mreceipt_line_xdate1',
            'mreceipt_line_xdate2',
            'mreceipt_line_xdate3',
            'mreceipt_line_xboolean1:boolean',
            'mreceipt_line_xboolean2:boolean',
            'mreceipt_line_xboolean3:boolean',
            'mreceipt_line_xboolean4:boolean',
            'mreceipt_line_xboolean5:boolean',
            'mreceipt_line_xvarchar1',
            'mreceipt_line_xvarchar2',
            'mreceipt_line_xvarchar3',
            'mreceipt_line_xinterger1',
            'mreceipt_line_xinterger2',
            'mreceipt_line_xinterger3',
        ],
    ]) ?>

</div>
