<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PoLine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="po-line-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'po_line_id')->textInput() ?>

    <?= $form->field($model, 'po_id')->textInput() ?>

    <?= $form->field($model, 'mr_line_id')->textInput() ?>

    <?= $form->field($model, 'mr_id')->textInput() ?>

    <?= $form->field($model, 'userx_id')->textInput() ?>

    <?= $form->field($model, 'po_line_quantity')->textInput() ?>

    <?= $form->field($model, 'po_line_date')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'po_line_xdate1')->textInput() ?>

    <?= $form->field($model, 'po_line_xdate2')->textInput() ?>

    <?= $form->field($model, 'po_line_xdate3')->textInput() ?>

    <?= $form->field($model, 'po_line_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'po_line_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'po_line_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'po_line_xboolean4')->checkbox() ?>

    <?= $form->field($model, 'po_line_xboolean5')->checkbox() ?>

    <?= $form->field($model, 'po_line_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'po_line_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'po_line_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'po_line_xinterger1')->textInput() ?>

    <?= $form->field($model, 'po_line_xinterger2')->textInput() ?>

    <?= $form->field($model, 'po_line_xinterger3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
