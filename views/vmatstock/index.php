<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VmatstockSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vmatstocks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vmatstock-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vmatstock', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'material_id',
            'mat_description_en',
            //'mat_manufacturer',
            //'mat_mpn',
            //'mat_sn',
            // 'mat_inventory_ref',
             'uom_code',
            // 'mat_list_description',
            // 'type_description',
            // 'equip_description',
            // 'owner_description',
            //'vendor_description',
            'stock_quantity1',
            // 'stock_value1',
            'stock_value2',
            'location_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
