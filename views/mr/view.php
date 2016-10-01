<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mr */

$this->title = $model->mr_id;
$this->params['breadcrumbs'][] = ['label' => 'Mrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mr-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mr_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mr_id], [
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
            'mr_id',
            'mr_identification',
            'mr_tabdate',
            'mr_date_needed',
            'mr_manager',
            'mr_material_service:boolean',
            'mr_reason',
            'mr_remarks',
            'mr_indicacao_fornecedores',
            'mr_xdate1',
            'mr_xdate2',
            'mr_xdate3',
            'mr_xboolean1:boolean',
            'mr_xboolean2:boolean',
            'mr_xboolean3:boolean',
            'mr_xboolean4:boolean',
            'mr_xboolean5:boolean',
            'mr_xvarchar1',
            'mr_xvarchar2',
            'mr_xvarchar3',
            'mr_xinterger1',
            'mr_xinterger2',
            'mr_xinterger3',
        ],
    ]) ?>

</div>
