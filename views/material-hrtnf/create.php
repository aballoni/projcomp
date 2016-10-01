<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MaterialHrtnf */

$this->title = 'Create Material Hrtnf';
$this->params['breadcrumbs'][] = ['label' => 'Material Hrtnfs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-hrtnf-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
