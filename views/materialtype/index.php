<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MaterialtypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materialtypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materialtype-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Materialtype', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'materialtype_id',
            'type_description',
            //'type_xinterger1',
            //'type_xdate1',
            //'type_xboolean1:boolean',
            // 'type_xvarchar1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
