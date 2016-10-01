<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialHrtnf */

$this->title = 'Update Material Hrtnf: ' . $model->material_hrtnf_id;
$this->params['breadcrumbs'][] = ['label' => 'Material Hrtnfs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->material_hrtnf_id, 'url' => ['view', 'id' => $model->material_hrtnf_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="material-hrtnf-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
