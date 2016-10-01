<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mreceipt */

$this->title = $model->mreceipt_id;
$this->params['breadcrumbs'][] = ['label' => 'Mreceipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mreceipt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mreceipt_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mreceipt_id], [
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
            'mreceipt_id',
            'mreceipt_identification',
            'mreceipt_remarks',
            'mreceipt_date',
            'mreceipt_xdate1',
            'mreceipt_xdate2',
            'mreceipt_xdate3',
            'mreceipt_xboolean1:boolean',
            'mreceipt_xboolean2:boolean',
            'mreceipt_xboolean3:boolean',
            'mreceipt_xboolean4:boolean',
            'mreceipt_xboolean5:boolean',
            'mreceipt_xvarchar1',
            'mreceipt_xvarchar2',
            'mreceipt_xvarchar3',
            'mreceipt_xinterger1',
            'mreceipt_xinterger2',
            'mreceipt_xinterger3',
        ],
    ]) ?>

</div>
