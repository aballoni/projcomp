<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "missue_line".
 *
 * @property integer $missue_line_id
 * @property integer $missue_id
 * @property integer $material_id
 * @property integer $missue_quantity
 * @property string $missue_mat_manual_desc
 * @property string $missue_invoice
 * @property integer $location_id
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
 * @property integer $userx_id
 * @property integer $client_id
 *
 * @property Client $client
 * @property Location $location
 * @property Missue $missue
 */
class MissueLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'missue_line';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['missue_id', 'material_id', 'missue_quantity', 'location_id', 'userx_id', 'client_id'], 'required'],
            [['missue_id', 'material_id', 'missue_quantity', 'location_id', 'missue_xinterger1', 'missue_xinterger2', 'missue_xinterger3', 'userx_id', 'client_id'], 'integer'],
            [['missue_xdate1', 'missue_xdate2', 'missue_xdate3'], 'safe'],
            [['missue_xboolean1', 'missue_xboolean2', 'missue_xboolean3', 'missue_xboolean4', 'missue_xboolean5'], 'boolean'],
            [['missue_mat_manual_desc'], 'string', 'max' => 40],
            [['missue_invoice'], 'string', 'max' => 12],
            [['missue_xvarchar1', 'missue_xvarchar2', 'missue_xvarchar3'], 'string', 'max' => 30],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['client_id' => 'client_id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'location_id']],
            [['missue_id'], 'exist', 'skipOnError' => true, 'targetClass' => Missue::className(), 'targetAttribute' => ['missue_id' => 'missue_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'missue_line_id' => 'Missue Line ID',
            'missue_id' => 'Missue ID',
            'material_id' => 'Material ID',
            'missue_quantity' => 'Missue Quantity',
            'missue_mat_manual_desc' => 'Missue Mat Manual Desc',
            'missue_invoice' => 'Missue Invoice',
            'location_id' => 'Location ID',
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
            'userx_id' => 'Userx ID',
            'client_id' => 'Client ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['client_id' => 'client_id']);
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
    public function getMissue()
    {
        return $this->hasOne(Missue::className(), ['missue_id' => 'missue_id']);
    }
}
