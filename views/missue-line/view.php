<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MissueLine */

$this->title = $model->missue_line_id;
$this->params['breadcrumbs'][] = ['label' => 'Missue Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="missue-line-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'missue_line_id' => $model->missue_line_id, 'missue_id' => $model->missue_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'missue_line_id' => $model->missue_line_id, 'missue_id' => $model->missue_id], [
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
            'missue_line_id',
            'missue_id',
            'material_id',
            'missue_quantity',
            'missue_mat_manual_desc',
            'missue_invoice',
            'location_id',
            'missue_xdate1',
            'missue_xdate2',
            'missue_xdate3',
            'missue_xboolean1:boolean',
            'missue_xboolean2:boolean',
            'missue_xboolean3:boolean',
            'missue_xboolean4:boolean',
            'missue_xboolean5:boolean',
            'missue_xvarchar1',
            'missue_xvarchar2',
            'missue_xvarchar3',
            'missue_xinterger1',
            'missue_xinterger2',
            'missue_xinterger3',
            'userx_id',
            'client_id',
        ],
    ]) ?>

</div>
