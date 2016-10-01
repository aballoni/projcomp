<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $client_id
 * @property string $client_description
 * @property string $client_remarks
 * @property integer $dep_id
 * @property integer $client_xinterger1
 * @property boolean $client_xboolean1
 * @property string $client_xdate1
 * @property string $client_xvarchar1
 *
 * @property Dep $dep
 * @property MissueLine[] $missueLines
 * @property MrLine[] $mrLines
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_description', 'dep_id'], 'required'],
            [['dep_id', 'client_xinterger1'], 'integer'],
            [['client_xboolean1'], 'boolean'],
            [['client_xdate1'], 'safe'],
            [['client_description'], 'string', 'max' => 20],
            [['client_remarks'], 'string', 'max' => 50],
            [['client_xvarchar1'], 'string', 'max' => 30],
            [['dep_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dep::className(), 'targetAttribute' => ['dep_id' => 'dep_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'client_id' => 'Client ID',
            'client_description' => 'Client Description',
            'client_remarks' => 'Client Remarks',
            'dep_id' => 'Dep ID',
            'client_xinterger1' => 'Client Xinterger1',
            'client_xboolean1' => 'Client Xboolean1',
            'client_xdate1' => 'Client Xdate1',
            'client_xvarchar1' => 'Client Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDep()
    {
        return $this->hasOne(Dep::className(), ['dep_id' => 'dep_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMissueLines()
    {
        return $this->hasMany(MissueLine::className(), ['client_id' => 'client_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMrLines()
    {
        return $this->hasMany(MrLine::className(), ['client_id' => 'client_id']);
    }
}
