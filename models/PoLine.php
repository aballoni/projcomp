<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "po_line".
 *
 * @property integer $po_line_id
 * @property integer $po_id
 * @property integer $mr_line_id
 * @property integer $mr_id
 * @property integer $userx_id
 * @property integer $po_line_quantity
 * @property string $po_line_date
 * @property integer $location_id
 * @property string $po_line_xdate1
 * @property string $po_line_xdate2
 * @property string $po_line_xdate3
 * @property boolean $po_line_xboolean1
 * @property boolean $po_line_xboolean2
 * @property boolean $po_line_xboolean3
 * @property boolean $po_line_xboolean4
 * @property boolean $po_line_xboolean5
 * @property string $po_line_xvarchar1
 * @property string $po_line_xvarchar2
 * @property string $po_line_xvarchar3
 * @property integer $po_line_xinterger1
 * @property integer $po_line_xinterger2
 * @property integer $po_line_xinterger3
 *
 * @property Location $location
 * @property MrLine $mrLine
 * @property Po $po
 * @property Userx $userx
 */
class PoLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'po_line';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_line_id', 'po_id', 'mr_line_id', 'mr_id', 'userx_id', 'po_line_quantity', 'location_id'], 'required'],
            [['po_line_id', 'po_id', 'mr_line_id', 'mr_id', 'userx_id', 'po_line_quantity', 'location_id', 'po_line_xinterger1', 'po_line_xinterger2', 'po_line_xinterger3'], 'integer'],
            [['po_line_date', 'po_line_xdate1', 'po_line_xdate2', 'po_line_xdate3'], 'safe'],
            [['po_line_xboolean1', 'po_line_xboolean2', 'po_line_xboolean3', 'po_line_xboolean4', 'po_line_xboolean5'], 'boolean'],
            [['po_line_xvarchar1', 'po_line_xvarchar2', 'po_line_xvarchar3'], 'string', 'max' => 30],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'location_id']],
            [['mr_line_id', 'mr_id'], 'exist', 'skipOnError' => true, 'targetClass' => MrLine::className(), 'targetAttribute' => ['mr_line_id' => 'mr_line_id', 'mr_id' => 'mr_id']],
            [['po_id'], 'exist', 'skipOnError' => true, 'targetClass' => Po::className(), 'targetAttribute' => ['po_id' => 'po_id']],
            [['userx_id'], 'exist', 'skipOnError' => true, 'targetClass' => Userx::className(), 'targetAttribute' => ['userx_id' => 'userx_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_line_id' => 'Po Line ID',
            'po_id' => 'Po ID',
            'mr_line_id' => 'Mr Line ID',
            'mr_id' => 'Mr ID',
            'userx_id' => 'Userx ID',
            'po_line_quantity' => 'Po Line Quantity',
            'po_line_date' => 'Po Line Date',
            'location_id' => 'Location ID',
            'po_line_xdate1' => 'Po Line Xdate1',
            'po_line_xdate2' => 'Po Line Xdate2',
            'po_line_xdate3' => 'Po Line Xdate3',
            'po_line_xboolean1' => 'Po Line Xboolean1',
            'po_line_xboolean2' => 'Po Line Xboolean2',
            'po_line_xboolean3' => 'Po Line Xboolean3',
            'po_line_xboolean4' => 'Po Line Xboolean4',
            'po_line_xboolean5' => 'Po Line Xboolean5',
            'po_line_xvarchar1' => 'Po Line Xvarchar1',
            'po_line_xvarchar2' => 'Po Line Xvarchar2',
            'po_line_xvarchar3' => 'Po Line Xvarchar3',
            'po_line_xinterger1' => 'Po Line Xinterger1',
            'po_line_xinterger2' => 'Po Line Xinterger2',
            'po_line_xinterger3' => 'Po Line Xinterger3',
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
    public function getMrLine()
    {
        return $this->hasOne(MrLine::className(), ['mr_line_id' => 'mr_line_id', 'mr_id' => 'mr_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPo()
    {
        return $this->hasOne(Po::className(), ['po_id' => 'po_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserx()
    {
        return $this->hasOne(Userx::className(), ['userx_id' => 'userx_id']);
    }
}
