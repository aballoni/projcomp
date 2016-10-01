<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MissueLine */

$this->title = 'Update Missue Line: ' . $model->missue_line_id;
$this->params['breadcrumbs'][] = ['label' => 'Missue Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->missue_line_id, 'url' => ['view', 'missue_line_id' => $model->missue_line_id, 'missue_id' => $model->missue_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="missue-line-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
