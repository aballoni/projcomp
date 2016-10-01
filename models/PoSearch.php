<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Po;

/**
 * PoSearch represents the model behind the search form about `app\models\Po`.
 */
class PoSearch extends Po
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_id', 'po_xinterger1', 'po_xinterger2', 'po_xinterger3'], 'integer'],
            [['po_code', 'po_date', 'po_xdate1', 'po_xdate2', 'po_xdate3', 'po_xvarchar1', 'po_xvarchar2', 'po_xvarchar3'], 'safe'],
            [['po_xboolean1', 'po_xboolean2', 'po_xboolean3', 'po_xboolean4', 'po_xboolean5'], 'boolean'],
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
        $query = Po::find();

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
            'po_id' => $this->po_id,
            'po_date' => $this->po_date,
            'po_xdate1' => $this->po_xdate1,
            'po_xdate2' => $this->po_xdate2,
            'po_xdate3' => $this->po_xdate3,
            'po_xboolean1' => $this->po_xboolean1,
            'po_xboolean2' => $this->po_xboolean2,
            'po_xboolean3' => $this->po_xboolean3,
            'po_xboolean4' => $this->po_xboolean4,
            'po_xboolean5' => $this->po_xboolean5,
            'po_xinterger1' => $this->po_xinterger1,
            'po_xinterger2' => $this->po_xinterger2,
            'po_xinterger3' => $this->po_xinterger3,
        ]);

        $query->andFilterWhere(['like', 'po_code', $this->po_code])
            ->andFilterWhere(['like', 'po_xvarchar1', $this->po_xvarchar1])
            ->andFilterWhere(['like', 'po_xvarchar2', $this->po_xvarchar2])
            ->andFilterWhere(['like', 'po_xvarchar3', $this->po_xvarchar3]);

        return $dataProvider;
    }
}
