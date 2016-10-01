<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MissueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="missue-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'missue_id') ?>

    <?= $form->field($model, 'missue_remarks') ?>

    <?= $form->field($model, 'missue_date') ?>

    <?= $form->field($model, 'missue_xdate1') ?>

    <?= $form->field($model, 'missue_xdate2') ?>

    <?php // echo $form->field($model, 'missue_xdate3') ?>

    <?php // echo $form->field($model, 'missue_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'missue_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'missue_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'missue_xboolean4')->checkbox() ?>

    <?php // echo $form->field($model, 'missue_xboolean5')->checkbox() ?>

    <?php // echo $form->field($model, 'missue_xvarchar1') ?>

    <?php // echo $form->field($model, 'missue_xvarchar2') ?>

    <?php // echo $form->field($model, 'missue_xvarchar3') ?>

    <?php // echo $form->field($model, 'missue_xinterger1') ?>

    <?php // echo $form->field($model, 'missue_xinterger2') ?>

    <?php // echo $form->field($model, 'missue_xinterger3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
