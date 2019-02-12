<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\fileProcessing\models\IapRevenueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="iap-revenue-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'from_retail_data_and_internet_services') ?>

    <?= $form->field($model, 'from_wholesale_data') ?>

    <?= $form->field($model, 'from_voip') ?>

    <?php // echo $form->field($model, 'from_collocation_services') ?>

    <?php // echo $form->field($model, 'other_revenue') ?>

    <?php // echo $form->field($model, 'total_revenue') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
