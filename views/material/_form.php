<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Uom;
use app\models\Materialtype;
use app\models\Equip;
use app\models\Owner;
use app\models\Vendor;
use app\models\MatList;


/* @var $this yii\web\View */
/* @var $model app\models\Material */
/* @var $form yii\widgets\ActiveForm */

$uomrow = Uom::find()->all();
$uomdata = ArrayHelper::map($uomrow, 'uom_id', 'uom_code');
$materialtyperow = Materialtype::find()->all();
$materialtypedata = ArrayHelper::map($materialtyperow, 'materialtype_id', 'type_description');
$equiprow = Equip::find()->all();
$equipdata = ArrayHelper::map($equiprow, 'equip_id', 'equip_description');
$ownerrow = Owner::find()->all();
$ownerdata = ArrayHelper::map($ownerrow, 'owner_id', 'owner_description');
$vendorrow = Vendor::find()->all();
$vendordata = ArrayHelper::map($vendorrow, 'vendor_id', 'vendor_description');
$mat_listrow = MatList::find()->all();
$mat_listdata = ArrayHelper::map($mat_listrow, 'mat_list_id', 'mat_list_description');
$textwidth1 = 'width:600px';
$textwidth2 = 'width:300px';



?>

<div class="material-form">



            <?php $form = ActiveForm::begin(); ?>

            <!--     <?= $form->field($model, 'mat_identification')->textInput(['style'=>$textwidth1])->label("mat_identification ") ?>
             -->
            <!--     <?= $form->field($model, 'mat_description_pt')->textInput(['style'=>$textwidth1])->label("mat_description_pt") ?>
             -->





            <?= $form->field($model, 'mat_description_en')->textInput(['style'=>$textwidth1])->label("mat_description_en") ?>

            <?= $form->field($model, 'uom_id')->dropDownList($uomdata, ['style'=>$textwidth2])->label("uom_id") ?>

            <?= $form->field($model, 'mat_list_id')->dropDownList($mat_listdata, ['style'=>$textwidth2])->label("mat_list_id") ?>

            <?= $form->field($model, 'mat_vpn')->textInput(['style'=>$textwidth2])->label("mat_vpn") ?>

            <?= $form->field($model, 'mat_manufacturer')->textInput(['style'=>$textwidth2])->label("mat_manufacturer") ?>

            <?= $form->field($model, 'mat_mpn')->textInput(['style'=>$textwidth2])->label("mat_mpn") ?>

            <?= $form->field($model, 'mat_sn')->textInput(['style'=>$textwidth2])->label("mat_sn") ?>

            <?= $form->field($model, 'materialtype_id')->dropDownList($materialtypedata, ['style'=>$textwidth2])->label("materialtype_id") ?>

            <?= $form->field($model, 'mat_bin')->textInput(['style'=>$textwidth2])->label("mat_bin") ?>

            <?= $form->field($model, 'mat_inventory_ref')->textInput(['style'=>$textwidth2])->label("mat_inventory_ref") ?>

            <?= $form->field($model, 'equip_id')->dropDownList($equipdata, ['style'=>$textwidth2])->label("equip_id") ?>

            <?= $form->field($model, 'mat_dimenssion')->textInput(['style'=>$textwidth2])->label("mat_dimenssion") ?>

            <!--     <?= $form->field($model, 'mat_unit_price')->textInput() ?>
             -->
            <?= $form->field($model, 'mat_weight')->textInput(['style'=>$textwidth2])->label("mat_weight") ?>

            <?= $form->field($model, 'owner_id')->dropDownList($ownerdata, ['style'=>$textwidth2])->label("owner_id") ?>

            <?= $form->field($model, 'mat_picture')->textInput(['style'=>$textwidth2 ])->label("mat_picture") ?>

            <!--     <?= $form->field($model, 'mat_xdate1')->textInput() ?>

            <?= $form->field($model, 'mat_xdate2')->textInput() ?>

            <?= $form->field($model, 'mat_xdate3')->textInput() ?>

            <?= $form->field($model, 'mat_xboolean1')->checkbox() ?>

            <?= $form->field($model, 'mat_xboolean2')->checkbox() ?>

            <?= $form->field($model, 'mat_xboolean3')->checkbox() ?>

            <?= $form->field($model, 'mat_xboolean4')->checkbox() ?>

            <?= $form->field($model, 'mat_xboolean5')->checkbox() ?>

            <?= $form->field($model, 'mat_xvarchar1')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'mat_xvarchar2')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'mat_xvarchar3')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'mat_xinterger1')->textInput() ?>

            <?= $form->field($model, 'mat_xinterger2')->textInput() ?>

            <?= $form->field($model, 'mat_xinterger3')->textInput() ?>
            -->
            
            <?= $form->field($model, 'vendor_id')->dropDownList($vendordata, ['style'=>$textwidth2])->label("vendor_id") ?>


            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>



        

        







    <?php ActiveForm::end(); ?>

</div>
