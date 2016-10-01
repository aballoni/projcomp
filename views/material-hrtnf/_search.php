<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialHrtnfSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-hrtnf-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'material_hrtnf_id') ?>

    <?= $form->field($model, 'material_id') ?>

    <?= $form->field($model, 'hrtnf_line') ?>

    <?= $form->field($model, 'hrtnf_cnf') ?>

    <?= $form->field($model, 'hrtnf_nat_op') ?>

    <?php // echo $form->field($model, 'hrtnf_nf') ?>

    <?php // echo $form->field($model, 'hrtnf_cod_prod') ?>

    <?php // echo $form->field($model, 'hrtnf_ncm') ?>

    <?php // echo $form->field($model, 'hrtnf_u_com') ?>

    <?php // echo $form->field($model, 'hrtnf_q_com') ?>

    <?php // echo $form->field($model, 'hrtnf_v_un_com') ?>

    <?php // echo $form->field($model, 'hrtnf_tot_nf') ?>

    <?php // echo $form->field($model, 'hrtnf_u_trib') ?>

    <?php // echo $form->field($model, 'hrtnf_base_cal') ?>

    <?php // echo $form->field($model, 'hrtnf_rate') ?>

    <?php // echo $form->field($model, 'hrtnf_icms') ?>

    <?php // echo $form->field($model, 'hrtnf_n_item') ?>

    <?php // echo $form->field($model, 'hrtnf_xprod') ?>

    <?php // echo $form->field($model, 'hrtnf_xdate1') ?>

    <?php // echo $form->field($model, 'hrtnf_xdate2') ?>

    <?php // echo $form->field($model, 'hrtnf_xdate3') ?>

    <?php // echo $form->field($model, 'hrtnf_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'hrtnf_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'hrtnf_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'hrtnf_xvarchar1') ?>

    <?php // echo $form->field($model, 'hrtnf_xvarchar2') ?>

    <?php // echo $form->field($model, 'hrtnf_xvarchar3') ?>

    <?php // echo $form->field($model, 'hrtnf_xinterger1') ?>

    <?php // echo $form->field($model, 'hrtnf_xinterger2') ?>

    <?php // echo $form->field($model, 'hrtnf_xinterger3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
