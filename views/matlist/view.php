<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Matlist */

$this->title = $model->mat_list_id;
$this->params['breadcrumbs'][] = ['label' => 'Matlists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matlist-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->mat_list_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->mat_list_id], [
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
            'mat_list_id',
            'mat_list_description',
            'mat_list_xinterger1',
            'mat_list_xdate1',
            'mat_list_xboolean1:boolean',
            'mat_list_xvarchar1',
        ],
    ]) ?>

</div>
