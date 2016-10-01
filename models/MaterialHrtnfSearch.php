<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MaterialHrtnf;

/**
 * MaterialHrtnfSearch represents the model behind the search form about `app\models\MaterialHrtnf`.
 */
class MaterialHrtnfSearch extends MaterialHrtnf
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_hrtnf_id', 'material_id', 'hrtnf_line', 'hrtnf_cnf', 'hrtnf_ncm', 'hrtnf_n_item', 'hrtnf_xinterger1', 'hrtnf_xinterger2', 'hrtnf_xinterger3'], 'integer'],
            [['hrtnf_nat_op', 'hrtnf_nf', 'hrtnf_cod_prod', 'hrtnf_u_com', 'hrtnf_u_trib', 'hrtnf_xprod', 'hrtnf_xdate1', 'hrtnf_xdate2', 'hrtnf_xdate3', 'hrtnf_xvarchar1', 'hrtnf_xvarchar2', 'hrtnf_xvarchar3'], 'safe'],
            [['hrtnf_q_com', 'hrtnf_v_un_com', 'hrtnf_tot_nf', 'hrtnf_base_cal', 'hrtnf_rate', 'hrtnf_icms'], 'number'],
            [['hrtnf_xboolean1', 'hrtnf_xboolean2', 'hrtnf_xboolean3'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MaterialHrtnf::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'material_hrtnf_id' => $this->material_hrtnf_id,
            'material_id' => $this->material_id,
            'hrtnf_line' => $this->hrtnf_line,
            'hrtnf_cnf' => $this->hrtnf_cnf,
            'hrtnf_ncm' => $this->hrtnf_ncm,
            'hrtnf_q_com' => $this->hrtnf_q_com,
            'hrtnf_v_un_com' => $this->hrtnf_v_un_com,
            'hrtnf_tot_nf' => $this->hrtnf_tot_nf,
            'hrtnf_base_cal' => $this->hrtnf_base_cal,
            'hrtnf_rate' => $this->hrtnf_rate,
            'hrtnf_icms' => $this->hrtnf_icms,
            'hrtnf_n_item' => $this->hrtnf_n_item,
            'hrtnf_xdate1' => $this->hrtnf_xdate1,
            'hrtnf_xdate2' => $this->hrtnf_xdate2,
            'hrtnf_xdate3' => $this->hrtnf_xdate3,
            'hrtnf_xboolean1' => $this->hrtnf_xboolean1,
            'hrtnf_xboolean2' => $this->hrtnf_xboolean2,
            'hrtnf_xboolean3' => $this->hrtnf_xboolean3,
            'hrtnf_xinterger1' => $this->hrtnf_xinterger1,
            'hrtnf_xinterger2' => $this->hrtnf_xinterger2,
            'hrtnf_xinterger3' => $this->hrtnf_xinterger3,
        ]);

        $query->andFilterWhere(['like', 'hrtnf_nat_op', $this->hrtnf_nat_op])
            ->andFilterWhere(['like', 'hrtnf_nf', $this->hrtnf_nf])
            ->andFilterWhere(['like', 'hrtnf_cod_prod', $this->hrtnf_cod_prod])
            ->andFilterWhere(['like', 'hrtnf_u_com', $this->hrtnf_u_com])
            ->andFilterWhere(['like', 'hrtnf_u_trib', $this->hrtnf_u_trib])
            ->andFilterWhere(['like', 'hrtnf_xprod', $this->hrtnf_xprod])
            ->andFilterWhere(['like', 'hrtnf_xvarchar1', $this->hrtnf_xvarchar1])
            ->andFilterWhere(['like', 'hrtnf_xvarchar2', $this->hrtnf_xvarchar2])
            ->andFilterWhere(['like', 'hrtnf_xvarchar3', $this->hrtnf_xvarchar3]);

        return $dataProvider;
    }
}
