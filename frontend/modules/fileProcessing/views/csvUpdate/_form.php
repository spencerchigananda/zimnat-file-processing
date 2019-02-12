<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\fileProcessing\models\CsvUpdate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="csv-update-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'table_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
