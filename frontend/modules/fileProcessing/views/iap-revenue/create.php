<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fileProcessing\models\IapRevenue */

$this->title = 'Create IAP Revenue';
$this->params['breadcrumbs'][] = ['label' => 'IAP Revenues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iap-revenue-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
