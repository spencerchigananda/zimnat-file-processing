<?php

namespace app\modules\fileProcessing\models;

use Yii;

/**
 * This is the model class for table "iap_revenue".
 *
 * @property int $id
 * @property string $date
 * @property string $from_retail_data_and_internet_services
 * @property string $from_wholesale_data
 * @property string $from_voip
 * @property string $from_collocation_services
 * @property string $other_revenue
 * @property string $total_revenue
 * @property string $date_created
 */
class IapRevenue extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'iap_revenue';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'from_retail_data_and_internet_services', 'from_wholesale_data', 'from_voip', 'from_collocation_services', 'other_revenue', 'total_revenue', 'date_created'], 'required'],
            [['from_retail_data_and_internet_services', 'from_wholesale_data', 'from_voip', 'from_collocation_services', 'other_revenue', 'total_revenue'], 'number'],
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
            'from_retail_data_and_internet_services' => 'From Retail Data And Internet Services',
            'from_wholesale_data' => 'From Wholesale Data',
            'from_voip' => 'From Voip',
            'from_collocation_services' => 'From Collocation Services',
            'other_revenue' => 'Other Revenue',
            'total_revenue' => 'Total Revenue',
            'date_created' => 'Date Created',
        ];
    }
}
