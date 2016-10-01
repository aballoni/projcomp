<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Userx;

/**
 * UserxSearch represents the model behind the search form about `app\models\Userx`.
 */
class UserxSearch extends Userx
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userx_id', 'dep_id', 'userx_xinterger1'], 'integer'],
            [['userx_description', 'userx_password', 'userx_remarks', 'userx_xvarchar1', 'userx_xdate1'], 'safe'],
            [['userx_xboolean1'], 'boolean'],
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
        $query = Userx::find();

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
            'userx_id' => $this->userx_id,
            'dep_id' => $this->dep_id,
            'userx_xdate1' => $this->userx_xdate1,
            'userx_xboolean1' => $this->userx_xboolean1,
            'userx_xinterger1' => $this->userx_xinterger1,
        ]);

        $query->andFilterWhere(['like', 'userx_description', $this->userx_description])
            ->andFilterWhere(['like', 'userx_password', $this->userx_password])
            ->andFilterWhere(['like', 'userx_remarks', $this->userx_remarks])
            ->andFilterWhere(['like', 'userx_xvarchar1', $this->userx_xvarchar1]);

        return $dataProvider;
    }
}
