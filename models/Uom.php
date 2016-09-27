<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uom".
 *
 * @property integer $uom_id
 * @property string $uom_code
 * @property string $uom_description
 * @property string $uom_xdate1
 * @property boolean $uom_xboolean1
 * @property integer $uom_interger1
 * @property string $uom_xvarchar1
 *
 * @property Material[] $materials
 * @property Material[] $materials0
 */
class Uom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'uom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uom_code', 'uom_description'], 'required'],
            [['uom_xdate1'], 'safe'],
            [['uom_xboolean1'], 'boolean'],
            [['uom_interger1'], 'integer'],
            [['uom_code'], 'string', 'max' => 3],
            [['uom_description'], 'string', 'max' => 20],
            [['uom_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uom_id' => 'Uom ID',
            'uom_code' => 'Uom Code',
            'uom_description' => 'Uom Description',
            'uom_xdate1' => 'Uom Xdate1',
            'uom_xboolean1' => 'Uom Xboolean1',
            'uom_interger1' => 'Uom Interger1',
            'uom_xvarchar1' => 'Uom Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['uom_id' => 'uom_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials0()
    {
        return $this->hasMany(Material::className(), ['uom_id' => 'uom_id']);
    }
}
