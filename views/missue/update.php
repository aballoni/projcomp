<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Missue */

$this->title = 'Update Missue: ' . $model->missue_id;
$this->params['breadcrumbs'][] = ['label' => 'Missues', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->missue_id, 'url' => ['view', 'id' => $model->missue_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="missue-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
