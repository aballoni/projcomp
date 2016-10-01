<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialCont */

$this->title = $model->material_cont_id;
$this->params['breadcrumbs'][] = ['label' => 'Material Conts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-cont-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->material_cont_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->material_cont_id], [
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
            'material_cont_id',
            'material_id',
            'cont_line',
            'cont_blueline',
            'cont_list',
            'cont_or_qty',
            'cont_or_aq_value',
            'cont_or_book_value',
            'cont_phy_qty',
            'cont_tag',
            'cont_inv_qty',
            'cont_inv_value',
            'cont_nf',
            'cont_unit_price',
            'cont_icms',
            'cont_supl_icms',
            'cont_supl_icms_nf',
            'cont_value_inaccount',
            'cont_xdate1',
            'cont_xdate2',
            'cont_xdate3',
            'cont_xboolean1:boolean',
            'cont_xboolean2:boolean',
            'cont_xboolean3:boolean',
            'cont_xvarchar1',
            'cont_xvarchar2',
            'cont_xvarchar3',
            'cont_xinterger1',
            'cont_xinterger2',
            'cont_xinterger3',
        ],
    ]) ?>

</div>
