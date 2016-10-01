<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MreceiptLine */

$this->title = 'Update Mreceipt Line: ' . $model->mreceipt_line_id;
$this->params['breadcrumbs'][] = ['label' => 'Mreceipt Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mreceipt_line_id, 'url' => ['view', 'mreceipt_line_id' => $model->mreceipt_line_id, 'mreceipt_id' => $model->mreceipt_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mreceipt-line-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
