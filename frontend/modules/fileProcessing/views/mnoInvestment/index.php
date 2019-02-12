<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fileProcessing\models\MnoInvestmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mno Investments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mno-investment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mno Investment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'switching_national',
            'switching_international',
            'transmission_national',
            //'transmission_international',
            //'land_and_buildings',
            //'motor_vehicles',
            //'computer_hardware_and_software',
            //'other_investments',
            //'total_capital_expenditure',
            //'disposal_of_fixed_assets',
            //'disposal_of_intangible_fixed_assets',
            //'net_investment',
            //'date_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
