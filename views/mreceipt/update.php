<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mreceipt */

$this->title = 'Update Mreceipt: ' . $model->mreceipt_id;
$this->params['breadcrumbs'][] = ['label' => 'Mreceipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mreceipt_id, 'url' => ['view', 'id' => $model->mreceipt_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mreceipt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
