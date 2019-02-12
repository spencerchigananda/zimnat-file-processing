<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\fileProcessing\models\IapRevenue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="iap-revenue-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'from_retail_data_and_internet_services')->textInput() ?>

    <?= $form->field($model, 'from_wholesale_data')->textInput() ?>

    <?= $form->field($model, 'from_voip')->textInput() ?>

    <?= $form->field($model, 'from_collocation_services')->textInput() ?>

    <?= $form->field($model, 'other_revenue')->textInput() ?>

    <?= $form->field($model, 'total_revenue')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
