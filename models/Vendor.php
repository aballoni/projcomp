<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendor".
 *
 * @property integer $vendor_id
 * @property string $vendor_description
 * @property string $vendor_remarks
 * @property string $vendor_xvarchar1
 * @property string $vendor_xdate1
 * @property boolean $vendor_xboolean1
 * @property integer $vendor_xinterger1
 *
 * @property Material[] $materials
 */
class Vendor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vendor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_description'], 'required'],
            [['vendor_xdate1'], 'safe'],
            [['vendor_xboolean1'], 'boolean'],
            [['vendor_xinterger1'], 'integer'],
            [['vendor_description'], 'string', 'max' => 40],
            [['vendor_remarks'], 'string', 'max' => 20],
            [['vendor_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vendor_id' => 'Vendor ID',
            'vendor_description' => 'Vendor Description',
            'vendor_remarks' => 'Vendor Remarks',
            'vendor_xvarchar1' => 'Vendor Xvarchar1',
            'vendor_xdate1' => 'Vendor Xdate1',
            'vendor_xboolean1' => 'Vendor Xboolean1',
            'vendor_xinterger1' => 'Vendor Xinterger1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['vendor_id' => 'vendor_id']);
    }
}
