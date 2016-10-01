<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vmatstock;

/**
 * VmatstockSearch represents the model behind the search form about `app\models\Vmatstock`.
 */
class VmatstockSearch extends Vmatstock
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_id', 'stock_quantity1'], 'integer'],
            [['mat_description_en', 'mat_manufacturer', 'mat_mpn', 'mat_sn', 'mat_inventory_ref', 'uom_code', 'mat_list_description', 'type_description', 'equip_description', 'owner_description', 'vendor_description', 'location_description'], 'safe'],
            [['stock_value1', 'stock_value2'], 'number'],
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
        $query = Vmatstock::find();

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
            'stock_quantity1' => $this->stock_quantity1,
            'stock_value1' => $this->stock_value1,
            'stock_value2' => $this->stock_value2,
        ]);

        $query->andFilterWhere(['like', 'mat_description_en', $this->mat_description_en])
            ->andFilterWhere(['like', 'mat_manufacturer', $this->mat_manufacturer])
            ->andFilterWhere(['like', 'mat_mpn', $this->mat_mpn])
            ->andFilterWhere(['like', 'mat_sn', $this->mat_sn])
            ->andFilterWhere(['like', 'mat_inventory_ref', $this->mat_inventory_ref])
            ->andFilterWhere(['like', 'uom_code', $this->uom_code])
            ->andFilterWhere(['like', 'mat_list_description', $this->mat_list_description])
            ->andFilterWhere(['like', 'type_description', $this->type_description])
            ->andFilterWhere(['like', 'equip_description', $this->equip_description])
            ->andFilterWhere(['like', 'owner_description', $this->owner_description])
            ->andFilterWhere(['like', 'vendor_description', $this->vendor_description])
            ->andFilterWhere(['like', 'location_description', $this->location_description]);

        return $dataProvider;
    }
}
