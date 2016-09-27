<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'material_id') ?>

    <?= $form->field($model, 'mat_identification') ?>

    <?= $form->field($model, 'mat_description_pt') ?>

    <?= $form->field($model, 'mat_description_en') ?>

    <?= $form->field($model, 'uom_id') ?>

    <?php // echo $form->field($model, 'mat_list_id') ?>

    <?php // echo $form->field($model, 'mat_vpn') ?>

    <?php // echo $form->field($model, 'mat_manufacturer') ?>

    <?php // echo $form->field($model, 'mat_mpn') ?>

    <?php // echo $form->field($model, 'mat_sn') ?>

    <?php // echo $form->field($model, 'materialtype_id') ?>

    <?php // echo $form->field($model, 'mat_bin') ?>

    <?php // echo $form->field($model, 'mat_inventory_ref') ?>

    <?php // echo $form->field($model, 'equip_id') ?>

    <?php // echo $form->field($model, 'mat_dimenssion') ?>

    <?php // echo $form->field($model, 'mat_unit_price') ?>

    <?php // echo $form->field($model, 'mat_weight') ?>

    <?php // echo $form->field($model, 'owner_id') ?>

    <?php // echo $form->field($model, 'mat_picture') ?>

    <?php // echo $form->field($model, 'mat_xdate1') ?>

    <?php // echo $form->field($model, 'mat_xdate2') ?>

    <?php // echo $form->field($model, 'mat_xdate3') ?>

    <?php // echo $form->field($model, 'mat_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'mat_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'mat_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'mat_xboolean4')->checkbox() ?>

    <?php // echo $form->field($model, 'mat_xboolean5')->checkbox() ?>

    <?php // echo $form->field($model, 'mat_xvarchar1') ?>

    <?php // echo $form->field($model, 'mat_xvarchar2') ?>

    <?php // echo $form->field($model, 'mat_xvarchar3') ?>

    <?php // echo $form->field($model, 'mat_xinterger1') ?>

    <?php // echo $form->field($model, 'mat_xinterger2') ?>

    <?php // echo $form->field($model, 'mat_xinterger3') ?>

    <?php // echo $form->field($model, 'vendor_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
