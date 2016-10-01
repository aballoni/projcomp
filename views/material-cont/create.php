<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MaterialCont */

$this->title = 'Create Material Cont';
$this->params['breadcrumbs'][] = ['label' => 'Material Conts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-cont-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
