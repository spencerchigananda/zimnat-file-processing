<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fileProcessing\models\MnoInvestment */

$this->title = 'Update MNO Investment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'MNO Investments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mno-investment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
