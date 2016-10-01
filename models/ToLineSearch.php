<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ToLine;

/**
 * ToLineSearch represents the model behind the search form about `app\models\ToLine`.
 */
class ToLineSearch extends ToLine
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['to_line_id', 'to_id', 'to_line_quantity', 'material_id', 'location_id', 'to_line_xinterger1', 'to_line_xinterger2', 'to_line_xinterger3', 'userx_id'], 'integer'],
            [['to_line_mat_manual_desc', 'to_line_invoice', 'to_line_reference', 'to_line_dimensions', 'to_line_xdate1', 'to_line_xdate2', 'to_line_xdate3', 'to_line_xvarchar1', 'to_line_xvarchar2', 'to_line_xvarchar3'], 'safe'],
            [['to_line_xboolean1', 'to_line_xboolean2', 'to_line_xboolean3', 'to_line_xboolean4', 'to_line_xboolean5'], 'boolean'],
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
        $query = ToLine::find();

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
            'to_line_id' => $this->to_line_id,
            'to_id' => $this->to_id,
            'to_line_quantity' => $this->to_line_quantity,
            'material_id' => $this->material_id,
            'location_id' => $this->location_id,
            'to_line_xdate1' => $this->to_line_xdate1,
            'to_line_xdate2' => $this->to_line_xdate2,
            'to_line_xdate3' => $this->to_line_xdate3,
            'to_line_xboolean1' => $this->to_line_xboolean1,
            'to_line_xboolean2' => $this->to_line_xboolean2,
            'to_line_xboolean3' => $this->to_line_xboolean3,
            'to_line_xboolean4' => $this->to_line_xboolean4,
            'to_line_xboolean5' => $this->to_line_xboolean5,
            'to_line_xinterger1' => $this->to_line_xinterger1,
            'to_line_xinterger2' => $this->to_line_xinterger2,
            'to_line_xinterger3' => $this->to_line_xinterger3,
            'userx_id' => $this->userx_id,
        ]);

        $query->andFilterWhere(['like', 'to_line_mat_manual_desc', $this->to_line_mat_manual_desc])
            ->andFilterWhere(['like', 'to_line_invoice', $this->to_line_invoice])
            ->andFilterWhere(['like', 'to_line_reference', $this->to_line_reference])
            ->andFilterWhere(['like', 'to_line_dimensions', $this->to_line_dimensions])
            ->andFilterWhere(['like', 'to_line_xvarchar1', $this->to_line_xvarchar1])
            ->andFilterWhere(['like', 'to_line_xvarchar2', $this->to_line_xvarchar2])
            ->andFilterWhere(['like', 'to_line_xvarchar3', $this->to_line_xvarchar3]);

        return $dataProvider;
    }
}
