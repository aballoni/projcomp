<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Materialtype */

$this->title = 'Update Materialtype: ' . $model->materialtype_id;
$this->params['breadcrumbs'][] = ['label' => 'Materialtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->materialtype_id, 'url' => ['view', 'id' => $model->materialtype_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="materialtype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
