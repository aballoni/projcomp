<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MissueLineSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="missue-line-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'missue_line_id') ?>

    <?= $form->field($model, 'missue_id') ?>

    <?= $form->field($model, 'material_id') ?>

    <?= $form->field($model, 'missue_quantity') ?>

    <?= $form->field($model, 'missue_mat_manual_desc') ?>

    <?php // echo $form->field($model, 'missue_invoice') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'missue_xdate1') ?>

    <?php // echo $form->field($model, 'missue_xdate2') ?>

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

    <?php // echo $form->field($model, 'userx_id') ?>

    <?php // echo $form->field($model, 'client_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
