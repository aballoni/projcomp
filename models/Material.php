<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property integer $material_id
 * @property integer $mat_identification
 * @property string $mat_description_pt
 * @property string $mat_description_en
 * @property integer $uom_id
 * @property integer $mat_list_id
 * @property string $mat_vpn
 * @property string $mat_manufacturer
 * @property string $mat_mpn
 * @property string $mat_sn
 * @property integer $materialtype_id
 * @property string $mat_bin
 * @property string $mat_inventory_ref
 * @property integer $equip_id
 * @property string $mat_dimenssion
 * @property string $mat_unit_price
 * @property integer $mat_weight
 * @property integer $owner_id
 * @property string $mat_picture
 * @property string $mat_xdate1
 * @property string $mat_xdate2
 * @property string $mat_xdate3
 * @property boolean $mat_xboolean1
 * @property boolean $mat_xboolean2
 * @property boolean $mat_xboolean3
 * @property boolean $mat_xboolean4
 * @property boolean $mat_xboolean5
 * @property string $mat_xvarchar1
 * @property string $mat_xvarchar2
 * @property string $mat_xvarchar3
 * @property integer $mat_xinterger1
 * @property integer $mat_xinterger2
 * @property integer $mat_xinterger3
 * @property integer $vendor_id
 *
 * @property Equip $equip
 * @property MatList $matList
 * @property Materialtype $materialtype
 * @property Owner $owner
 * @property Uom $uom
 * @property Uom $uom0
 * @property Vendor $vendor
 * @property MaterialCont[] $materialConts
 * @property MaterialHrtnf[] $materialHrtnfs
 * @property MrLine[] $mrLines
 * @property Stock[] $stocks
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'material';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mat_identification', 'uom_id', 'mat_list_id', 'materialtype_id', 'equip_id', 'mat_weight', 'owner_id', 'mat_xinterger1', 'mat_xinterger2', 'mat_xinterger3', 'vendor_id'], 'integer'],
            [['uom_id', 'mat_list_id', 'materialtype_id', 'equip_id', 'owner_id', 'vendor_id'], 'required'],
            [['mat_unit_price'], 'number'],
            [['mat_xdate1', 'mat_xdate2', 'mat_xdate3'], 'safe'],
            [['mat_xboolean1', 'mat_xboolean2', 'mat_xboolean3', 'mat_xboolean4', 'mat_xboolean5'], 'boolean'],
            [['mat_description_pt', 'mat_description_en'], 'string', 'max' => 100],
            [['mat_vpn', 'mat_manufacturer', 'mat_mpn', 'mat_sn', 'mat_dimenssion'], 'string', 'max' => 20],
            [['mat_bin'], 'string', 'max' => 10],
            [['mat_inventory_ref'], 'string', 'max' => 120],
            [['mat_picture', 'mat_xvarchar1', 'mat_xvarchar2', 'mat_xvarchar3'], 'string', 'max' => 30],
            [['equip_id'], 'exist', 'skipOnError' => true, 'targetClass' => Equip::className(), 'targetAttribute' => ['equip_id' => 'equip_id']],
            [['mat_list_id'], 'exist', 'skipOnError' => true, 'targetClass' => MatList::className(), 'targetAttribute' => ['mat_list_id' => 'mat_list_id']],
            [['materialtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => Materialtype::className(), 'targetAttribute' => ['materialtype_id' => 'materialtype_id']],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => Owner::className(), 'targetAttribute' => ['owner_id' => 'owner_id']],
            [['uom_id'], 'exist', 'skipOnError' => true, 'targetClass' => Uom::className(), 'targetAttribute' => ['uom_id' => 'uom_id']],
            [['uom_id'], 'exist', 'skipOnError' => true, 'targetClass' => Uom::className(), 'targetAttribute' => ['uom_id' => 'uom_id']],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'material_id' => 'Mat ID',
            'mat_identification' => 'Mat Identification',
            'mat_description_pt' => 'Mat Description Pt',
            'mat_description_en' => 'Description',
            'uom_id' => 'Uom',
            'mat_list_id' => 'Mat List ID',
            'mat_vpn' => 'VPN',
            'mat_manufacturer' => 'Manufacturer',
            'mat_mpn' => 'Mat Mpn',
            'mat_sn' => 'Mat Sn',
            'materialtype_id' => 'Materialtype ID',
            'mat_bin' => 'Mat Bin',
            'mat_inventory_ref' => 'Mat Inventory Ref',
            'equip_id' => 'Equip ID',
            'mat_dimenssion' => 'Mat Dimenssion',
            'mat_unit_price' => 'Mat Unit Price',
            'mat_weight' => 'Mat Weight',
            'owner_id' => 'Owner ID',
            'mat_picture' => 'Mat Picture',
            'mat_xdate1' => 'Mat Xdate1',
            'mat_xdate2' => 'Mat Xdate2',
            'mat_xdate3' => 'Mat Xdate3',
            'mat_xboolean1' => 'Mat Xboolean1',
            'mat_xboolean2' => 'Mat Xboolean2',
            'mat_xboolean3' => 'Mat Xboolean3',
            'mat_xboolean4' => 'Mat Xboolean4',
            'mat_xboolean5' => 'Mat Xboolean5',
            'mat_xvarchar1' => 'Mat Xvarchar1',
            'mat_xvarchar2' => 'Mat Xvarchar2',
            'mat_xvarchar3' => 'Mat Xvarchar3',
            'mat_xinterger1' => 'Mat Xinterger1',
            'mat_xinterger2' => 'Mat Xinterger2',
            'mat_xinterger3' => 'Mat Xinterger3',
            'vendor_id' => 'Vendor ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquip()
    {
        return $this->hasOne(Equip::className(), ['equip_id' => 'equip_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatList()
    {
        return $this->hasOne(MatList::className(), ['mat_list_id' => 'mat_list_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterialtype()
    {
        return $this->hasOne(Materialtype::className(), ['materialtype_id' => 'materialtype_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(Owner::className(), ['owner_id' => 'owner_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUom()
    {
        return $this->hasOne(Uom::className(), ['uom_id' => 'uom_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUom0()
    {
        return $this->hasOne(Uom::className(), ['uom_id' => 'uom_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterialConts()
    {
        return $this->hasMany(MaterialCont::className(), ['material_id' => 'material_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterialHrtnfs()
    {
        return $this->hasMany(MaterialHrtnf::className(), ['material_id' => 'material_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMrLines()
    {
        return $this->hasMany(MrLine::className(), ['material_id' => 'material_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStocks()
    {
        return $this->hasMany(Stock::className(), ['material_id' => 'material_id']);
    }
}
