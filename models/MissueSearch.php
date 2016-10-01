<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Missue;

/**
 * MissueSearch represents the model behind the search form about `app\models\Missue`.
 */
class MissueSearch extends Missue
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['missue_id', 'missue_xinterger1', 'missue_xinterger2', 'missue_xinterger3'], 'integer'],
            [['missue_remarks', 'missue_date', 'missue_xdate1', 'missue_xdate2', 'missue_xdate3', 'missue_xvarchar1', 'missue_xvarchar2', 'missue_xvarchar3'], 'safe'],
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
        $query = Missue::find();

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
            'missue_id' => $this->missue_id,
            'missue_date' => $this->missue_date,
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
        ]);

        $query->andFilterWhere(['like', 'missue_remarks', $this->missue_remarks])
            ->andFilterWhere(['like', 'missue_xvarchar1', $this->missue_xvarchar1])
            ->andFilterWhere(['like', 'missue_xvarchar2', $this->missue_xvarchar2])
            ->andFilterWhere(['like', 'missue_xvarchar3', $this->missue_xvarchar3]);

        return $dataProvider;
    }
}
