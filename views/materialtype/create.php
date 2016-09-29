<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Materialtype */

$this->title = 'Create Materialtype';
$this->params['breadcrumbs'][] = ['label' => 'Materialtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materialtype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
