<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Userx */

$this->title = $model->userx_id;
$this->params['breadcrumbs'][] = ['label' => 'Userxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userx-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->userx_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->userx_id], [
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
            'userx_id',
            'userx_description',
            'userx_password',
            'userx_remarks',
            'dep_id',
            'userx_xvarchar1',
            'userx_xdate1',
            'userx_xboolean1:boolean',
            'userx_xinterger1',
        ],
    ]) ?>

</div>
