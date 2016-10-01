<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "missue".
 *
 * @property integer $missue_id
 * @property string $missue_remarks
 * @property string $missue_date
 * @property string $missue_xdate1
 * @property string $missue_xdate2
 * @property string $missue_xdate3
 * @property boolean $missue_xboolean1
 * @property boolean $missue_xboolean2
 * @property boolean $missue_xboolean3
 * @property boolean $missue_xboolean4
 * @property boolean $missue_xboolean5
 * @property string $missue_xvarchar1
 * @property string $missue_xvarchar2
 * @property string $missue_xvarchar3
 * @property integer $missue_xinterger1
 * @property integer $missue_xinterger2
 * @property integer $missue_xinterger3
 *
 * @property MissueLine[] $missueLines
 */
class Missue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'missue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['missue_date', 'missue_xdate1', 'missue_xdate2', 'missue_xdate3'], 'safe'],
            [['missue_xboolean1', 'missue_xboolean2', 'missue_xboolean3', 'missue_xboolean4', 'missue_xboolean5'], 'boolean'],
            [['missue_xinterger1', 'missue_xinterger2', 'missue_xinterger3'], 'integer'],
            [['missue_remarks'], 'string', 'max' => 20],
            [['missue_xvarchar1', 'missue_xvarchar2', 'missue_xvarchar3'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'missue_id' => 'Missue ID',
            'missue_remarks' => 'Missue Remarks',
            'missue_date' => 'Missue Date',
            'missue_xdate1' => 'Missue Xdate1',
            'missue_xdate2' => 'Missue Xdate2',
            'missue_xdate3' => 'Missue Xdate3',
            'missue_xboolean1' => 'Missue Xboolean1',
            'missue_xboolean2' => 'Missue Xboolean2',
            'missue_xboolean3' => 'Missue Xboolean3',
            'missue_xboolean4' => 'Missue Xboolean4',
            'missue_xboolean5' => 'Missue Xboolean5',
            'missue_xvarchar1' => 'Missue Xvarchar1',
            'missue_xvarchar2' => 'Missue Xvarchar2',
            'missue_xvarchar3' => 'Missue Xvarchar3',
            'missue_xinterger1' => 'Missue Xinterger1',
            'missue_xinterger2' => 'Missue Xinterger2',
            'missue_xinterger3' => 'Missue Xinterger3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMissueLines()
    {
        return $this->hasMany(MissueLine::className(), ['missue_id' => 'missue_id']);
    }
}
