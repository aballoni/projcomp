<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Uom;

/**
 * UomSearch represents the model behind the search form about `app\models\Uom`.
 */
class UomSearch extends Uom
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uom_id', 'uom_interger1'], 'integer'],
            [['uom_code', 'uom_description', 'uom_xdate1', 'uom_xvarchar1'], 'safe'],
            [['uom_xboolean1'], 'boolean'],
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
        $query = Uom::find();

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
            'uom_id' => $this->uom_id,
            'uom_xdate1' => $this->uom_xdate1,
            'uom_xboolean1' => $this->uom_xboolean1,
            'uom_interger1' => $this->uom_interger1,
        ]);

        $query->andFilterWhere(['like', 'uom_code', $this->uom_code])
            ->andFilterWhere(['like', 'uom_description', $this->uom_description])
            ->andFilterWhere(['like', 'uom_xvarchar1', $this->uom_xvarchar1]);

        return $dataProvider;
    }
}
