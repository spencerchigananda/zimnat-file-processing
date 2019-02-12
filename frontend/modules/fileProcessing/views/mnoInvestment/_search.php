<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\fileProcessing\models\MnoInvestmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mno-investment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'switching_national') ?>

    <?= $form->field($model, 'switching_international') ?>

    <?= $form->field($model, 'transmission_national') ?>

    <?php // echo $form->field($model, 'transmission_international') ?>

    <?php // echo $form->field($model, 'land_and_buildings') ?>

    <?php // echo $form->field($model, 'motor_vehicles') ?>

    <?php // echo $form->field($model, 'computer_hardware_and_software') ?>

    <?php // echo $form->field($model, 'other_investments') ?>

    <?php // echo $form->field($model, 'total_capital_expenditure') ?>

    <?php // echo $form->field($model, 'disposal_of_fixed_assets') ?>

    <?php // echo $form->field($model, 'disposal_of_intangible_fixed_assets') ?>

    <?php // echo $form->field($model, 'net_investment') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
