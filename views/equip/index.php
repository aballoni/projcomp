<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EquipSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equip-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Equip', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'equip_id',
            'equip_description',
            'equip_xdate1',
            'equip_xboolean1:boolean',
            'equip_xinterger1',
            // 'equip_xvarchar1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
