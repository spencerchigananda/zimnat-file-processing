<?php

namespace app\modules\fileProcessing\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\fileProcessing\models\MnoInvestment;

/**
 * MnoInvestmentSearch represents the model behind the search form of `app\modules\fileProcessing\models\MnoInvestment`.
 */
class MnoInvestmentSearch extends MnoInvestment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'switching_national', 'switching_international', 'transmission_national', 'transmission_international'], 'integer'],
            [['date', 'date_created'], 'safe'],
            [['land_and_buildings', 'motor_vehicles', 'computer_hardware_and_software', 'other_investments', 'total_capital_expenditure', 'disposal_of_fixed_assets', 'disposal_of_intangible_fixed_assets', 'net_investment'], 'number'],
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
        $query = MnoInvestment::find();

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
            'switching_national' => $this->switching_national,
            'switching_international' => $this->switching_international,
            'transmission_national' => $this->transmission_national,
            'transmission_international' => $this->transmission_international,
            'land_and_buildings' => $this->land_and_buildings,
            'motor_vehicles' => $this->motor_vehicles,
            'computer_hardware_and_software' => $this->computer_hardware_and_software,
            'other_investments' => $this->other_investments,
            'total_capital_expenditure' => $this->total_capital_expenditure,
            'disposal_of_fixed_assets' => $this->disposal_of_fixed_assets,
            'disposal_of_intangible_fixed_assets' => $this->disposal_of_intangible_fixed_assets,
            'net_investment' => $this->net_investment,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['ilike', 'date', $this->date]);

        return $dataProvider;
    }
}
