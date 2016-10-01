<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Equip */

$this->title = 'Update Equip: ' . $model->equip_id;
$this->params['breadcrumbs'][] = ['label' => 'Equips', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->equip_id, 'url' => ['view', 'id' => $model->equip_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="equip-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
