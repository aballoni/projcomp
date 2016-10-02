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
            //'mat_identification',
            //'mat_description_pt',
            'mat_description_en:text:Description',
            'uom.uom_code:text:UOM',
            'matList.mat_list_description:text:List',
            'mat_vpn:text:VPN',
            'mat_manufacturer:text:Manuf',
            'mat_mpn:text:MPN',
            'mat_sn:text:SN',
            'materialtype.type_description:text:Type',
            //'mat_bin',
            'mat_inventory_ref:text:TAG',
            'equip.equip_description:text:Equip',
            'mat_dimenssion:text:Dimenssion',
            //'mat_unit_price',
            'mat_weight:text:Weight',
            'owner.owner_description:text:Owner',
            //'mat_picturetext:Pic File',
/*            'mat_xdate1',
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
            'mat_xinterger3',*/
            //'vendor.vendor_description:text:Vendor',
        ],
    ]) ?>

    <img src="imagens/<?= $model->mat_picture ?>.jpg" height="300" width="300" style="float:left">

</div>
