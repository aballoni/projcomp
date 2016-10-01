<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vmatstock */

$this->title = 'Update Vmatstock: ' . $model->material_id;
$this->params['breadcrumbs'][] = ['label' => 'Vmatstocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->material_id, 'url' => ['view', 'id' => $model->material_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vmatstock-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
