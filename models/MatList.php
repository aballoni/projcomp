<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mat_list".
 *
 * @property integer $mat_list_id
 * @property string $mat_list_description
 * @property integer $mat_list_xinterger1
 * @property string $mat_list_xdate1
 * @property boolean $mat_list_xboolean1
 * @property string $mat_list_xvarchar1
 *
 * @property Material[] $materials
 */
class MatList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mat_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mat_list_description'], 'required'],
            [['mat_list_xinterger1'], 'integer'],
            [['mat_list_xdate1'], 'safe'],
            [['mat_list_xboolean1'], 'boolean'],
            [['mat_list_description'], 'string', 'max' => 100],
            [['mat_list_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mat_list_id' => 'Mat List ID',
            'mat_list_description' => 'Mat List Description',
            'mat_list_xinterger1' => 'Mat List Xinterger1',
            'mat_list_xdate1' => 'Mat List Xdate1',
            'mat_list_xboolean1' => 'Mat List Xboolean1',
            'mat_list_xvarchar1' => 'Mat List Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['mat_list_id' => 'mat_list_id']);
    }
}
