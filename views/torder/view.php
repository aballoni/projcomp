<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Torder */

$this->title = $model->to_id;
$this->params['breadcrumbs'][] = ['label' => 'Torders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="torder-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->to_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->to_id], [
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
            'to_id',
            'to_cm_identification',
            'to_from',
            'to_to',
            'to_expeditor',
            'to_expeditor_phone',
            'to_receiver',
            'to_receiver_phone',
            'to_date_expedite',
            'to_date_eta',
            'to_modal',
            'to_vessel_name',
            'to_tug_name',
            'to_truck_plate',
            'to_transporter',
            'to_remarks',
            'to_xdate1',
            'to_xdate2',
            'to_xdate3',
            'to_xboolean1:boolean',
            'to_xboolean2:boolean',
            'to_xboolean3:boolean',
            'to_xboolean4:boolean',
            'to_xboolean5:boolean',
            'to_xvarchar1',
            'to_xvarchar2',
            'to_xvarchar3',
            'to_xinterger1',
            'xinterger2',
            'xinterger3',
        ],
    ]) ?>

</div>
