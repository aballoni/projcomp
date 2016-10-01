<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Owner;

/**
 * OwnerSearch represents the model behind the search form about `app\models\Owner`.
 */
class OwnerSearch extends Owner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['owner_id', 'owner_xinterger1'], 'integer'],
            [['owner_description', 'owner_xdate1', 'owner_xvarchar1'], 'safe'],
            [['owner_xboolean1'], 'boolean'],
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
        $query = Owner::find();

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
            'owner_id' => $this->owner_id,
            'owner_xdate1' => $this->owner_xdate1,
            'owner_xboolean1' => $this->owner_xboolean1,
            'owner_xinterger1' => $this->owner_xinterger1,
        ]);

        $query->andFilterWhere(['like', 'owner_description', $this->owner_description])
            ->andFilterWhere(['like', 'owner_xvarchar1', $this->owner_xvarchar1]);

        return $dataProvider;
    }
}
