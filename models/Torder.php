<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "torder".
 *
 * @property integer $to_id
 * @property string $to_cm_identification
 * @property string $to_from
 * @property string $to_to
 * @property string $to_expeditor
 * @property string $to_expeditor_phone
 * @property string $to_receiver
 * @property string $to_receiver_phone
 * @property string $to_date_expedite
 * @property string $to_date_eta
 * @property string $to_modal
 * @property string $to_vessel_name
 * @property string $to_tug_name
 * @property string $to_truck_plate
 * @property integer $to_transporter
 * @property string $to_remarks
 * @property string $to_xdate1
 * @property string $to_xdate2
 * @property string $to_xdate3
 * @property boolean $to_xboolean1
 * @property boolean $to_xboolean2
 * @property boolean $to_xboolean3
 * @property boolean $to_xboolean4
 * @property boolean $to_xboolean5
 * @property string $to_xvarchar1
 * @property string $to_xvarchar2
 * @property string $to_xvarchar3
 * @property integer $to_xinterger1
 * @property integer $xinterger2
 * @property integer $xinterger3
 *
 * @property ToLine[] $toLines
 */
class Torder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'torder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['to_cm_identification', 'to_from'], 'required'],
            [['to_date_expedite', 'to_date_eta', 'to_xdate1', 'to_xdate2', 'to_xdate3'], 'safe'],
            [['to_transporter', 'to_xinterger1', 'xinterger2', 'xinterger3'], 'integer'],
            [['to_xboolean1', 'to_xboolean2', 'to_xboolean3', 'to_xboolean4', 'to_xboolean5'], 'boolean'],
            [['to_cm_identification', 'to_expeditor_phone', 'to_receiver_phone'], 'string', 'max' => 20],
            [['to_from', 'to_to', 'to_expeditor', 'to_receiver', 'to_modal', 'to_vessel_name', 'to_tug_name', 'to_truck_plate', 'to_xvarchar1', 'to_xvarchar2', 'to_xvarchar3'], 'string', 'max' => 30],
            [['to_remarks'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'to_id' => 'To ID',
            'to_cm_identification' => 'To Cm Identification',
            'to_from' => 'To From',
            'to_to' => 'To To',
            'to_expeditor' => 'To Expeditor',
            'to_expeditor_phone' => 'To Expeditor Phone',
            'to_receiver' => 'To Receiver',
            'to_receiver_phone' => 'To Receiver Phone',
            'to_date_expedite' => 'To Date Expedite',
            'to_date_eta' => 'To Date Eta',
            'to_modal' => 'To Modal',
            'to_vessel_name' => 'To Vessel Name',
            'to_tug_name' => 'To Tug Name',
            'to_truck_plate' => 'To Truck Plate',
            'to_transporter' => 'To Transporter',
            'to_remarks' => 'To Remarks',
            'to_xdate1' => 'To Xdate1',
            'to_xdate2' => 'To Xdate2',
            'to_xdate3' => 'To Xdate3',
            'to_xboolean1' => 'To Xboolean1',
            'to_xboolean2' => 'To Xboolean2',
            'to_xboolean3' => 'To Xboolean3',
            'to_xboolean4' => 'To Xboolean4',
            'to_xboolean5' => 'To Xboolean5',
            'to_xvarchar1' => 'To Xvarchar1',
            'to_xvarchar2' => 'To Xvarchar2',
            'to_xvarchar3' => 'To Xvarchar3',
            'to_xinterger1' => 'To Xinterger1',
            'xinterger2' => 'Xinterger2',
            'xinterger3' => 'Xinterger3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToLines()
    {
        return $this->hasMany(ToLine::className(), ['to_id' => 'to_id']);
    }
}
