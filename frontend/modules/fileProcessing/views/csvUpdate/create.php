<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fileProcessing\models\CsvUpdate */

$this->title = 'Create Csv Update';
$this->params['breadcrumbs'][] = ['label' => 'Csv Updates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="csv-update-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
