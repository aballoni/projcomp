<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Missue */

$this->title = $model->missue_id;
$this->params['breadcrumbs'][] = ['label' => 'Missues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="missue-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->missue_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->missue_id], [
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
            'missue_id',
            'missue_remarks',
            'missue_date',
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
        ],
    ]) ?>

</div>
