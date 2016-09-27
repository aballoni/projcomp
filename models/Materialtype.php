<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materialtype".
 *
 * @property integer $materialtype_id
 * @property string $type_description
 * @property integer $type_xinterger1
 * @property string $type_xdate1
 * @property boolean $type_xboolean1
 * @property string $type_xvarchar1
 *
 * @property Material[] $materials
 */
class Materialtype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materialtype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_description'], 'required'],
            [['type_xinterger1'], 'integer'],
            [['type_xdate1'], 'safe'],
            [['type_xboolean1'], 'boolean'],
            [['type_description'], 'string', 'max' => 20],
            [['type_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'materialtype_id' => 'Materialtype ID',
            'type_description' => 'Type Description',
            'type_xinterger1' => 'Type Xinterger1',
            'type_xdate1' => 'Type Xdate1',
            'type_xboolean1' => 'Type Xboolean1',
            'type_xvarchar1' => 'Type Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['materialtype_id' => 'materialtype_id']);
    }
}
