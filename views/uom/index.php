<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uoms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uom-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Uom', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uom_id',
            'uom_code',
            'uom_description',
            //'uom_xdate1',
            //'uom_xboolean1:boolean',
            // 'uom_interger1',
            // 'uom_xvarchar1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
