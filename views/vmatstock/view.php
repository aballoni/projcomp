<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vmatstock */

$this->title = $model->material_id;
$this->params['breadcrumbs'][] = ['label' => 'Vmatstocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vmatstock-view">

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
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'material_id',
            'mat_description_en',
            'mat_manufacturer',
            'mat_mpn',
            'mat_sn',
            'mat_inventory_ref',
            'uom_code',
            'mat_list_description',
            'type_description',
            'equip_description',
            'owner_description',
            'vendor_description',
            'stock_quantity1',
            'stock_value1',
            'stock_value2',
            'location_description',
        ],
    ]) ?>

</div>
