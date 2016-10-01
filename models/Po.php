<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "po".
 *
 * @property integer $po_id
 * @property string $po_code
 * @property string $po_date
 * @property string $po_xdate1
 * @property string $po_xdate2
 * @property string $po_xdate3
 * @property boolean $po_xboolean1
 * @property boolean $po_xboolean2
 * @property boolean $po_xboolean3
 * @property boolean $po_xboolean4
 * @property boolean $po_xboolean5
 * @property string $po_xvarchar1
 * @property string $po_xvarchar2
 * @property string $po_xvarchar3
 * @property integer $po_xinterger1
 * @property integer $po_xinterger2
 * @property integer $po_xinterger3
 *
 * @property PoLine[] $poLines
 */
class Po extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'po';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_code'], 'required'],
            [['po_date', 'po_xdate1', 'po_xdate2', 'po_xdate3'], 'safe'],
            [['po_xboolean1', 'po_xboolean2', 'po_xboolean3', 'po_xboolean4', 'po_xboolean5'], 'boolean'],
            [['po_xinterger1', 'po_xinterger2', 'po_xinterger3'], 'integer'],
            [['po_code'], 'string', 'max' => 20],
            [['po_xvarchar1', 'po_xvarchar2', 'po_xvarchar3'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_id' => 'Po ID',
            'po_code' => 'Po Code',
            'po_date' => 'Po Date',
            'po_xdate1' => 'Po Xdate1',
            'po_xdate2' => 'Po Xdate2',
            'po_xdate3' => 'Po Xdate3',
            'po_xboolean1' => 'Po Xboolean1',
            'po_xboolean2' => 'Po Xboolean2',
            'po_xboolean3' => 'Po Xboolean3',
            'po_xboolean4' => 'Po Xboolean4',
            'po_xboolean5' => 'Po Xboolean5',
            'po_xvarchar1' => 'Po Xvarchar1',
            'po_xvarchar2' => 'Po Xvarchar2',
            'po_xvarchar3' => 'Po Xvarchar3',
            'po_xinterger1' => 'Po Xinterger1',
            'po_xinterger2' => 'Po Xinterger2',
            'po_xinterger3' => 'Po Xinterger3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoLines()
    {
        return $this->hasMany(PoLine::className(), ['po_id' => 'po_id']);
    }
}
