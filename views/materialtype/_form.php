<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Materialtype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materialtype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model) ?>

    <?= $form->field($model, 'type_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_xinterger1')->textInput() ?>

    <?= $form->field($model, 'type_xdate1')->textInput() ?>

    <?= $form->field($model, 'type_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'type_xvarchar1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
