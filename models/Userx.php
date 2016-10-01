<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userx".
 *
 * @property integer $userx_id
 * @property string $userx_description
 * @property string $userx_password
 * @property string $userx_remarks
 * @property integer $dep_id
 * @property string $userx_xvarchar1
 * @property string $userx_xdate1
 * @property boolean $userx_xboolean1
 * @property integer $userx_xinterger1
 *
 * @property PoLine[] $poLines
 * @property Stock[] $stocks
 * @property ToLine[] $toLines
 * @property Dep $dep
 */
class Userx extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userx';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userx_description', 'userx_password', 'dep_id'], 'required'],
            [['dep_id', 'userx_xinterger1'], 'integer'],
            [['userx_xdate1'], 'safe'],
            [['userx_xboolean1'], 'boolean'],
            [['userx_description', 'userx_remarks'], 'string', 'max' => 20],
            [['userx_password'], 'string', 'max' => 8],
            [['userx_xvarchar1'], 'string', 'max' => 30],
            [['dep_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dep::className(), 'targetAttribute' => ['dep_id' => 'dep_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userx_id' => 'Userx ID',
            'userx_description' => 'Userx Description',
            'userx_password' => 'Userx Password',
            'userx_remarks' => 'Userx Remarks',
            'dep_id' => 'Dep ID',
            'userx_xvarchar1' => 'Userx Xvarchar1',
            'userx_xdate1' => 'Userx Xdate1',
            'userx_xboolean1' => 'Userx Xboolean1',
            'userx_xinterger1' => 'Userx Xinterger1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPoLines()
    {
        return $this->hasMany(PoLine::className(), ['userx_id' => 'userx_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStocks()
    {
        return $this->hasMany(Stock::className(), ['userx_id' => 'userx_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getToLines()
    {
        return $this->hasMany(ToLine::className(), ['userx_id' => 'userx_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDep()
    {
        return $this->hasOne(Dep::className(), ['dep_id' => 'dep_id']);
    }
}
