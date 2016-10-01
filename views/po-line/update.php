<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PoLine */

$this->title = 'Update Po Line: ' . $model->po_line_id;
$this->params['breadcrumbs'][] = ['label' => 'Po Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->po_line_id, 'url' => ['view', 'po_line_id' => $model->po_line_id, 'po_id' => $model->po_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="po-line-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
