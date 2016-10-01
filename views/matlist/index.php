<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MatlistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matlists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matlist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Matlist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mat_list_id',
            'mat_list_description',
            'mat_list_xinterger1',
            'mat_list_xdate1',
            'mat_list_xboolean1:boolean',
            // 'mat_list_xvarchar1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
