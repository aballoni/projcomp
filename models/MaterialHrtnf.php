<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material_hrtnf".
 *
 * @property integer $material_hrtnf_id
 * @property integer $material_id
 * @property integer $hrtnf_line
 * @property integer $hrtnf_cnf
 * @property string $hrtnf_nat_op
 * @property string $hrtnf_nf
 * @property string $hrtnf_cod_prod
 * @property integer $hrtnf_ncm
 * @property string $hrtnf_u_com
 * @property string $hrtnf_q_com
 * @property string $hrtnf_v_un_com
 * @property string $hrtnf_tot_nf
 * @property string $hrtnf_u_trib
 * @property string $hrtnf_base_cal
 * @property string $hrtnf_rate
 * @property string $hrtnf_icms
 * @property integer $hrtnf_n_item
 * @property string $hrtnf_xprod
 * @property string $hrtnf_xdate1
 * @property string $hrtnf_xdate2
 * @property string $hrtnf_xdate3
 * @property boolean $hrtnf_xboolean1
 * @property boolean $hrtnf_xboolean2
 * @property boolean $hrtnf_xboolean3
 * @property string $hrtnf_xvarchar1
 * @property string $hrtnf_xvarchar2
 * @property string $hrtnf_xvarchar3
 * @property integer $hrtnf_xinterger1
 * @property integer $hrtnf_xinterger2
 * @property integer $hrtnf_xinterger3
 *
 * @property Material $material
 */
class MaterialHrtnf extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'material_hrtnf';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_id'], 'required'],
            [['material_id', 'hrtnf_line', 'hrtnf_cnf', 'hrtnf_ncm', 'hrtnf_n_item', 'hrtnf_xinterger1', 'hrtnf_xinterger2', 'hrtnf_xinterger3'], 'integer'],
            [['hrtnf_q_com', 'hrtnf_v_un_com', 'hrtnf_tot_nf', 'hrtnf_base_cal', 'hrtnf_rate', 'hrtnf_icms'], 'number'],
            [['hrtnf_xdate1', 'hrtnf_xdate2', 'hrtnf_xdate3'], 'safe'],
            [['hrtnf_xboolean1', 'hrtnf_xboolean2', 'hrtnf_xboolean3'], 'boolean'],
            [['hrtnf_nat_op'], 'string', 'max' => 80],
            [['hrtnf_nf', 'hrtnf_xvarchar1', 'hrtnf_xvarchar2', 'hrtnf_xvarchar3'], 'string', 'max' => 30],
            [['hrtnf_cod_prod'], 'string', 'max' => 10],
            [['hrtnf_u_com', 'hrtnf_u_trib'], 'string', 'max' => 2],
            [['hrtnf_xprod'], 'string', 'max' => 150],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Material::className(), 'targetAttribute' => ['material_id' => 'material_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'material_hrtnf_id' => 'Material Hrtnf ID',
            'material_id' => 'Material ID',
            'hrtnf_line' => 'Hrtnf Line',
            'hrtnf_cnf' => 'Hrtnf Cnf',
            'hrtnf_nat_op' => 'Hrtnf Nat Op',
            'hrtnf_nf' => 'Hrtnf Nf',
            'hrtnf_cod_prod' => 'Hrtnf Cod Prod',
            'hrtnf_ncm' => 'Hrtnf Ncm',
            'hrtnf_u_com' => 'Hrtnf U Com',
            'hrtnf_q_com' => 'Hrtnf Q Com',
            'hrtnf_v_un_com' => 'Hrtnf V Un Com',
            'hrtnf_tot_nf' => 'Hrtnf Tot Nf',
            'hrtnf_u_trib' => 'Hrtnf U Trib',
            'hrtnf_base_cal' => 'Hrtnf Base Cal',
            'hrtnf_rate' => 'Hrtnf Rate',
            'hrtnf_icms' => 'Hrtnf Icms',
            'hrtnf_n_item' => 'Hrtnf N Item',
            'hrtnf_xprod' => 'Hrtnf Xprod',
            'hrtnf_xdate1' => 'Hrtnf Xdate1',
            'hrtnf_xdate2' => 'Hrtnf Xdate2',
            'hrtnf_xdate3' => 'Hrtnf Xdate3',
            'hrtnf_xboolean1' => 'Hrtnf Xboolean1',
            'hrtnf_xboolean2' => 'Hrtnf Xboolean2',
            'hrtnf_xboolean3' => 'Hrtnf Xboolean3',
            'hrtnf_xvarchar1' => 'Hrtnf Xvarchar1',
            'hrtnf_xvarchar2' => 'Hrtnf Xvarchar2',
            'hrtnf_xvarchar3' => 'Hrtnf Xvarchar3',
            'hrtnf_xinterger1' => 'Hrtnf Xinterger1',
            'hrtnf_xinterger2' => 'Hrtnf Xinterger2',
            'hrtnf_xinterger3' => 'Hrtnf Xinterger3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasOne(Material::className(), ['material_id' => 'material_id']);
    }
}
