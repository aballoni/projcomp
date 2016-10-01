<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StockSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'stock_id') ?>

    <?= $form->field($model, 'stock_description') ?>

    <?= $form->field($model, 'stock_date') ?>

    <?= $form->field($model, 'stock_quantity1') ?>

    <?= $form->field($model, 'stock_quantity2') ?>

    <?php // echo $form->field($model, 'stock_value1') ?>

    <?php // echo $form->field($model, 'stock_value2') ?>

    <?php // echo $form->field($model, 'userx_id') ?>

    <?php // echo $form->field($model, 'stock_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'stock_interger1') ?>

    <?php // echo $form->field($model, 'stock_xvarchar1') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'material_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
