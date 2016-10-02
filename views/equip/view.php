<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Equip */

$this->title = $model->equip_id;
$this->params['breadcrumbs'][] = ['label' => 'Equips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equip-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->equip_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->equip_id], [
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
            'equip_id',
            'equip_description',
/*            'equip_xdate1',
            'equip_xboolean1:boolean',
            'equip_xinterger1',
            'equip_xvarchar1',*/
        ],
    ]) ?>

</div>
