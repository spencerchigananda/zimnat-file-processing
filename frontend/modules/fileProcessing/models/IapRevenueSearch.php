<?php

namespace app\modules\fileProcessing\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\fileProcessing\models\IapRevenue;

/**
 * IapRevenueSearch represents the model behind the search form of `app\modules\fileProcessing\models\IapRevenue`.
 */
class IapRevenueSearch extends IapRevenue
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['date', 'date_created'], 'safe'],
            [['from_retail_data_and_internet_services', 'from_wholesale_data', 'from_voip', 'from_collocation_services', 'other_revenue', 'total_revenue'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = IapRevenue::find();

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
            'id' => $this->id,
            'from_retail_data_and_internet_services' => $this->from_retail_data_and_internet_services,
            'from_wholesale_data' => $this->from_wholesale_data,
            'from_voip' => $this->from_voip,
            'from_collocation_services' => $this->from_collocation_services,
            'other_revenue' => $this->other_revenue,
            'total_revenue' => $this->total_revenue,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['ilike', 'date', $this->date]);

        return $dataProvider;
    }
}
