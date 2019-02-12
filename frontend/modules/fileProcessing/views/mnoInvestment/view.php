<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\fileProcessing\models\MnoInvestment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mno Investments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mno-investment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date',
            'switching_national',
            'switching_international',
            'transmission_national',
            'transmission_international',
            'land_and_buildings',
            'motor_vehicles',
            'computer_hardware_and_software',
            'other_investments',
            'total_capital_expenditure',
            'disposal_of_fixed_assets',
            'disposal_of_intangible_fixed_assets',
            'net_investment',
            'date_created',
        ],
    ]) ?>

</div>
