<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vmatstock */

$this->title = 'Create Vmatstock';
$this->params['breadcrumbs'][] = ['label' => 'Vmatstocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vmatstock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
