<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'client_id') ?>

    <?= $form->field($model, 'client_description') ?>

    <?= $form->field($model, 'client_remarks') ?>

    <?= $form->field($model, 'dep_id') ?>

    <?= $form->field($model, 'client_xinterger1') ?>

    <?php // echo $form->field($model, 'client_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'client_xdate1') ?>

    <?php // echo $form->field($model, 'client_xvarchar1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
