<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userx */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userx-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userx_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userx_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userx_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_id')->textInput() ?>

    <?= $form->field($model, 'userx_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'userx_xdate1')->textInput() ?>

    <?= $form->field($model, 'userx_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'userx_xinterger1')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
