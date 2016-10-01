<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material_cont".
 *
 * @property integer $material_cont_id
 * @property integer $material_id
 * @property integer $cont_line
 * @property integer $cont_blueline
 * @property string $cont_list
 * @property integer $cont_or_qty
 * @property string $cont_or_aq_value
 * @property string $cont_or_book_value
 * @property integer $cont_phy_qty
 * @property string $cont_tag
 * @property integer $cont_inv_qty
 * @property string $cont_inv_value
 * @property string $cont_nf
 * @property string $cont_unit_price
 * @property string $cont_icms
 * @property string $cont_supl_icms
 * @property string $cont_supl_icms_nf
 * @property string $cont_value_inaccount
 * @property string $cont_xdate1
 * @property string $cont_xdate2
 * @property string $cont_xdate3
 * @property boolean $cont_xboolean1
 * @property boolean $cont_xboolean2
 * @property boolean $cont_xboolean3
 * @property string $cont_xvarchar1
 * @property string $cont_xvarchar2
 * @property string $cont_xvarchar3
 * @property integer $cont_xinterger1
 * @property integer $cont_xinterger2
 * @property integer $cont_xinterger3
 *
 * @property Material $material
 */
class MaterialCont extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'material_cont';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_id'], 'required'],
            [['material_id', 'cont_line', 'cont_blueline', 'cont_or_qty', 'cont_phy_qty', 'cont_inv_qty', 'cont_xinterger1', 'cont_xinterger2', 'cont_xinterger3'], 'integer'],
            [['cont_or_aq_value', 'cont_or_book_value', 'cont_inv_value', 'cont_unit_price', 'cont_icms', 'cont_supl_icms', 'cont_value_inaccount'], 'number'],
            [['cont_xdate1', 'cont_xdate2', 'cont_xdate3'], 'safe'],
            [['cont_xboolean1', 'cont_xboolean2', 'cont_xboolean3'], 'boolean'],
            [['cont_list', 'cont_xvarchar1', 'cont_xvarchar2', 'cont_xvarchar3'], 'string', 'max' => 30],
            [['cont_tag'], 'string', 'max' => 150],
            [['cont_nf', 'cont_supl_icms_nf'], 'string', 'max' => 40],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Material::className(), 'targetAttribute' => ['material_id' => 'material_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'material_cont_id' => 'Material Cont ID',
            'material_id' => 'Material ID',
            'cont_line' => 'Cont Line',
            'cont_blueline' => 'Cont Blueline',
            'cont_list' => 'Cont List',
            'cont_or_qty' => 'Cont Or Qty',
            'cont_or_aq_value' => 'Cont Or Aq Value',
            'cont_or_book_value' => 'Cont Or Book Value',
            'cont_phy_qty' => 'Cont Phy Qty',
            'cont_tag' => 'Cont Tag',
            'cont_inv_qty' => 'Cont Inv Qty',
            'cont_inv_value' => 'Cont Inv Value',
            'cont_nf' => 'Cont Nf',
            'cont_unit_price' => 'Cont Unit Price',
            'cont_icms' => 'Cont Icms',
            'cont_supl_icms' => 'Cont Supl Icms',
            'cont_supl_icms_nf' => 'Cont Supl Icms Nf',
            'cont_value_inaccount' => 'Cont Value Inaccount',
            'cont_xdate1' => 'Cont Xdate1',
            'cont_xdate2' => 'Cont Xdate2',
            'cont_xdate3' => 'Cont Xdate3',
            'cont_xboolean1' => 'Cont Xboolean1',
            'cont_xboolean2' => 'Cont Xboolean2',
            'cont_xboolean3' => 'Cont Xboolean3',
            'cont_xvarchar1' => 'Cont Xvarchar1',
            'cont_xvarchar2' => 'Cont Xvarchar2',
            'cont_xvarchar3' => 'Cont Xvarchar3',
            'cont_xinterger1' => 'Cont Xinterger1',
            'cont_xinterger2' => 'Cont Xinterger2',
            'cont_xinterger3' => 'Cont Xinterger3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasOne(Material::className(), ['material_id' => 'material_id']);
    }
}
