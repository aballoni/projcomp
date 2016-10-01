<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserxSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userx-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'userx_id') ?>

    <?= $form->field($model, 'userx_description') ?>

    <?= $form->field($model, 'userx_password') ?>

    <?= $form->field($model, 'userx_remarks') ?>

    <?= $form->field($model, 'dep_id') ?>

    <?php // echo $form->field($model, 'userx_xvarchar1') ?>

    <?php // echo $form->field($model, 'userx_xdate1') ?>

    <?php // echo $form->field($model, 'userx_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'userx_xinterger1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
