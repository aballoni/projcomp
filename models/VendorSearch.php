<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vendor;

/**
 * VendorSearch represents the model behind the search form about `app\models\Vendor`.
 */
class VendorSearch extends Vendor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_id', 'vendor_xinterger1'], 'integer'],
            [['vendor_description', 'vendor_remarks', 'vendor_xvarchar1', 'vendor_xdate1'], 'safe'],
            [['vendor_xboolean1'], 'boolean'],
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
        $query = Vendor::find();

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
            'vendor_id' => $this->vendor_id,
            'vendor_xdate1' => $this->vendor_xdate1,
            'vendor_xboolean1' => $this->vendor_xboolean1,
            'vendor_xinterger1' => $this->vendor_xinterger1,
        ]);

        $query->andFilterWhere(['like', 'vendor_description', $this->vendor_description])
            ->andFilterWhere(['like', 'vendor_remarks', $this->vendor_remarks])
            ->andFilterWhere(['like', 'vendor_xvarchar1', $this->vendor_xvarchar1]);

        return $dataProvider;
    }
}
