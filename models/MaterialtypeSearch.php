<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Materialtype;

/**
 * MaterialtypeSearch represents the model behind the search form about `app\models\Materialtype`.
 */
class MaterialtypeSearch extends Materialtype
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['materialtype_id', 'type_xinterger1'], 'integer'],
            [['type_description', 'type_xdate1', 'type_xvarchar1'], 'safe'],
            [['type_xboolean1'], 'boolean'],
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
        $query = Materialtype::find();

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
            'materialtype_id' => $this->materialtype_id,
            'type_xinterger1' => $this->type_xinterger1,
            'type_xdate1' => $this->type_xdate1,
            'type_xboolean1' => $this->type_xboolean1,
        ]);

        $query->andFilterWhere(['like', 'type_description', $this->type_description])
            ->andFilterWhere(['like', 'type_xvarchar1', $this->type_xvarchar1]);

        return $dataProvider;
    }
}
