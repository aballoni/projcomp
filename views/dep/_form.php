<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dep */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dep-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dep_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_xdate1')->textInput() ?>

    <?= $form->field($model, 'dep_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'dep_xinterger1')->textInput() ?>

    <?= $form->field($model, 'dep_xvarchar1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
