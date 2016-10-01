<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MreceiptLine;

/**
 * MreceiptLineSearch represents the model behind the search form about `app\models\MreceiptLine`.
 */
class MreceiptLineSearch extends MreceiptLine
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mreceipt_line_id', 'mreceipt_id', 'po_line_id', 'po_id', 'userx_id', 'mreceipt_line_quantity', 'mreceipt_line_invoice', 'location_id', 'mreceipt_line_xinterger1', 'mreceipt_line_xinterger2', 'mreceipt_line_xinterger3'], 'integer'],
            [['mreceipt_line_date', 'mreceipt_line_xdate1', 'mreceipt_line_xdate2', 'mreceipt_line_xdate3', 'mreceipt_line_xvarchar1', 'mreceipt_line_xvarchar2', 'mreceipt_line_xvarchar3'], 'safe'],
            [['mreceipt_line_xboolean1', 'mreceipt_line_xboolean2', 'mreceipt_line_xboolean3', 'mreceipt_line_xboolean4', 'mreceipt_line_xboolean5'], 'boolean'],
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
        $query = MreceiptLine::find();

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
            'mreceipt_line_id' => $this->mreceipt_line_id,
            'mreceipt_id' => $this->mreceipt_id,
            'po_line_id' => $this->po_line_id,
            'po_id' => $this->po_id,
            'userx_id' => $this->userx_id,
            'mreceipt_line_quantity' => $this->mreceipt_line_quantity,
            'mreceipt_line_invoice' => $this->mreceipt_line_invoice,
            'mreceipt_line_date' => $this->mreceipt_line_date,
            'location_id' => $this->location_id,
            'mreceipt_line_xdate1' => $this->mreceipt_line_xdate1,
            'mreceipt_line_xdate2' => $this->mreceipt_line_xdate2,
            'mreceipt_line_xdate3' => $this->mreceipt_line_xdate3,
            'mreceipt_line_xboolean1' => $this->mreceipt_line_xboolean1,
            'mreceipt_line_xboolean2' => $this->mreceipt_line_xboolean2,
            'mreceipt_line_xboolean3' => $this->mreceipt_line_xboolean3,
            'mreceipt_line_xboolean4' => $this->mreceipt_line_xboolean4,
            'mreceipt_line_xboolean5' => $this->mreceipt_line_xboolean5,
            'mreceipt_line_xinterger1' => $this->mreceipt_line_xinterger1,
            'mreceipt_line_xinterger2' => $this->mreceipt_line_xinterger2,
            'mreceipt_line_xinterger3' => $this->mreceipt_line_xinterger3,
        ]);

        $query->andFilterWhere(['like', 'mreceipt_line_xvarchar1', $this->mreceipt_line_xvarchar1])
            ->andFilterWhere(['like', 'mreceipt_line_xvarchar2', $this->mreceipt_line_xvarchar2])
            ->andFilterWhere(['like', 'mreceipt_line_xvarchar3', $this->mreceipt_line_xvarchar3]);

        return $dataProvider;
    }
}
