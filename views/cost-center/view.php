<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CostCenter */

$this->title = $model->cost_center_id;
$this->params['breadcrumbs'][] = ['label' => 'Cost Centers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cost-center-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cost_center_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cost_center_id], [
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
            'cost_center_id',
            'cost_description',
            'cost_remarks',
            'cost_xvarchar1',
            'cost_xdate1',
            'cost_xboolean1:boolean',
            'cost_xinterger1',
        ],
    ]) ?>

</div>
