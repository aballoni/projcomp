<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TorderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="torder-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'to_id') ?>

    <?= $form->field($model, 'to_cm_identification') ?>

    <?= $form->field($model, 'to_from') ?>

    <?= $form->field($model, 'to_to') ?>

    <?= $form->field($model, 'to_expeditor') ?>

    <?php // echo $form->field($model, 'to_expeditor_phone') ?>

    <?php // echo $form->field($model, 'to_receiver') ?>

    <?php // echo $form->field($model, 'to_receiver_phone') ?>

    <?php // echo $form->field($model, 'to_date_expedite') ?>

    <?php // echo $form->field($model, 'to_date_eta') ?>

    <?php // echo $form->field($model, 'to_modal') ?>

    <?php // echo $form->field($model, 'to_vessel_name') ?>

    <?php // echo $form->field($model, 'to_tug_name') ?>

    <?php // echo $form->field($model, 'to_truck_plate') ?>

    <?php // echo $form->field($model, 'to_transporter') ?>

    <?php // echo $form->field($model, 'to_remarks') ?>

    <?php // echo $form->field($model, 'to_xdate1') ?>

    <?php // echo $form->field($model, 'to_xdate2') ?>

    <?php // echo $form->field($model, 'to_xdate3') ?>

    <?php // echo $form->field($model, 'to_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'to_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'to_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'to_xboolean4')->checkbox() ?>

    <?php // echo $form->field($model, 'to_xboolean5')->checkbox() ?>

    <?php // echo $form->field($model, 'to_xvarchar1') ?>

    <?php // echo $form->field($model, 'to_xvarchar2') ?>

    <?php // echo $form->field($model, 'to_xvarchar3') ?>

    <?php // echo $form->field($model, 'to_xinterger1') ?>

    <?php // echo $form->field($model, 'xinterger2') ?>

    <?php // echo $form->field($model, 'xinterger3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
