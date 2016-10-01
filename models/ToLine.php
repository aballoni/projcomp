<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "to_line".
 *
 * @property integer $to_line_id
 * @property integer $to_id
 * @property integer $to_line_quantity
 * @property integer $material_id
 * @property string $to_line_mat_manual_desc
 * @property string $to_line_invoice
 * @property string $to_line_reference
 * @property string $to_line_dimensions
 * @property integer $location_id
 * @property string $to_line_xdate1
 * @property string $to_line_xdate2
 * @property string $to_line_xdate3
 * @property boolean $to_line_xboolean1
 * @property boolean $to_line_xboolean2
 * @property boolean $to_line_xboolean3
 * @property boolean $to_line_xboolean4
 * @property boolean $to_line_xboolean5
 * @property string $to_line_xvarchar1
 * @property string $to_line_xvarchar2
 * @property string $to_line_xvarchar3
 * @property integer $to_line_xinterger1
 * @property integer $to_line_xinterger2
 * @property integer $to_line_xinterger3
 * @property integer $userx_id
 *
 * @property Location $location
 * @property Torder $to
 * @property Userx $userx
 */
class ToLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'to_line';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['to_id', 'to_line_quantity', 'material_id', 'location_id', 'userx_id'], 'required'],
            [['to_id', 'to_line_quantity', 'material_id', 'location_id', 'to_line_xinterger1', 'to_line_xinterger2', 'to_line_xinterger3', 'userx_id'], 'integer'],
            [['to_line_xdate1', 'to_line_xdate2', 'to_line_xdate3'], 'safe'],
            [['to_line_xboolean1', 'to_line_xboolean2', 'to_line_xboolean3', 'to_line_xboolean4', 'to_line_xboolean5'], 'boolean'],
            [['to_line_mat_manual_desc'], 'string', 'max' => 40],
            [['to_line_invoice'], 'string', 'max' => 12],
            [['to_line_reference', 'to_line_dimensions', 'to_line_xvarchar1', 'to_line_xvarchar2', 'to_line_xvarchar3'], 'string', 'max' => 30],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'location_id']],
            [['to_id'], 'exist', 'skipOnError' => true, 'targetClass' => Torder::className(), 'targetAttribute' => ['to_id' => 'to_id']],
            [['userx_id'], 'exist', 'skipOnError' => true, 'targetClass' => Userx::className(), 'targetAttribute' => ['userx_id' => 'userx_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'to_line_id' => 'To Line ID',
            'to_id' => 'To ID',
            'to_line_quantity' => 'To Line Quantity',
            'material_id' => 'Material ID',
            'to_line_mat_manual_desc' => 'To Line Mat Manual Desc',
            'to_line_invoice' => 'To Line Invoice',
            'to_line_reference' => 'To Line Reference',
            'to_line_dimensions' => 'To Line Dimensions',
            'location_id' => 'Location ID',
            'to_line_xdate1' => 'To Line Xdate1',
            'to_line_xdate2' => 'To Line Xdate2',
            'to_line_xdate3' => 'To Line Xdate3',
            'to_line_xboolean1' => 'To Line Xboolean1',
            'to_line_xboolean2' => 'To Line Xboolean2',
            'to_line_xboolean3' => 'To Line Xboolean3',
            'to_line_xboolean4' => 'To Line Xboolean4',
            'to_line_xboolean5' => 'To Line Xboolean5',
            'to_line_xvarchar1' => 'To Line Xvarchar1',
            'to_line_xvarchar2' => 'To Line Xvarchar2',
            'to_line_xvarchar3' => 'To Line Xvarchar3',
            'to_line_xinterger1' => 'To Line Xinterger1',
            'to_line_xinterger2' => 'To Line Xinterger2',
            'to_line_xinterger3' => 'To Line Xinterger3',
            'userx_id' => 'Userx ID',
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
    public function getTo()
    {
        return $this->hasOne(Torder::className(), ['to_id' => 'to_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserx()
    {
        return $this->hasOne(Userx::className(), ['userx_id' => 'userx_id']);
    }
}
