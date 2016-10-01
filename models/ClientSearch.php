<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Client;

/**
 * ClientSearch represents the model behind the search form about `app\models\Client`.
 */
class ClientSearch extends Client
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_id', 'dep_id', 'client_xinterger1'], 'integer'],
            [['client_description', 'client_remarks', 'client_xdate1', 'client_xvarchar1'], 'safe'],
            [['client_xboolean1'], 'boolean'],
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
        $query = Client::find();

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
            'client_id' => $this->client_id,
            'dep_id' => $this->dep_id,
            'client_xinterger1' => $this->client_xinterger1,
            'client_xboolean1' => $this->client_xboolean1,
            'client_xdate1' => $this->client_xdate1,
        ]);

        $query->andFilterWhere(['like', 'client_description', $this->client_description])
            ->andFilterWhere(['like', 'client_remarks', $this->client_remarks])
            ->andFilterWhere(['like', 'client_xvarchar1', $this->client_xvarchar1]);

        return $dataProvider;
    }
}
