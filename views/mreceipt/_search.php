<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MreceiptSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mreceipt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mreceipt_id') ?>

    <?= $form->field($model, 'mreceipt_identification') ?>

    <?= $form->field($model, 'mreceipt_remarks') ?>

    <?= $form->field($model, 'mreceipt_date') ?>

    <?= $form->field($model, 'mreceipt_xdate1') ?>

    <?php // echo $form->field($model, 'mreceipt_xdate2') ?>

    <?php // echo $form->field($model, 'mreceipt_xdate3') ?>

    <?php // echo $form->field($model, 'mreceipt_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'mreceipt_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'mreceipt_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'mreceipt_xboolean4')->checkbox() ?>

    <?php // echo $form->field($model, 'mreceipt_xboolean5')->checkbox() ?>

    <?php // echo $form->field($model, 'mreceipt_xvarchar1') ?>

    <?php // echo $form->field($model, 'mreceipt_xvarchar2') ?>

    <?php // echo $form->field($model, 'mreceipt_xvarchar3') ?>

    <?php // echo $form->field($model, 'mreceipt_xinterger1') ?>

    <?php // echo $form->field($model, 'mreceipt_xinterger2') ?>

    <?php // echo $form->field($model, 'mreceipt_xinterger3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
