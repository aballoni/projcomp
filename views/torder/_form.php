<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Torder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="torder-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'to_cm_identification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_to')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_expeditor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_expeditor_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_receiver')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_receiver_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_date_expedite')->textInput() ?>

    <?= $form->field($model, 'to_date_eta')->textInput() ?>

    <?= $form->field($model, 'to_modal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_vessel_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_tug_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_truck_plate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_transporter')->textInput() ?>

    <?= $form->field($model, 'to_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_xdate1')->textInput() ?>

    <?= $form->field($model, 'to_xdate2')->textInput() ?>

    <?= $form->field($model, 'to_xdate3')->textInput() ?>

    <?= $form->field($model, 'to_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'to_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'to_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'to_xboolean4')->checkbox() ?>

    <?= $form->field($model, 'to_xboolean5')->checkbox() ?>

    <?= $form->field($model, 'to_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_xinterger1')->textInput() ?>

    <?= $form->field($model, 'xinterger2')->textInput() ?>

    <?= $form->field($model, 'xinterger3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
