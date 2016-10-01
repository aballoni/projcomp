<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VmatstockSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vmatstock-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'material_id') ?>

    <?= $form->field($model, 'mat_description_en') ?>

    <?= $form->field($model, 'mat_manufacturer') ?>

    <?= $form->field($model, 'mat_mpn') ?>

    <?= $form->field($model, 'mat_sn') ?>

    <?php // echo $form->field($model, 'mat_inventory_ref') ?>

    <?php // echo $form->field($model, 'uom_code') ?>

    <?php // echo $form->field($model, 'mat_list_description') ?>

    <?php // echo $form->field($model, 'type_description') ?>

    <?php // echo $form->field($model, 'equip_description') ?>

    <?php // echo $form->field($model, 'owner_description') ?>

    <?php // echo $form->field($model, 'vendor_description') ?>

    <?php // echo $form->field($model, 'stock_quantity1') ?>

    <?php // echo $form->field($model, 'stock_value1') ?>

    <?php // echo $form->field($model, 'stock_value2') ?>

    <?php // echo $form->field($model, 'location_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
