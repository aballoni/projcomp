<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DepSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dep-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dep', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'dep_id',
            'dep_description',
            'dep_remarks',
/*            'dep_xdate1',
            'dep_xboolean1:boolean',*/
            // 'dep_xinterger1',
            // 'dep_xvarchar1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
