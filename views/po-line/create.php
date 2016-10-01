<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PoLine */

$this->title = 'Create Po Line';
$this->params['breadcrumbs'][] = ['label' => 'Po Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="po-line-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
