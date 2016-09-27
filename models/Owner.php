<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "owner".
 *
 * @property integer $owner_id
 * @property string $owner_description
 * @property string $owner_xdate1
 * @property boolean $owner_xboolean1
 * @property integer $owner_xinterger1
 * @property string $owner_xvarchar1
 *
 * @property Material[] $materials
 */
class Owner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'owner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['owner_description'], 'required'],
            [['owner_xdate1'], 'safe'],
            [['owner_xboolean1'], 'boolean'],
            [['owner_xinterger1'], 'integer'],
            [['owner_description'], 'string', 'max' => 20],
            [['owner_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'owner_id' => 'Owner ID',
            'owner_description' => 'Owner Description',
            'owner_xdate1' => 'Owner Xdate1',
            'owner_xboolean1' => 'Owner Xboolean1',
            'owner_xinterger1' => 'Owner Xinterger1',
            'owner_xvarchar1' => 'Owner Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['owner_id' => 'owner_id']);
    }
}
