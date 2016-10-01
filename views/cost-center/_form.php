<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CostCenter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cost-center-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cost_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost_xdate1')->textInput() ?>

    <?= $form->field($model, 'cost_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'cost_xinterger1')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
