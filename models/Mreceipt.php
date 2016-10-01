<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mreceipt".
 *
 * @property integer $mreceipt_id
 * @property string $mreceipt_identification
 * @property string $mreceipt_remarks
 * @property string $mreceipt_date
 * @property string $mreceipt_xdate1
 * @property string $mreceipt_xdate2
 * @property string $mreceipt_xdate3
 * @property boolean $mreceipt_xboolean1
 * @property boolean $mreceipt_xboolean2
 * @property boolean $mreceipt_xboolean3
 * @property boolean $mreceipt_xboolean4
 * @property boolean $mreceipt_xboolean5
 * @property string $mreceipt_xvarchar1
 * @property string $mreceipt_xvarchar2
 * @property string $mreceipt_xvarchar3
 * @property integer $mreceipt_xinterger1
 * @property integer $mreceipt_xinterger2
 * @property integer $mreceipt_xinterger3
 */
class Mreceipt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mreceipt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mreceipt_identification'], 'required'],
            [['mreceipt_date', 'mreceipt_xdate1', 'mreceipt_xdate2', 'mreceipt_xdate3'], 'safe'],
            [['mreceipt_xboolean1', 'mreceipt_xboolean2', 'mreceipt_xboolean3', 'mreceipt_xboolean4', 'mreceipt_xboolean5'], 'boolean'],
            [['mreceipt_xinterger1', 'mreceipt_xinterger2', 'mreceipt_xinterger3'], 'integer'],
            [['mreceipt_identification'], 'string', 'max' => 20],
            [['mreceipt_remarks'], 'string', 'max' => 500],
            [['mreceipt_xvarchar1', 'mreceipt_xvarchar2', 'mreceipt_xvarchar3'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mreceipt_id' => 'Mreceipt ID',
            'mreceipt_identification' => 'Mreceipt Identification',
            'mreceipt_remarks' => 'Mreceipt Remarks',
            'mreceipt_date' => 'Mreceipt Date',
            'mreceipt_xdate1' => 'Mreceipt Xdate1',
            'mreceipt_xdate2' => 'Mreceipt Xdate2',
            'mreceipt_xdate3' => 'Mreceipt Xdate3',
            'mreceipt_xboolean1' => 'Mreceipt Xboolean1',
            'mreceipt_xboolean2' => 'Mreceipt Xboolean2',
            'mreceipt_xboolean3' => 'Mreceipt Xboolean3',
            'mreceipt_xboolean4' => 'Mreceipt Xboolean4',
            'mreceipt_xboolean5' => 'Mreceipt Xboolean5',
            'mreceipt_xvarchar1' => 'Mreceipt Xvarchar1',
            'mreceipt_xvarchar2' => 'Mreceipt Xvarchar2',
            'mreceipt_xvarchar3' => 'Mreceipt Xvarchar3',
            'mreceipt_xinterger1' => 'Mreceipt Xinterger1',
            'mreceipt_xinterger2' => 'Mreceipt Xinterger2',
            'mreceipt_xinterger3' => 'Mreceipt Xinterger3',
        ];
    }
}
