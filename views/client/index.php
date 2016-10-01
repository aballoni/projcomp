<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Client', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'client_id',
            'client_description',
            'client_remarks',
            //'dep_id',
            'dep.dep_description:text:Department',
            //'client_xinterger1',
            // 'client_xboolean1:boolean',
            // 'client_xdate1',
            // 'client_xvarchar1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
