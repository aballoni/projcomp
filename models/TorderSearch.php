<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Torder;

/**
 * TorderSearch represents the model behind the search form about `app\models\Torder`.
 */
class TorderSearch extends Torder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['to_id', 'to_transporter', 'to_xinterger1', 'xinterger2', 'xinterger3'], 'integer'],
            [['to_cm_identification', 'to_from', 'to_to', 'to_expeditor', 'to_expeditor_phone', 'to_receiver', 'to_receiver_phone', 'to_date_expedite', 'to_date_eta', 'to_modal', 'to_vessel_name', 'to_tug_name', 'to_truck_plate', 'to_remarks', 'to_xdate1', 'to_xdate2', 'to_xdate3', 'to_xvarchar1', 'to_xvarchar2', 'to_xvarchar3'], 'safe'],
            [['to_xboolean1', 'to_xboolean2', 'to_xboolean3', 'to_xboolean4', 'to_xboolean5'], 'boolean'],
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
        $query = Torder::find();

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
            'to_id' => $this->to_id,
            'to_date_expedite' => $this->to_date_expedite,
            'to_date_eta' => $this->to_date_eta,
            'to_transporter' => $this->to_transporter,
            'to_xdate1' => $this->to_xdate1,
            'to_xdate2' => $this->to_xdate2,
            'to_xdate3' => $this->to_xdate3,
            'to_xboolean1' => $this->to_xboolean1,
            'to_xboolean2' => $this->to_xboolean2,
            'to_xboolean3' => $this->to_xboolean3,
            'to_xboolean4' => $this->to_xboolean4,
            'to_xboolean5' => $this->to_xboolean5,
            'to_xinterger1' => $this->to_xinterger1,
            'xinterger2' => $this->xinterger2,
            'xinterger3' => $this->xinterger3,
        ]);

        $query->andFilterWhere(['like', 'to_cm_identification', $this->to_cm_identification])
            ->andFilterWhere(['like', 'to_from', $this->to_from])
            ->andFilterWhere(['like', 'to_to', $this->to_to])
            ->andFilterWhere(['like', 'to_expeditor', $this->to_expeditor])
            ->andFilterWhere(['like', 'to_expeditor_phone', $this->to_expeditor_phone])
            ->andFilterWhere(['like', 'to_receiver', $this->to_receiver])
            ->andFilterWhere(['like', 'to_receiver_phone', $this->to_receiver_phone])
            ->andFilterWhere(['like', 'to_modal', $this->to_modal])
            ->andFilterWhere(['like', 'to_vessel_name', $this->to_vessel_name])
            ->andFilterWhere(['like', 'to_tug_name', $this->to_tug_name])
            ->andFilterWhere(['like', 'to_truck_plate', $this->to_truck_plate])
            ->andFilterWhere(['like', 'to_remarks', $this->to_remarks])
            ->andFilterWhere(['like', 'to_xvarchar1', $this->to_xvarchar1])
            ->andFilterWhere(['like', 'to_xvarchar2', $this->to_xvarchar2])
            ->andFilterWhere(['like', 'to_xvarchar3', $this->to_xvarchar3]);

        return $dataProvider;
    }
}
