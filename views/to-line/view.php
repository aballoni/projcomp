<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ToLine */

$this->title = $model->to_line_id;
$this->params['breadcrumbs'][] = ['label' => 'To Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="to-line-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'to_line_id' => $model->to_line_id, 'to_id' => $model->to_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'to_line_id' => $model->to_line_id, 'to_id' => $model->to_id], [
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
            'to_line_id',
            'to_id',
            'to_line_quantity',
            'material_id',
            'to_line_mat_manual_desc',
            'to_line_invoice',
            'to_line_reference',
            'to_line_dimensions',
            'location_id',
            'to_line_xdate1',
            'to_line_xdate2',
            'to_line_xdate3',
            'to_line_xboolean1:boolean',
            'to_line_xboolean2:boolean',
            'to_line_xboolean3:boolean',
            'to_line_xboolean4:boolean',
            'to_line_xboolean5:boolean',
            'to_line_xvarchar1',
            'to_line_xvarchar2',
            'to_line_xvarchar3',
            'to_line_xinterger1',
            'to_line_xinterger2',
            'to_line_xinterger3',
            'userx_id',
        ],
    ]) ?>

</div>
