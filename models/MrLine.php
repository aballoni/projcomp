<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mr_line".
 *
 * @property integer $mr_line_id
 * @property integer $mr_id
 * @property integer $material_id
 * @property string $mr_line_mat_manual_desc
 * @property integer $userx_id
 * @property integer $client_id
 * @property integer $budget_id
 * @property integer $cost_center_id
 * @property integer $mr_line_quantity
 * @property string $mr_line_date
 * @property integer $location_id
 * @property string $mr_line_xdate1
 * @property string $mr_line_xdate2
 * @property string $mr_line_xdate3
 * @property boolean $mr_line_xboolean1
 * @property boolean $mr_line_xboolean2
 * @property boolean $mr_line_xboolean3
 * @property boolean $mr_line_xboolean4
 * @property boolean $mr_line_xboolean5
 * @property string $mr_line_xvarchar1
 * @property string $mr_line_xvarchar2
 * @property string $mr_line_xvarchar3
 * @property integer $mr_line_xinterger1
 * @property integer $mr_line_xinterger2
 * @property integer $mr_line_xinterger3
 *
 * @property Budget $budget
 * @property Client $client
 * @property CostCenter $costCenter
 * @property Location $location
 * @property Material $material
 * @property Mr $mr
 * @property PoLine[] $poLines
 */
class MrLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mr_line';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mr_id', 'material_id', 'userx_id', 'client_id', 'budget_id', 'cost_center_id', 'mr_line_quantity', 'mr_line_date', 'location_id'], 'required'],
            [['mr_id', 'material_id', 'userx_id', 'client_id', 'budget_id', 'cost_center_id', 'mr_line_quantity', 'location_id', 'mr_line_xinterger1', 'mr_line_xinterger2', 'mr_line_xinterger3'], 'integer'],
            [['mr_line_date', 'mr_line_xdate1', 'mr_line_xdate2', 'mr_line_xdate3'], 'safe'],
            [['mr_line_xboolean1', 'mr_line_xboolean2', 'mr_line_xboolean3', 'mr_line_xboolean4', 'mr_line_xboolean5'], 'boolean'],
            [['mr_line_mat_manual_desc'], 'string', 'max' => 40],
            [['mr_line_xvarchar1', 'mr_line_xvarchar2', 'mr_line_xvarchar3'], 'string', 'max' => 30],
            [['budget_id'], 'exist', 'skipOnError' => true, 'targetClass' => Budget::className(), 'targetAttribute' => ['budget_id' => 'budget_id']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['client_id' => 'client_id']],
            [['cost_center_id'], 'exist', 'skipOnError' => true, 'targetClass' => CostCenter::className(), 'targetAttribute' => ['cost_center_id' => 'cost_center_id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'location_id']],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Material::className(), 'targetAttribute' => ['material_id' => 'material_id']],
            [['mr_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mr::className(), 'targetAttribute' => ['mr_id' => 'mr_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mr_line_id' => 'Mr Line ID',
            'mr_id' => 'Mr ID',
            'material_id' => 'Material ID',
            'mr_line_mat_manual_desc' => 'Mr Line Mat Manual Desc',
            'userx_id' => 'Userx ID',
            'client_id' => 'Client ID',
            'budget_id' => 'Budget ID',
            'cost_center_id' => 'Cost Center ID',
            'mr_line_quantity' => 'Mr Line Quantity',
            'mr_line_date' => 'Mr Line Date',
            'location_id' => 'Location ID',
            'mr_line_xdate1' => 'Mr Line Xdate1',
            'mr_line_xdate2' => 'Mr Line Xdate2',
            'mr_line_xdate3' => 'Mr Line Xdate3',
            'mr_line_xboolean1' => 'Mr Line Xboolean1',
            'mr_line_xboolean2' => 'Mr Line Xboolean2',
            'mr_line_xboolean3' => 'Mr Line Xboolean3',
            'mr_line_xboolean4' => 'Mr Line Xboolean4',
            'mr_line_xboolean5' => 'Mr Line Xboolean5',
            'mr_line_xvarchar1' => 'Mr Line Xvarchar1',
            'mr_line_xvarchar2' => 'Mr Line Xvarchar2',
            'mr_line_xvarchar3' => 'Mr Line Xvarchar3',
            'mr_line_xinterger1' => 'Mr Line Xinterger1',
            'mr_line_xinterger2' => 'Mr Line Xinterger2',
            'mr_line_xinterger3' => 'Mr Line Xinterger3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBudget()
    {
        return $this->hasOne(Budget::className(), ['budget_id' => 'budget_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['client_id' => 'client_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostCenter()
    {
        return $this->hasOne(CostCenter::className(), ['cost_center_id' => 'cost_center_id']);
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
    public function getMr()
    {
        return $this->hasOne(Mr::className(), ['mr_id' => 'mr_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoLines()
    {
        return $this->hasMany(PoLine::className(), ['mr_line_id' => 'mr_line_id', 'mr_id' => 'mr_id']);
    }
}
