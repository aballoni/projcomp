<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MrLine */

$this->title = 'Update Mr Line: ' . $model->mr_line_id;
$this->params['breadcrumbs'][] = ['label' => 'Mr Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mr_line_id, 'url' => ['view', 'mr_line_id' => $model->mr_line_id, 'mr_id' => $model->mr_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mr-line-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
