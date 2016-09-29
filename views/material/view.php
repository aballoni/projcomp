<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Material */

$this->title = $model->material_id;
$this->params['breadcrumbs'][] = ['label' => 'Materials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-view">



    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->material_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->material_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'material_id',
            'mat_identification',
            'mat_description_pt',
            'mat_description_en',
            'uom_id',
            'mat_list_id',
            'mat_vpn',
            'mat_manufacturer',
            'mat_mpn',
            'mat_sn',
            'materialtype_id',
            'mat_bin',
            'mat_inventory_ref',
            'equip_id',
            'mat_dimenssion',
            'mat_unit_price',
            'mat_weight',
            'owner_id',
            'mat_picture',
            'mat_xdate1',
            'mat_xdate2',
            'mat_xdate3',
            'mat_xboolean1:boolean',
            'mat_xboolean2:boolean',
            'mat_xboolean3:boolean',
            'mat_xboolean4:boolean',
            'mat_xboolean5:boolean',
            'mat_xvarchar1',
            'mat_xvarchar2',
            'mat_xvarchar3',
            'mat_xinterger1',
            'mat_xinterger2',
            'mat_xinterger3',
            'vendor_id',
        ],
    ]) ?>

</div>
