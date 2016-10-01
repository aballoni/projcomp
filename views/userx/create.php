<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Userx */

$this->title = 'Create Userx';
$this->params['breadcrumbs'][] = ['label' => 'Userxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userx-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
