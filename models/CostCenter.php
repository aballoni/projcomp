<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cost_center".
 *
 * @property integer $cost_center_id
 * @property string $cost_description
 * @property string $cost_remarks
 * @property string $cost_xvarchar1
 * @property string $cost_xdate1
 * @property boolean $cost_xboolean1
 * @property integer $cost_xinterger1
 *
 * @property MrLine[] $mrLines
 */
class CostCenter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cost_center';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cost_description'], 'required'],
            [['cost_xdate1'], 'safe'],
            [['cost_xboolean1'], 'boolean'],
            [['cost_xinterger1'], 'integer'],
            [['cost_description', 'cost_remarks'], 'string', 'max' => 20],
            [['cost_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cost_center_id' => 'Cost Center ID',
            'cost_description' => 'Cost Description',
            'cost_remarks' => 'Cost Remarks',
            'cost_xvarchar1' => 'Cost Xvarchar1',
            'cost_xdate1' => 'Cost Xdate1',
            'cost_xboolean1' => 'Cost Xboolean1',
            'cost_xinterger1' => 'Cost Xinterger1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMrLines()
    {
        return $this->hasMany(MrLine::className(), ['cost_center_id' => 'cost_center_id']);
    }
}
