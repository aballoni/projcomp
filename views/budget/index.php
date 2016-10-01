<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BudgetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Budgets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="budget-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Budget', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'budget_id',
            'budget_description',
            'budget_remarks',
            //'dep_id',
            'dep.dep_description:text:Department',
            //'budget_xvarchar1',
            // 'budget_xdate1',
            // 'budget_xboolean1:boolean',
            // 'budget_interger1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
