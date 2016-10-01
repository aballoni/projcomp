<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MrLine;

/**
 * MrLineSearch represents the model behind the search form about `app\models\MrLine`.
 */
class MrLineSearch extends MrLine
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mr_line_id', 'mr_id', 'material_id', 'userx_id', 'client_id', 'budget_id', 'cost_center_id', 'mr_line_quantity', 'location_id', 'mr_line_xinterger1', 'mr_line_xinterger2', 'mr_line_xinterger3'], 'integer'],
            [['mr_line_mat_manual_desc', 'mr_line_date', 'mr_line_xdate1', 'mr_line_xdate2', 'mr_line_xdate3', 'mr_line_xvarchar1', 'mr_line_xvarchar2', 'mr_line_xvarchar3'], 'safe'],
            [['mr_line_xboolean1', 'mr_line_xboolean2', 'mr_line_xboolean3', 'mr_line_xboolean4', 'mr_line_xboolean5'], 'boolean'],
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
        $query = MrLine::find();

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
            'mr_line_id' => $this->mr_line_id,
            'mr_id' => $this->mr_id,
            'material_id' => $this->material_id,
            'userx_id' => $this->userx_id,
            'client_id' => $this->client_id,
            'budget_id' => $this->budget_id,
            'cost_center_id' => $this->cost_center_id,
            'mr_line_quantity' => $this->mr_line_quantity,
            'mr_line_date' => $this->mr_line_date,
            'location_id' => $this->location_id,
            'mr_line_xdate1' => $this->mr_line_xdate1,
            'mr_line_xdate2' => $this->mr_line_xdate2,
            'mr_line_xdate3' => $this->mr_line_xdate3,
            'mr_line_xboolean1' => $this->mr_line_xboolean1,
            'mr_line_xboolean2' => $this->mr_line_xboolean2,
            'mr_line_xboolean3' => $this->mr_line_xboolean3,
            'mr_line_xboolean4' => $this->mr_line_xboolean4,
            'mr_line_xboolean5' => $this->mr_line_xboolean5,
            'mr_line_xinterger1' => $this->mr_line_xinterger1,
            'mr_line_xinterger2' => $this->mr_line_xinterger2,
            'mr_line_xinterger3' => $this->mr_line_xinterger3,
        ]);

        $query->andFilterWhere(['like', 'mr_line_mat_manual_desc', $this->mr_line_mat_manual_desc])
            ->andFilterWhere(['like', 'mr_line_xvarchar1', $this->mr_line_xvarchar1])
            ->andFilterWhere(['like', 'mr_line_xvarchar2', $this->mr_line_xvarchar2])
            ->andFilterWhere(['like', 'mr_line_xvarchar3', $this->mr_line_xvarchar3]);

        return $dataProvider;
    }
}
