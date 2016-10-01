<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mr".
 *
 * @property integer $mr_id
 * @property string $mr_identification
 * @property string $mr_tabdate
 * @property string $mr_date_needed
 * @property string $mr_manager
 * @property boolean $mr_material_service
 * @property string $mr_reason
 * @property string $mr_remarks
 * @property string $mr_indicacao_fornecedores
 * @property string $mr_xdate1
 * @property string $mr_xdate2
 * @property string $mr_xdate3
 * @property boolean $mr_xboolean1
 * @property boolean $mr_xboolean2
 * @property boolean $mr_xboolean3
 * @property boolean $mr_xboolean4
 * @property boolean $mr_xboolean5
 * @property string $mr_xvarchar1
 * @property string $mr_xvarchar2
 * @property string $mr_xvarchar3
 * @property integer $mr_xinterger1
 * @property integer $mr_xinterger2
 * @property integer $mr_xinterger3
 *
 * @property MrLine[] $mrLines
 */
class Mr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mr_identification', 'mr_material_service'], 'required'],
            [['mr_tabdate', 'mr_date_needed', 'mr_xdate1', 'mr_xdate2', 'mr_xdate3'], 'safe'],
            [['mr_material_service', 'mr_xboolean1', 'mr_xboolean2', 'mr_xboolean3', 'mr_xboolean4', 'mr_xboolean5'], 'boolean'],
            [['mr_xinterger1', 'mr_xinterger2', 'mr_xinterger3'], 'integer'],
            [['mr_identification'], 'string', 'max' => 20],
            [['mr_manager', 'mr_xvarchar1', 'mr_xvarchar2', 'mr_xvarchar3'], 'string', 'max' => 30],
            [['mr_reason', 'mr_remarks', 'mr_indicacao_fornecedores'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mr_id' => 'Mr ID',
            'mr_identification' => 'Mr Identification',
            'mr_tabdate' => 'Mr Tabdate',
            'mr_date_needed' => 'Mr Date Needed',
            'mr_manager' => 'Mr Manager',
            'mr_material_service' => 'Mr Material Service',
            'mr_reason' => 'Mr Reason',
            'mr_remarks' => 'Mr Remarks',
            'mr_indicacao_fornecedores' => 'Mr Indicacao Fornecedores',
            'mr_xdate1' => 'Mr Xdate1',
            'mr_xdate2' => 'Mr Xdate2',
            'mr_xdate3' => 'Mr Xdate3',
            'mr_xboolean1' => 'Mr Xboolean1',
            'mr_xboolean2' => 'Mr Xboolean2',
            'mr_xboolean3' => 'Mr Xboolean3',
            'mr_xboolean4' => 'Mr Xboolean4',
            'mr_xboolean5' => 'Mr Xboolean5',
            'mr_xvarchar1' => 'Mr Xvarchar1',
            'mr_xvarchar2' => 'Mr Xvarchar2',
            'mr_xvarchar3' => 'Mr Xvarchar3',
            'mr_xinterger1' => 'Mr Xinterger1',
            'mr_xinterger2' => 'Mr Xinterger2',
            'mr_xinterger3' => 'Mr Xinterger3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMrLines()
    {
        return $this->hasMany(MrLine::className(), ['mr_id' => 'mr_id']);
    }
}
