<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Missue */

$this->title = 'Create Missue';
$this->params['breadcrumbs'][] = ['label' => 'Missues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="missue-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
