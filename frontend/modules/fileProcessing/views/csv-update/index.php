<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fileProcessing\models\CsvUpdateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CSV Updates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="csv-update-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create CSV Update', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <p style="float: right; ">
        <?= Html::a('Import CSV Data', ['import'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'table_name',
            'date_updated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
