<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Matlist;

/**
 * MatlistSearch represents the model behind the search form about `app\models\Matlist`.
 */
class MatlistSearch extends Matlist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mat_list_id', 'mat_list_xinterger1'], 'integer'],
            [['mat_list_description', 'mat_list_xdate1', 'mat_list_xvarchar1'], 'safe'],
            [['mat_list_xboolean1'], 'boolean'],
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
        $query = Matlist::find();

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
            'mat_list_id' => $this->mat_list_id,
            'mat_list_xinterger1' => $this->mat_list_xinterger1,
            'mat_list_xdate1' => $this->mat_list_xdate1,
            'mat_list_xboolean1' => $this->mat_list_xboolean1,
        ]);

        $query->andFilterWhere(['like', 'mat_list_description', $this->mat_list_description])
            ->andFilterWhere(['like', 'mat_list_xvarchar1', $this->mat_list_xvarchar1]);

        return $dataProvider;
    }
}
