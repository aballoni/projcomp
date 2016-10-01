<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Torder */

$this->title = 'Update Torder: ' . $model->to_id;
$this->params['breadcrumbs'][] = ['label' => 'Torders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->to_id, 'url' => ['view', 'id' => $model->to_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="torder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
