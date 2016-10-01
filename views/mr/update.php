<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mr */

$this->title = 'Update Mr: ' . $model->mr_id;
$this->params['breadcrumbs'][] = ['label' => 'Mrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mr_id, 'url' => ['view', 'id' => $model->mr_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
