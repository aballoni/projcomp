<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialContSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-cont-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'material_cont_id') ?>

    <?= $form->field($model, 'material_id') ?>

    <?= $form->field($model, 'cont_line') ?>

    <?= $form->field($model, 'cont_blueline') ?>

    <?= $form->field($model, 'cont_list') ?>

    <?php // echo $form->field($model, 'cont_or_qty') ?>

    <?php // echo $form->field($model, 'cont_or_aq_value') ?>

    <?php // echo $form->field($model, 'cont_or_book_value') ?>

    <?php // echo $form->field($model, 'cont_phy_qty') ?>

    <?php // echo $form->field($model, 'cont_tag') ?>

    <?php // echo $form->field($model, 'cont_inv_qty') ?>

    <?php // echo $form->field($model, 'cont_inv_value') ?>

    <?php // echo $form->field($model, 'cont_nf') ?>

    <?php // echo $form->field($model, 'cont_unit_price') ?>

    <?php // echo $form->field($model, 'cont_icms') ?>

    <?php // echo $form->field($model, 'cont_supl_icms') ?>

    <?php // echo $form->field($model, 'cont_supl_icms_nf') ?>

    <?php // echo $form->field($model, 'cont_value_inaccount') ?>

    <?php // echo $form->field($model, 'cont_xdate1') ?>

    <?php // echo $form->field($model, 'cont_xdate2') ?>

    <?php // echo $form->field($model, 'cont_xdate3') ?>

    <?php // echo $form->field($model, 'cont_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'cont_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'cont_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'cont_xvarchar1') ?>

    <?php // echo $form->field($model, 'cont_xvarchar2') ?>

    <?php // echo $form->field($model, 'cont_xvarchar3') ?>

    <?php // echo $form->field($model, 'cont_xinterger1') ?>

    <?php // echo $form->field($model, 'cont_xinterger2') ?>

    <?php // echo $form->field($model, 'cont_xinterger3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
