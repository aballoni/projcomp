<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MissueLine */

$this->title = 'Create Missue Line';
$this->params['breadcrumbs'][] = ['label' => 'Missue Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="missue-line-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
