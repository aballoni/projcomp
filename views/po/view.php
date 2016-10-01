<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Po */

$this->title = $model->po_id;
$this->params['breadcrumbs'][] = ['label' => 'Pos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="po-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->po_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->po_id], [
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
            'po_id',
            'po_code',
            'po_date',
            'po_xdate1',
            'po_xdate2',
            'po_xdate3',
            'po_xboolean1:boolean',
            'po_xboolean2:boolean',
            'po_xboolean3:boolean',
            'po_xboolean4:boolean',
            'po_xboolean5:boolean',
            'po_xvarchar1',
            'po_xvarchar2',
            'po_xvarchar3',
            'po_xinterger1',
            'po_xinterger2',
            'po_xinterger3',
        ],
    ]) ?>

</div>
