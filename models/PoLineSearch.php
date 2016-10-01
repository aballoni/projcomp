<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PoLine;

/**
 * PoLineSearch represents the model behind the search form about `app\models\PoLine`.
 */
class PoLineSearch extends PoLine
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_line_id', 'po_id', 'mr_line_id', 'mr_id', 'userx_id', 'po_line_quantity', 'location_id', 'po_line_xinterger1', 'po_line_xinterger2', 'po_line_xinterger3'], 'integer'],
            [['po_line_date', 'po_line_xdate1', 'po_line_xdate2', 'po_line_xdate3', 'po_line_xvarchar1', 'po_line_xvarchar2', 'po_line_xvarchar3'], 'safe'],
            [['po_line_xboolean1', 'po_line_xboolean2', 'po_line_xboolean3', 'po_line_xboolean4', 'po_line_xboolean5'], 'boolean'],
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
        $query = PoLine::find();

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
            'po_line_id' => $this->po_line_id,
            'po_id' => $this->po_id,
            'mr_line_id' => $this->mr_line_id,
            'mr_id' => $this->mr_id,
            'userx_id' => $this->userx_id,
            'po_line_quantity' => $this->po_line_quantity,
            'po_line_date' => $this->po_line_date,
            'location_id' => $this->location_id,
            'po_line_xdate1' => $this->po_line_xdate1,
            'po_line_xdate2' => $this->po_line_xdate2,
            'po_line_xdate3' => $this->po_line_xdate3,
            'po_line_xboolean1' => $this->po_line_xboolean1,
            'po_line_xboolean2' => $this->po_line_xboolean2,
            'po_line_xboolean3' => $this->po_line_xboolean3,
            'po_line_xboolean4' => $this->po_line_xboolean4,
            'po_line_xboolean5' => $this->po_line_xboolean5,
            'po_line_xinterger1' => $this->po_line_xinterger1,
            'po_line_xinterger2' => $this->po_line_xinterger2,
            'po_line_xinterger3' => $this->po_line_xinterger3,
        ]);

        $query->andFilterWhere(['like', 'po_line_xvarchar1', $this->po_line_xvarchar1])
            ->andFilterWhere(['like', 'po_line_xvarchar2', $this->po_line_xvarchar2])
            ->andFilterWhere(['like', 'po_line_xvarchar3', $this->po_line_xvarchar3]);

        return $dataProvider;
    }
}
