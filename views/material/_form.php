<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Material */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mat_identification')->textInput() ?>

    <?= $form->field($model, 'mat_description_pt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_description_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uom_id')->textInput() ?>

    <?= $form->field($model, 'mat_list_id')->textInput() ?>

    <?= $form->field($model, 'mat_vpn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_mpn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'materialtype_id')->textInput() ?>

    <?= $form->field($model, 'mat_bin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_inventory_ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equip_id')->textInput() ?>

    <?= $form->field($model, 'mat_dimenssion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_unit_price')->textInput() ?>

    <?= $form->field($model, 'mat_weight')->textInput() ?>

    <?= $form->field($model, 'owner_id')->textInput() ?>

    <?= $form->field($model, 'mat_picture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_xdate1')->textInput() ?>

    <?= $form->field($model, 'mat_xdate2')->textInput() ?>

    <?= $form->field($model, 'mat_xdate3')->textInput() ?>

    <?= $form->field($model, 'mat_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'mat_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'mat_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'mat_xboolean4')->checkbox() ?>

    <?= $form->field($model, 'mat_xboolean5')->checkbox() ?>

    <?= $form->field($model, 'mat_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_xinterger1')->textInput() ?>

    <?= $form->field($model, 'mat_xinterger2')->textInput() ?>

    <?= $form->field($model, 'mat_xinterger3')->textInput() ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
