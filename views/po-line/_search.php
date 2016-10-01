<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PoLineSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="po-line-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'po_line_id') ?>

    <?= $form->field($model, 'po_id') ?>

    <?= $form->field($model, 'mr_line_id') ?>

    <?= $form->field($model, 'mr_id') ?>

    <?= $form->field($model, 'userx_id') ?>

    <?php // echo $form->field($model, 'po_line_quantity') ?>

    <?php // echo $form->field($model, 'po_line_date') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'po_line_xdate1') ?>

    <?php // echo $form->field($model, 'po_line_xdate2') ?>

    <?php // echo $form->field($model, 'po_line_xdate3') ?>

    <?php // echo $form->field($model, 'po_line_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'po_line_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'po_line_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'po_line_xboolean4')->checkbox() ?>

    <?php // echo $form->field($model, 'po_line_xboolean5')->checkbox() ?>

    <?php // echo $form->field($model, 'po_line_xvarchar1') ?>

    <?php // echo $form->field($model, 'po_line_xvarchar2') ?>

    <?php // echo $form->field($model, 'po_line_xvarchar3') ?>

    <?php // echo $form->field($model, 'po_line_xinterger1') ?>

    <?php // echo $form->field($model, 'po_line_xinterger2') ?>

    <?php // echo $form->field($model, 'po_line_xinterger3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
