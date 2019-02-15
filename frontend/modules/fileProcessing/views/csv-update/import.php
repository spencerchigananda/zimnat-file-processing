<?php
/**
 * Created by PhpStorm.
 * User: Spencer
 * Date: 2/13/2019
 * Time: 8:39 AM
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\fileProcessing\models\CsvUpdate;

$this->title = 'Import Data from CSV';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-import">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <p class="text-center">
        Please fill out the form to import data in specified table in the drop down.
    </p>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <?php $form = ActiveForm::begin(['id' => 'import-data-form']); ?>

            <?= $form->field($model, 'id')->dropDownList(
                ArrayHelper::map(CsvUpdate::find()->all(), 'id', 'table_name'),
                ['prompt' => 'Select Table Name']
            ) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'import-data-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>