<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialCont */

$this->title = 'Update Material Cont: ' . $model->material_cont_id;
$this->params['breadcrumbs'][] = ['label' => 'Material Conts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->material_cont_id, 'url' => ['view', 'id' => $model->material_cont_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="material-cont-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
