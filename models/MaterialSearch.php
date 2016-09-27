<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Material;

/**
 * MaterialSearch represents the model behind the search form about `app\models\Material`.
 */
class MaterialSearch extends Material
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_id', 'mat_identification', 'uom_id', 'mat_list_id', 'materialtype_id', 'equip_id', 'mat_weight', 'owner_id', 'mat_xinterger1', 'mat_xinterger2', 'mat_xinterger3', 'vendor_id'], 'integer'],
            [['mat_description_pt', 'mat_description_en', 'mat_vpn', 'mat_manufacturer', 'mat_mpn', 'mat_sn', 'mat_bin', 'mat_inventory_ref', 'mat_dimenssion', 'mat_picture', 'mat_xdate1', 'mat_xdate2', 'mat_xdate3', 'mat_xvarchar1', 'mat_xvarchar2', 'mat_xvarchar3'], 'safe'],
            [['mat_unit_price'], 'number'],
            [['mat_xboolean1', 'mat_xboolean2', 'mat_xboolean3', 'mat_xboolean4', 'mat_xboolean5'], 'boolean'],
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
        $query = Material::find();

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
            'material_id' => $this->material_id,
            'mat_identification' => $this->mat_identification,
            'uom_id' => $this->uom_id,
            'mat_list_id' => $this->mat_list_id,
            'materialtype_id' => $this->materialtype_id,
            'equip_id' => $this->equip_id,
            'mat_unit_price' => $this->mat_unit_price,
            'mat_weight' => $this->mat_weight,
            'owner_id' => $this->owner_id,
            'mat_xdate1' => $this->mat_xdate1,
            'mat_xdate2' => $this->mat_xdate2,
            'mat_xdate3' => $this->mat_xdate3,
            'mat_xboolean1' => $this->mat_xboolean1,
            'mat_xboolean2' => $this->mat_xboolean2,
            'mat_xboolean3' => $this->mat_xboolean3,
            'mat_xboolean4' => $this->mat_xboolean4,
            'mat_xboolean5' => $this->mat_xboolean5,
            'mat_xinterger1' => $this->mat_xinterger1,
            'mat_xinterger2' => $this->mat_xinterger2,
            'mat_xinterger3' => $this->mat_xinterger3,
            'vendor_id' => $this->vendor_id,
        ]);

        $query->andFilterWhere(['like', 'mat_description_pt', $this->mat_description_pt])
            ->andFilterWhere(['like', 'mat_description_en', $this->mat_description_en])
            ->andFilterWhere(['like', 'mat_vpn', $this->mat_vpn])
            ->andFilterWhere(['like', 'mat_manufacturer', $this->mat_manufacturer])
            ->andFilterWhere(['like', 'mat_mpn', $this->mat_mpn])
            ->andFilterWhere(['like', 'mat_sn', $this->mat_sn])
            ->andFilterWhere(['like', 'mat_bin', $this->mat_bin])
            ->andFilterWhere(['like', 'mat_inventory_ref', $this->mat_inventory_ref])
            ->andFilterWhere(['like', 'mat_dimenssion', $this->mat_dimenssion])
            ->andFilterWhere(['like', 'mat_picture', $this->mat_picture])
            ->andFilterWhere(['like', 'mat_xvarchar1', $this->mat_xvarchar1])
            ->andFilterWhere(['like', 'mat_xvarchar2', $this->mat_xvarchar2])
            ->andFilterWhere(['like', 'mat_xvarchar3', $this->mat_xvarchar3]);

        return $dataProvider;
    }
}
