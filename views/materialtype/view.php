<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Materialtype */

$this->title = $model->materialtype_id;
$this->params['breadcrumbs'][] = ['label' => 'Materialtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materialtype-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->materialtype_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->materialtype_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'materialtype_id',
            'type_description',
            'type_xinterger1',
            'type_xdate1',
            'type_xboolean1:boolean',
            'type_xvarchar1',
        ],
    ]) ?>

</div>
