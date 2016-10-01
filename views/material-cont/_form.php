<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialCont */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-cont-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'material_id')->textInput() ?>

    <?= $form->field($model, 'cont_line')->textInput() ?>

    <?= $form->field($model, 'cont_blueline')->textInput() ?>

    <?= $form->field($model, 'cont_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cont_or_qty')->textInput() ?>

    <?= $form->field($model, 'cont_or_aq_value')->textInput() ?>

    <?= $form->field($model, 'cont_or_book_value')->textInput() ?>

    <?= $form->field($model, 'cont_phy_qty')->textInput() ?>

    <?= $form->field($model, 'cont_tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cont_inv_qty')->textInput() ?>

    <?= $form->field($model, 'cont_inv_value')->textInput() ?>

    <?= $form->field($model, 'cont_nf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cont_unit_price')->textInput() ?>

    <?= $form->field($model, 'cont_icms')->textInput() ?>

    <?= $form->field($model, 'cont_supl_icms')->textInput() ?>

    <?= $form->field($model, 'cont_supl_icms_nf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cont_value_inaccount')->textInput() ?>

    <?= $form->field($model, 'cont_xdate1')->textInput() ?>

    <?= $form->field($model, 'cont_xdate2')->textInput() ?>

    <?= $form->field($model, 'cont_xdate3')->textInput() ?>

    <?= $form->field($model, 'cont_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'cont_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'cont_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'cont_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cont_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cont_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cont_xinterger1')->textInput() ?>

    <?= $form->field($model, 'cont_xinterger2')->textInput() ?>

    <?= $form->field($model, 'cont_xinterger3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
