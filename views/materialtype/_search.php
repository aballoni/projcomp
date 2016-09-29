<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialtypeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materialtype-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'materialtype_id') ?>

    <?= $form->field($model, 'type_description') ?>

    <?= $form->field($model, 'type_xinterger1') ?>

    <?= $form->field($model, 'type_xdate1') ?>

    <?= $form->field($model, 'type_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'type_xvarchar1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
