<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matlist */

$this->title = 'Update Matlist: ' . $model->mat_list_id;
$this->params['breadcrumbs'][] = ['label' => 'Matlists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mat_list_id, 'url' => ['view', 'id' => $model->mat_list_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matlist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
