<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Missue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="missue-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'missue_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'missue_date')->textInput() ?>

    <?= $form->field($model, 'missue_xdate1')->textInput() ?>

    <?= $form->field($model, 'missue_xdate2')->textInput() ?>

    <?= $form->field($model, 'missue_xdate3')->textInput() ?>

    <?= $form->field($model, 'missue_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'missue_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'missue_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'missue_xboolean4')->checkbox() ?>

    <?= $form->field($model, 'missue_xboolean5')->checkbox() ?>

    <?= $form->field($model, 'missue_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'missue_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'missue_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'missue_xinterger1')->textInput() ?>

    <?= $form->field($model, 'missue_xinterger2')->textInput() ?>

    <?= $form->field($model, 'missue_xinterger3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
