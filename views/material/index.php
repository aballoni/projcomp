<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MaterialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Material', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'material_id',
            //'mat_identification',
            //'mat_description_pt',
            'mat_description_en',
            'uom_id',
            //'mat_list_id',
            'mat_vpn',
            'mat_manufacturer',
            // 'mat_mpn',
            // 'mat_sn',
            // 'materialtype_id',
            // 'mat_bin',
            // 'mat_inventory_ref',
            // 'equip_id',
            // 'mat_dimenssion',
            // 'mat_unit_price',
            // 'mat_weight',
            // 'owner_id',
            // 'mat_picture',
            // 'mat_xdate1',
            // 'mat_xdate2',
            // 'mat_xdate3',
            // 'mat_xboolean1:boolean',
            // 'mat_xboolean2:boolean',
            // 'mat_xboolean3:boolean',
            // 'mat_xboolean4:boolean',
            // 'mat_xboolean5:boolean',
            // 'mat_xvarchar1',
            // 'mat_xvarchar2',
            // 'mat_xvarchar3',
            // 'mat_xinterger1',
            // 'mat_xinterger2',
            // 'mat_xinterger3',
            // 'vendor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
