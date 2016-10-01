<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property integer $location_id
 * @property string $location_description
 * @property string $location_xdate1
 * @property boolean $location_xboolean1
 * @property integer $location_interger1
 * @property string $location_xvarchar1
 *
 * @property MissueLine[] $missueLines
 * @property MrLine[] $mrLines
 * @property PoLine[] $poLines
 * @property Stock[] $stocks
 * @property ToLine[] $toLines
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['location_description'], 'required'],
            [['location_xdate1'], 'safe'],
            [['location_xboolean1'], 'boolean'],
            [['location_interger1'], 'integer'],
            [['location_description'], 'string', 'max' => 10],
            [['location_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'location_id' => 'Location ID',
            'location_description' => 'Location Description',
            'location_xdate1' => 'Location Xdate1',
            'location_xboolean1' => 'Location Xboolean1',
            'location_interger1' => 'Location Interger1',
            'location_xvarchar1' => 'Location Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMissueLines()
    {
        return $this->hasMany(MissueLine::className(), ['location_id' => 'location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMrLines()
    {
        return $this->hasMany(MrLine::className(), ['location_id' => 'location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoLines()
    {
        return $this->hasMany(PoLine::className(), ['location_id' => 'location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStocks()
    {
        return $this->hasMany(Stock::className(), ['location_id' => 'location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToLines()
    {
        return $this->hasMany(ToLine::className(), ['location_id' => 'location_id']);
    }
}
