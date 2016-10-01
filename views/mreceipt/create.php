<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mreceipt */

$this->title = 'Create Mreceipt';
$this->params['breadcrumbs'][] = ['label' => 'Mreceipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mreceipt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
