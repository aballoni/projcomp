<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="po-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'po_id') ?>

    <?= $form->field($model, 'po_code') ?>

    <?= $form->field($model, 'po_date') ?>

    <?= $form->field($model, 'po_xdate1') ?>

    <?= $form->field($model, 'po_xdate2') ?>

    <?php // echo $form->field($model, 'po_xdate3') ?>

    <?php // echo $form->field($model, 'po_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'po_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'po_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'po_xboolean4')->checkbox() ?>

    <?php // echo $form->field($model, 'po_xboolean5')->checkbox() ?>

    <?php // echo $form->field($model, 'po_xvarchar1') ?>

    <?php // echo $form->field($model, 'po_xvarchar2') ?>

    <?php // echo $form->field($model, 'po_xvarchar3') ?>

    <?php // echo $form->field($model, 'po_xinterger1') ?>

    <?php // echo $form->field($model, 'po_xinterger2') ?>

    <?php // echo $form->field($model, 'po_xinterger3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
