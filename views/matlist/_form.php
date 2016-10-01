<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Matlist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matlist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mat_list_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mat_list_xinterger1')->textInput() ?>

    <?= $form->field($model, 'mat_list_xdate1')->textInput() ?>

    <?= $form->field($model, 'mat_list_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'mat_list_xvarchar1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
