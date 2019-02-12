<?php

namespace app\modules\fileProcessing\models;

use Yii;

/**
 * This is the model class for table "csv_update".
 *
 * @property int $id
 * @property string $table_name
 * @property string $date_updated
 */
class CsvUpdate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'csv_update';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['table_name', 'date_updated'], 'required'],
            [['date_updated'], 'safe'],
            [['table_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'table_name' => 'Table Name',
            'date_updated' => 'Date Updated',
        ];
    }
}
