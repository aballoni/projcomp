<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Matlist */

$this->title = 'Create Matlist';
$this->params['breadcrumbs'][] = ['label' => 'Matlists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matlist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
