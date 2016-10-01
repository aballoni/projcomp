<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserxSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userxes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userx-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Userx', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userx_id',
            'userx_description',
            'userx_password',
            'userx_remarks',
            'dep_id',
            // 'userx_xvarchar1',
            // 'userx_xdate1',
            // 'userx_xboolean1:boolean',
            // 'userx_xinterger1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
