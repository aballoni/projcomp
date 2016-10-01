<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MaterialCont;

/**
 * MaterialContSearch represents the model behind the search form about `app\models\MaterialCont`.
 */
class MaterialContSearch extends MaterialCont
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_cont_id', 'material_id', 'cont_line', 'cont_blueline', 'cont_or_qty', 'cont_phy_qty', 'cont_inv_qty', 'cont_xinterger1', 'cont_xinterger2', 'cont_xinterger3'], 'integer'],
            [['cont_list', 'cont_tag', 'cont_nf', 'cont_supl_icms_nf', 'cont_xdate1', 'cont_xdate2', 'cont_xdate3', 'cont_xvarchar1', 'cont_xvarchar2', 'cont_xvarchar3'], 'safe'],
            [['cont_or_aq_value', 'cont_or_book_value', 'cont_inv_value', 'cont_unit_price', 'cont_icms', 'cont_supl_icms', 'cont_value_inaccount'], 'number'],
            [['cont_xboolean1', 'cont_xboolean2', 'cont_xboolean3'], 'boolean'],
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
        $query = MaterialCont::find();

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
            'material_cont_id' => $this->material_cont_id,
            'material_id' => $this->material_id,
            'cont_line' => $this->cont_line,
            'cont_blueline' => $this->cont_blueline,
            'cont_or_qty' => $this->cont_or_qty,
            'cont_or_aq_value' => $this->cont_or_aq_value,
            'cont_or_book_value' => $this->cont_or_book_value,
            'cont_phy_qty' => $this->cont_phy_qty,
            'cont_inv_qty' => $this->cont_inv_qty,
            'cont_inv_value' => $this->cont_inv_value,
            'cont_unit_price' => $this->cont_unit_price,
            'cont_icms' => $this->cont_icms,
            'cont_supl_icms' => $this->cont_supl_icms,
            'cont_value_inaccount' => $this->cont_value_inaccount,
            'cont_xdate1' => $this->cont_xdate1,
            'cont_xdate2' => $this->cont_xdate2,
            'cont_xdate3' => $this->cont_xdate3,
            'cont_xboolean1' => $this->cont_xboolean1,
            'cont_xboolean2' => $this->cont_xboolean2,
            'cont_xboolean3' => $this->cont_xboolean3,
            'cont_xinterger1' => $this->cont_xinterger1,
            'cont_xinterger2' => $this->cont_xinterger2,
            'cont_xinterger3' => $this->cont_xinterger3,
        ]);

        $query->andFilterWhere(['like', 'cont_list', $this->cont_list])
            ->andFilterWhere(['like', 'cont_tag', $this->cont_tag])
            ->andFilterWhere(['like', 'cont_nf', $this->cont_nf])
            ->andFilterWhere(['like', 'cont_supl_icms_nf', $this->cont_supl_icms_nf])
            ->andFilterWhere(['like', 'cont_xvarchar1', $this->cont_xvarchar1])
            ->andFilterWhere(['like', 'cont_xvarchar2', $this->cont_xvarchar2])
            ->andFilterWhere(['like', 'cont_xvarchar3', $this->cont_xvarchar3]);

        return $dataProvider;
    }
}
