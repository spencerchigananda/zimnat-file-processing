<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fileProcessing\models\IapRevenueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'IAP Revenues';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iap-revenue-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create IAP Revenue', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'from_retail_data_and_internet_services',
            'from_wholesale_data',
            'from_voip',
            //'from_collocation_services',
            //'other_revenue',
            //'total_revenue',
            //'date_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
