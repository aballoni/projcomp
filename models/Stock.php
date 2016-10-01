<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property integer $stock_id
 * @property string $stock_description
 * @property string $stock_date
 * @property integer $stock_quantity1
 * @property integer $stock_quantity2
 * @property string $stock_value1
 * @property string $stock_value2
 * @property integer $userx_id
 * @property boolean $stock_xboolean1
 * @property integer $stock_interger1
 * @property string $stock_xvarchar1
 * @property integer $location_id
 * @property integer $material_id
 *
 * @property Location $location
 * @property Material $material
 * @property Userx $userx
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stock_date'], 'safe'],
            [['stock_quantity1', 'stock_quantity2', 'userx_id', 'stock_interger1', 'location_id', 'material_id'], 'integer'],
            [['stock_value1', 'stock_value2'], 'number'],
            [['userx_id', 'location_id', 'material_id'], 'required'],
            [['stock_xboolean1'], 'boolean'],
            [['stock_description'], 'string', 'max' => 10],
            [['stock_xvarchar1'], 'string', 'max' => 30],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'location_id']],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Material::className(), 'targetAttribute' => ['material_id' => 'material_id']],
            [['userx_id'], 'exist', 'skipOnError' => true, 'targetClass' => Userx::className(), 'targetAttribute' => ['userx_id' => 'userx_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stock_id' => 'Stock ID',
            'stock_description' => 'Stock Description',
            'stock_date' => 'Stock Date',
            'stock_quantity1' => 'Stock Quantity1',
            'stock_quantity2' => 'Stock Quantity2',
            'stock_value1' => 'Stock Value1',
            'stock_value2' => 'Stock Value2',
            'userx_id' => 'Userx ID',
            'stock_xboolean1' => 'Stock Xboolean1',
            'stock_interger1' => 'Stock Interger1',
            'stock_xvarchar1' => 'Stock Xvarchar1',
            'location_id' => 'Location ID',
            'material_id' => 'Material ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['location_id' => 'location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasOne(Material::className(), ['material_id' => 'material_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserx()
    {
        return $this->hasOne(Userx::className(), ['userx_id' => 'userx_id']);
    }
}
