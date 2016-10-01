<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ToLine */

$this->title = 'Create To Line';
$this->params['breadcrumbs'][] = ['label' => 'To Lines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="to-line-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
