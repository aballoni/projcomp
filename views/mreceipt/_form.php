<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mreceipt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mreceipt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mreceipt_identification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mreceipt_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mreceipt_date')->textInput() ?>

    <?= $form->field($model, 'mreceipt_xdate1')->textInput() ?>

    <?= $form->field($model, 'mreceipt_xdate2')->textInput() ?>

    <?= $form->field($model, 'mreceipt_xdate3')->textInput() ?>

    <?= $form->field($model, 'mreceipt_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'mreceipt_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'mreceipt_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'mreceipt_xboolean4')->checkbox() ?>

    <?= $form->field($model, 'mreceipt_xboolean5')->checkbox() ?>

    <?= $form->field($model, 'mreceipt_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mreceipt_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mreceipt_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mreceipt_xinterger1')->textInput() ?>

    <?= $form->field($model, 'mreceipt_xinterger2')->textInput() ?>

    <?= $form->field($model, 'mreceipt_xinterger3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
