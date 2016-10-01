<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CostCenter */

$this->title = 'Create Cost Center';
$this->params['breadcrumbs'][] = ['label' => 'Cost Centers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cost-center-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
