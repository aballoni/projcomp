<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Po */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="po-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'po_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'po_date')->textInput() ?>

    <?= $form->field($model, 'po_xdate1')->textInput() ?>

    <?= $form->field($model, 'po_xdate2')->textInput() ?>

    <?= $form->field($model, 'po_xdate3')->textInput() ?>

    <?= $form->field($model, 'po_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'po_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'po_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'po_xboolean4')->checkbox() ?>

    <?= $form->field($model, 'po_xboolean5')->checkbox() ?>

    <?= $form->field($model, 'po_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'po_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'po_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'po_xinterger1')->textInput() ?>

    <?= $form->field($model, 'po_xinterger2')->textInput() ?>

    <?= $form->field($model, 'po_xinterger3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
