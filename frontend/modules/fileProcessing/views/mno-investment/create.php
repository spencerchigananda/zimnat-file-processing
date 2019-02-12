<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fileProcessing\models\MnoInvestment */

$this->title = 'Create MNO Investment';
$this->params['breadcrumbs'][] = ['label' => 'MNO Investments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mno-investment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
