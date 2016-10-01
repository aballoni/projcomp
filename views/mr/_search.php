<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mr_id') ?>

    <?= $form->field($model, 'mr_identification') ?>

    <?= $form->field($model, 'mr_tabdate') ?>

    <?= $form->field($model, 'mr_date_needed') ?>

    <?= $form->field($model, 'mr_manager') ?>

    <?php // echo $form->field($model, 'mr_material_service')->checkbox() ?>

    <?php // echo $form->field($model, 'mr_reason') ?>

    <?php // echo $form->field($model, 'mr_remarks') ?>

    <?php // echo $form->field($model, 'mr_indicacao_fornecedores') ?>

    <?php // echo $form->field($model, 'mr_xdate1') ?>

    <?php // echo $form->field($model, 'mr_xdate2') ?>

    <?php // echo $form->field($model, 'mr_xdate3') ?>

    <?php // echo $form->field($model, 'mr_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'mr_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'mr_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'mr_xboolean4')->checkbox() ?>

    <?php // echo $form->field($model, 'mr_xboolean5')->checkbox() ?>

    <?php // echo $form->field($model, 'mr_xvarchar1') ?>

    <?php // echo $form->field($model, 'mr_xvarchar2') ?>

    <?php // echo $form->field($model, 'mr_xvarchar3') ?>

    <?php // echo $form->field($model, 'mr_xinterger1') ?>

    <?php // echo $form->field($model, 'mr_xinterger2') ?>

    <?php // echo $form->field($model, 'mr_xinterger3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
