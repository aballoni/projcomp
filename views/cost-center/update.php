<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CostCenter */

$this->title = 'Update Cost Center: ' . $model->cost_center_id;
$this->params['breadcrumbs'][] = ['label' => 'Cost Centers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cost_center_id, 'url' => ['view', 'id' => $model->cost_center_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cost-center-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
