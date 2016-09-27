<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equip".
 *
 * @property integer $equip_id
 * @property string $equip_description
 * @property string $equip_xdate1
 * @property boolean $equip_xboolean1
 * @property integer $equip_xinterger1
 * @property string $equip_xvarchar1
 *
 * @property Material[] $materials
 */
class Equip extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equip';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['equip_description'], 'required'],
            [['equip_xdate1'], 'safe'],
            [['equip_xboolean1'], 'boolean'],
            [['equip_xinterger1'], 'integer'],
            [['equip_description'], 'string', 'max' => 50],
            [['equip_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'equip_id' => 'Equip ID',
            'equip_description' => 'Equip Description',
            'equip_xdate1' => 'Equip Xdate1',
            'equip_xboolean1' => 'Equip Xboolean1',
            'equip_xinterger1' => 'Equip Xinterger1',
            'equip_xvarchar1' => 'Equip Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['equip_id' => 'equip_id']);
    }
}
