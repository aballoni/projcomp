<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mr_identification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mr_tabdate')->textInput() ?>

    <?= $form->field($model, 'mr_date_needed')->textInput() ?>

    <?= $form->field($model, 'mr_manager')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mr_material_service')->checkbox() ?>

    <?= $form->field($model, 'mr_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mr_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mr_indicacao_fornecedores')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mr_xdate1')->textInput() ?>

    <?= $form->field($model, 'mr_xdate2')->textInput() ?>

    <?= $form->field($model, 'mr_xdate3')->textInput() ?>

    <?= $form->field($model, 'mr_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'mr_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'mr_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'mr_xboolean4')->checkbox() ?>

    <?= $form->field($model, 'mr_xboolean5')->checkbox() ?>

    <?= $form->field($model, 'mr_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mr_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mr_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mr_xinterger1')->textInput() ?>

    <?= $form->field($model, 'mr_xinterger2')->textInput() ?>

    <?= $form->field($model, 'mr_xinterger3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
