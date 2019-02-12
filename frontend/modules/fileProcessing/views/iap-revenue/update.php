<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fileProcessing\models\IapRevenue */

$this->title = 'Update Iap Revenue: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Iap Revenues', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="iap-revenue-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
