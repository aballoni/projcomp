<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MissueLine;

/**
 * MissueLineSearch represents the model behind the search form about `app\models\MissueLine`.
 */
class MissueLineSearch extends MissueLine
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['missue_line_id', 'missue_id', 'material_id', 'missue_quantity', 'location_id', 'missue_xinterger1', 'missue_xinterger2', 'missue_xinterger3', 'userx_id', 'client_id'], 'integer'],
            [['missue_mat_manual_desc', 'missue_invoice', 'missue_xdate1', 'missue_xdate2', 'missue_xdate3', 'missue_xvarchar1', 'missue_xvarchar2', 'missue_xvarchar3'], 'safe'],
            [['missue_xboolean1', 'missue_xboolean2', 'missue_xboolean3', 'missue_xboolean4', 'missue_xboolean5'], 'boolean'],
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
        $query = MissueLine::find();

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
            'missue_line_id' => $this->missue_line_id,
            'missue_id' => $this->missue_id,
            'material_id' => $this->material_id,
            'missue_quantity' => $this->missue_quantity,
            'location_id' => $this->location_id,
            'missue_xdate1' => $this->missue_xdate1,
            'missue_xdate2' => $this->missue_xdate2,
            'missue_xdate3' => $this->missue_xdate3,
            'missue_xboolean1' => $this->missue_xboolean1,
            'missue_xboolean2' => $this->missue_xboolean2,
            'missue_xboolean3' => $this->missue_xboolean3,
            'missue_xboolean4' => $this->missue_xboolean4,
            'missue_xboolean5' => $this->missue_xboolean5,
            'missue_xinterger1' => $this->missue_xinterger1,
            'missue_xinterger2' => $this->missue_xinterger2,
            'missue_xinterger3' => $this->missue_xinterger3,
            'userx_id' => $this->userx_id,
            'client_id' => $this->client_id,
        ]);

        $query->andFilterWhere(['like', 'missue_mat_manual_desc', $this->missue_mat_manual_desc])
            ->andFilterWhere(['like', 'missue_invoice', $this->missue_invoice])
            ->andFilterWhere(['like', 'missue_xvarchar1', $this->missue_xvarchar1])
            ->andFilterWhere(['like', 'missue_xvarchar2', $this->missue_xvarchar2])
            ->andFilterWhere(['like', 'missue_xvarchar3', $this->missue_xvarchar3]);

        return $dataProvider;
    }
}
