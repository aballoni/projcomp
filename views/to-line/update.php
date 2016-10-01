<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ToLine */

$this->title = 'Update To Line: ' . $model->to_line_id;
$this->params['breadcrumbs'][] = ['label' => 'To Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->to_line_id, 'url' => ['view', 'to_line_id' => $model->to_line_id, 'to_id' => $model->to_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="to-line-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
