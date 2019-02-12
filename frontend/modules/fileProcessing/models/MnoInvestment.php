<?php

namespace app\modules\fileProcessing\models;

use Yii;

/**
 * This is the model class for table "mno_investment".
 *
 * @property int $id
 * @property string $date
 * @property int $switching_national
 * @property int $switching_international
 * @property int $transmission_national
 * @property int $transmission_international
 * @property string $land_and_buildings
 * @property string $motor_vehicles
 * @property string $computer_hardware_and_software
 * @property string $other_investments
 * @property string $total_capital_expenditure
 * @property string $disposal_of_fixed_assets
 * @property string $disposal_of_intangible_fixed_assets
 * @property string $net_investment
 * @property string $date_created
 */
class MnoInvestment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mno_investment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'switching_national', 'switching_international', 'transmission_national', 'transmission_international', 'land_and_buildings', 'motor_vehicles', 'computer_hardware_and_software', 'other_investments', 'total_capital_expenditure', 'disposal_of_fixed_assets', 'disposal_of_intangible_fixed_assets', 'net_investment', 'date_created'], 'required'],
            [['switching_national', 'switching_international', 'transmission_national', 'transmission_international'], 'default', 'value' => null],
            [['switching_national', 'switching_international', 'transmission_national', 'transmission_international'], 'integer'],
            [['land_and_buildings', 'motor_vehicles', 'computer_hardware_and_software', 'other_investments', 'total_capital_expenditure', 'disposal_of_fixed_assets', 'disposal_of_intangible_fixed_assets', 'net_investment'], 'number'],
            [['date_created'], 'safe'],
            [['date'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'switching_national' => 'Switching National',
            'switching_international' => 'Switching International',
            'transmission_national' => 'Transmission National',
            'transmission_international' => 'Transmission International',
            'land_and_buildings' => 'Land And Buildings',
            'motor_vehicles' => 'Motor Vehicles',
            'computer_hardware_and_software' => 'Computer Hardware And Software',
            'other_investments' => 'Other Investments',
            'total_capital_expenditure' => 'Total Capital Expenditure',
            'disposal_of_fixed_assets' => 'Disposal Of Fixed Assets',
            'disposal_of_intangible_fixed_assets' => 'Disposal Of Intangible Fixed Assets',
            'net_investment' => 'Net Investment',
            'date_created' => 'Date Created',
        ];
    }
}
