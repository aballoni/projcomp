<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userx */

$this->title = 'Update Userx: ' . $model->userx_id;
$this->params['breadcrumbs'][] = ['label' => 'Userxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userx_id, 'url' => ['view', 'id' => $model->userx_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userx-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
