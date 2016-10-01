<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'client_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_id')->textInput() ?>

    <?= $form->field($model, 'client_xinterger1')->textInput() ?>

    <?= $form->field($model, 'client_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'client_xdate1')->textInput() ?>

    <?= $form->field($model, 'client_xvarchar1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
