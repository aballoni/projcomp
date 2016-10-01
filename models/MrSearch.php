<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mr;

/**
 * MrSearch represents the model behind the search form about `app\models\Mr`.
 */
class MrSearch extends Mr
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mr_id', 'mr_xinterger1', 'mr_xinterger2', 'mr_xinterger3'], 'integer'],
            [['mr_identification', 'mr_tabdate', 'mr_date_needed', 'mr_manager', 'mr_reason', 'mr_remarks', 'mr_indicacao_fornecedores', 'mr_xdate1', 'mr_xdate2', 'mr_xdate3', 'mr_xvarchar1', 'mr_xvarchar2', 'mr_xvarchar3'], 'safe'],
            [['mr_material_service', 'mr_xboolean1', 'mr_xboolean2', 'mr_xboolean3', 'mr_xboolean4', 'mr_xboolean5'], 'boolean'],
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
        $query = Mr::find();

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
            'mr_id' => $this->mr_id,
            'mr_tabdate' => $this->mr_tabdate,
            'mr_date_needed' => $this->mr_date_needed,
            'mr_material_service' => $this->mr_material_service,
            'mr_xdate1' => $this->mr_xdate1,
            'mr_xdate2' => $this->mr_xdate2,
            'mr_xdate3' => $this->mr_xdate3,
            'mr_xboolean1' => $this->mr_xboolean1,
            'mr_xboolean2' => $this->mr_xboolean2,
            'mr_xboolean3' => $this->mr_xboolean3,
            'mr_xboolean4' => $this->mr_xboolean4,
            'mr_xboolean5' => $this->mr_xboolean5,
            'mr_xinterger1' => $this->mr_xinterger1,
            'mr_xinterger2' => $this->mr_xinterger2,
            'mr_xinterger3' => $this->mr_xinterger3,
        ]);

        $query->andFilterWhere(['like', 'mr_identification', $this->mr_identification])
            ->andFilterWhere(['like', 'mr_manager', $this->mr_manager])
            ->andFilterWhere(['like', 'mr_reason', $this->mr_reason])
            ->andFilterWhere(['like', 'mr_remarks', $this->mr_remarks])
            ->andFilterWhere(['like', 'mr_indicacao_fornecedores', $this->mr_indicacao_fornecedores])
            ->andFilterWhere(['like', 'mr_xvarchar1', $this->mr_xvarchar1])
            ->andFilterWhere(['like', 'mr_xvarchar2', $this->mr_xvarchar2])
            ->andFilterWhere(['like', 'mr_xvarchar3', $this->mr_xvarchar3]);

        return $dataProvider;
    }
}
