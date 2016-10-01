<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MrLine */

$this->title = 'Create Mr Line';
$this->params['breadcrumbs'][] = ['label' => 'Mr Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mr-line-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
