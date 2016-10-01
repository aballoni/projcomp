<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vmatstock */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vmatstock-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model) ?>

    <?= $form->field($model, 'material_id')->textInput() ?>

    <?= $form->field($model, 'mat_description_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_mpn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_inventory_ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uom_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_list_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equip_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owner_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stock_quantity1')->textInput() ?>

    <?= $form->field($model, 'stock_value1')->textInput() ?>

    <?= $form->field($model, 'stock_value2')->textInput() ?>

    <?= $form->field($model, 'location_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
