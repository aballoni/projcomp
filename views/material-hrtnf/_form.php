<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialHrtnf */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-hrtnf-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'material_id')->textInput() ?>

    <?= $form->field($model, 'hrtnf_line')->textInput() ?>

    <?= $form->field($model, 'hrtnf_cnf')->textInput() ?>

    <?= $form->field($model, 'hrtnf_nat_op')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrtnf_nf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrtnf_cod_prod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrtnf_ncm')->textInput() ?>

    <?= $form->field($model, 'hrtnf_u_com')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrtnf_q_com')->textInput() ?>

    <?= $form->field($model, 'hrtnf_v_un_com')->textInput() ?>

    <?= $form->field($model, 'hrtnf_tot_nf')->textInput() ?>

    <?= $form->field($model, 'hrtnf_u_trib')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrtnf_base_cal')->textInput() ?>

    <?= $form->field($model, 'hrtnf_rate')->textInput() ?>

    <?= $form->field($model, 'hrtnf_icms')->textInput() ?>

    <?= $form->field($model, 'hrtnf_n_item')->textInput() ?>

    <?= $form->field($model, 'hrtnf_xprod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrtnf_xdate1')->textInput() ?>

    <?= $form->field($model, 'hrtnf_xdate2')->textInput() ?>

    <?= $form->field($model, 'hrtnf_xdate3')->textInput() ?>

    <?= $form->field($model, 'hrtnf_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'hrtnf_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'hrtnf_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'hrtnf_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrtnf_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrtnf_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrtnf_xinterger1')->textInput() ?>

    <?= $form->field($model, 'hrtnf_xinterger2')->textInput() ?>

    <?= $form->field($model, 'hrtnf_xinterger3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
