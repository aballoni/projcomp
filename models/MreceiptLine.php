<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mreceipt_line".
 *
 * @property integer $mreceipt_line_id
 * @property integer $mreceipt_id
 * @property integer $po_line_id
 * @property integer $po_id
 * @property integer $userx_id
 * @property integer $mreceipt_line_quantity
 * @property integer $mreceipt_line_invoice
 * @property string $mreceipt_line_date
 * @property integer $location_id
 * @property string $mreceipt_line_xdate1
 * @property string $mreceipt_line_xdate2
 * @property string $mreceipt_line_xdate3
 * @property boolean $mreceipt_line_xboolean1
 * @property boolean $mreceipt_line_xboolean2
 * @property boolean $mreceipt_line_xboolean3
 * @property boolean $mreceipt_line_xboolean4
 * @property boolean $mreceipt_line_xboolean5
 * @property string $mreceipt_line_xvarchar1
 * @property string $mreceipt_line_xvarchar2
 * @property string $mreceipt_line_xvarchar3
 * @property integer $mreceipt_line_xinterger1
 * @property integer $mreceipt_line_xinterger2
 * @property integer $mreceipt_line_xinterger3
 */
class MreceiptLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mreceipt_line';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mreceipt_id', 'po_line_id', 'po_id', 'userx_id', 'mreceipt_line_quantity', 'mreceipt_line_invoice', 'location_id'], 'required'],
            [['mreceipt_id', 'po_line_id', 'po_id', 'userx_id', 'mreceipt_line_quantity', 'mreceipt_line_invoice', 'location_id', 'mreceipt_line_xinterger1', 'mreceipt_line_xinterger2', 'mreceipt_line_xinterger3'], 'integer'],
            [['mreceipt_line_date', 'mreceipt_line_xdate1', 'mreceipt_line_xdate2', 'mreceipt_line_xdate3'], 'safe'],
            [['mreceipt_line_xboolean1', 'mreceipt_line_xboolean2', 'mreceipt_line_xboolean3', 'mreceipt_line_xboolean4', 'mreceipt_line_xboolean5'], 'boolean'],
            [['mreceipt_line_xvarchar1', 'mreceipt_line_xvarchar2', 'mreceipt_line_xvarchar3'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mreceipt_line_id' => 'Mreceipt Line ID',
            'mreceipt_id' => 'Mreceipt ID',
            'po_line_id' => 'Po Line ID',
            'po_id' => 'Po ID',
            'userx_id' => 'Userx ID',
            'mreceipt_line_quantity' => 'Mreceipt Line Quantity',
            'mreceipt_line_invoice' => 'Mreceipt Line Invoice',
            'mreceipt_line_date' => 'Mreceipt Line Date',
            'location_id' => 'Location ID',
            'mreceipt_line_xdate1' => 'Mreceipt Line Xdate1',
            'mreceipt_line_xdate2' => 'Mreceipt Line Xdate2',
            'mreceipt_line_xdate3' => 'Mreceipt Line Xdate3',
            'mreceipt_line_xboolean1' => 'Mreceipt Line Xboolean1',
            'mreceipt_line_xboolean2' => 'Mreceipt Line Xboolean2',
            'mreceipt_line_xboolean3' => 'Mreceipt Line Xboolean3',
            'mreceipt_line_xboolean4' => 'Mreceipt Line Xboolean4',
            'mreceipt_line_xboolean5' => 'Mreceipt Line Xboolean5',
            'mreceipt_line_xvarchar1' => 'Mreceipt Line Xvarchar1',
            'mreceipt_line_xvarchar2' => 'Mreceipt Line Xvarchar2',
            'mreceipt_line_xvarchar3' => 'Mreceipt Line Xvarchar3',
            'mreceipt_line_xinterger1' => 'Mreceipt Line Xinterger1',
            'mreceipt_line_xinterger2' => 'Mreceipt Line Xinterger2',
            'mreceipt_line_xinterger3' => 'Mreceipt Line Xinterger3',
        ];
    }
}
