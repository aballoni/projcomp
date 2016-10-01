<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MatlistSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matlist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mat_list_id') ?>

    <?= $form->field($model, 'mat_list_description') ?>

    <?= $form->field($model, 'mat_list_xinterger1') ?>

    <?= $form->field($model, 'mat_list_xdate1') ?>

    <?= $form->field($model, 'mat_list_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'mat_list_xvarchar1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
