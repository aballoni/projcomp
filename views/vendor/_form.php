<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vendor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vendor_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_xdate1')->textInput() ?>

    <?= $form->field($model, 'vendor_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'vendor_xinterger1')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
