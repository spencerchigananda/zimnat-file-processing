<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\fileProcessing\models\MnoInvestment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mno-investment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'switching_national')->textInput() ?>

    <?= $form->field($model, 'switching_international')->textInput() ?>

    <?= $form->field($model, 'transmission_national')->textInput() ?>

    <?= $form->field($model, 'transmission_international')->textInput() ?>

    <?= $form->field($model, 'land_and_buildings')->textInput() ?>

    <?= $form->field($model, 'motor_vehicles')->textInput() ?>

    <?= $form->field($model, 'computer_hardware_and_software')->textInput() ?>

    <?= $form->field($model, 'other_investments')->textInput() ?>

    <?= $form->field($model, 'total_capital_expenditure')->textInput() ?>

    <?= $form->field($model, 'disposal_of_fixed_assets')->textInput() ?>

    <?= $form->field($model, 'disposal_of_intangible_fixed_assets')->textInput() ?>

    <?= $form->field($model, 'net_investment')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
