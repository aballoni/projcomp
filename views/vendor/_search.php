<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VendorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'vendor_id') ?>

    <?= $form->field($model, 'vendor_description') ?>

    <?= $form->field($model, 'vendor_remarks') ?>

    <?= $form->field($model, 'vendor_xvarchar1') ?>

    <?= $form->field($model, 'vendor_xdate1') ?>

    <?php // echo $form->field($model, 'vendor_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'vendor_xinterger1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
