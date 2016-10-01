<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MrLine */

$this->title = $model->mr_line_id;
$this->params['breadcrumbs'][] = ['label' => 'Mr Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mr-line-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'mr_line_id' => $model->mr_line_id, 'mr_id' => $model->mr_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'mr_line_id' => $model->mr_line_id, 'mr_id' => $model->mr_id], [
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
            'mr_line_id',
            'mr_id',
            'material_id',
            'mr_line_mat_manual_desc',
            'userx_id',
            'client_id',
            'budget_id',
            'cost_center_id',
            'mr_line_quantity',
            'mr_line_date',
            'location_id',
            'mr_line_xdate1',
            'mr_line_xdate2',
            'mr_line_xdate3',
            'mr_line_xboolean1:boolean',
            'mr_line_xboolean2:boolean',
            'mr_line_xboolean3:boolean',
            'mr_line_xboolean4:boolean',
            'mr_line_xboolean5:boolean',
            'mr_line_xvarchar1',
            'mr_line_xvarchar2',
            'mr_line_xvarchar3',
            'mr_line_xinterger1',
            'mr_line_xinterger2',
            'mr_line_xinterger3',
        ],
    ]) ?>

</div>
