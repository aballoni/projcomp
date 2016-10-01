<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vmatstock".
 *
 * @property integer $material_id
 * @property string $mat_description_en
 * @property string $mat_manufacturer
 * @property string $mat_mpn
 * @property string $mat_sn
 * @property string $mat_inventory_ref
 * @property string $uom_code
 * @property string $mat_list_description
 * @property string $type_description
 * @property string $equip_description
 * @property string $owner_description
 * @property string $vendor_description
 * @property integer $stock_quantity1
 * @property string $stock_value1
 * @property string $stock_value2
 * @property string $location_description
 */
class Vmatstock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vmatstock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_id', 'stock_quantity1'], 'integer'],
            [['stock_value1', 'stock_value2'], 'number'],
            [['mat_description_en', 'mat_list_description'], 'string', 'max' => 100],
            [['mat_manufacturer', 'mat_mpn', 'mat_sn', 'type_description', 'owner_description'], 'string', 'max' => 20],
            [['mat_inventory_ref'], 'string', 'max' => 120],
            [['uom_code'], 'string', 'max' => 3],
            [['equip_description'], 'string', 'max' => 50],
            [['vendor_description'], 'string', 'max' => 40],
            [['location_description'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'material_id' => 'Material ID',
            'mat_description_en' => 'Mat Description En',
            'mat_manufacturer' => 'Mat Manufacturer',
            'mat_mpn' => 'Mat Mpn',
            'mat_sn' => 'Mat Sn',
            'mat_inventory_ref' => 'Mat Inventory Ref',
            'uom_code' => 'Uom Code',
            'mat_list_description' => 'Mat List Description',
            'type_description' => 'Type Description',
            'equip_description' => 'Equip Description',
            'owner_description' => 'Owner Description',
            'vendor_description' => 'Vendor Description',
            'stock_quantity1' => 'Stock Quantity1',
            'stock_value1' => 'Stock Value1',
            'stock_value2' => 'Stock Value2',
            'location_description' => 'Location Description',
        ];
    }

        public static function primaryKey()
    {
        return ['material_id'];
    }
}
