<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mreceipt;

/**
 * MreceiptSearch represents the model behind the search form about `app\models\Mreceipt`.
 */
class MreceiptSearch extends Mreceipt
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mreceipt_id', 'mreceipt_xinterger1', 'mreceipt_xinterger2', 'mreceipt_xinterger3'], 'integer'],
            [['mreceipt_identification', 'mreceipt_remarks', 'mreceipt_date', 'mreceipt_xdate1', 'mreceipt_xdate2', 'mreceipt_xdate3', 'mreceipt_xvarchar1', 'mreceipt_xvarchar2', 'mreceipt_xvarchar3'], 'safe'],
            [['mreceipt_xboolean1', 'mreceipt_xboolean2', 'mreceipt_xboolean3', 'mreceipt_xboolean4', 'mreceipt_xboolean5'], 'boolean'],
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
        $query = Mreceipt::find();

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
            'mreceipt_id' => $this->mreceipt_id,
            'mreceipt_date' => $this->mreceipt_date,
            'mreceipt_xdate1' => $this->mreceipt_xdate1,
            'mreceipt_xdate2' => $this->mreceipt_xdate2,
            'mreceipt_xdate3' => $this->mreceipt_xdate3,
            'mreceipt_xboolean1' => $this->mreceipt_xboolean1,
            'mreceipt_xboolean2' => $this->mreceipt_xboolean2,
            'mreceipt_xboolean3' => $this->mreceipt_xboolean3,
            'mreceipt_xboolean4' => $this->mreceipt_xboolean4,
            'mreceipt_xboolean5' => $this->mreceipt_xboolean5,
            'mreceipt_xinterger1' => $this->mreceipt_xinterger1,
            'mreceipt_xinterger2' => $this->mreceipt_xinterger2,
            'mreceipt_xinterger3' => $this->mreceipt_xinterger3,
        ]);

        $query->andFilterWhere(['like', 'mreceipt_identification', $this->mreceipt_identification])
            ->andFilterWhere(['like', 'mreceipt_remarks', $this->mreceipt_remarks])
            ->andFilterWhere(['like', 'mreceipt_xvarchar1', $this->mreceipt_xvarchar1])
            ->andFilterWhere(['like', 'mreceipt_xvarchar2', $this->mreceipt_xvarchar2])
            ->andFilterWhere(['like', 'mreceipt_xvarchar3', $this->mreceipt_xvarchar3]);

        return $dataProvider;
    }
}
