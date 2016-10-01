<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mr-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mr_id',
            'mr_identification',
            'mr_tabdate',
            'mr_date_needed',
            'mr_manager',
            // 'mr_material_service:boolean',
            // 'mr_reason',
            // 'mr_remarks',
            // 'mr_indicacao_fornecedores',
            // 'mr_xdate1',
            // 'mr_xdate2',
            // 'mr_xdate3',
            // 'mr_xboolean1:boolean',
            // 'mr_xboolean2:boolean',
            // 'mr_xboolean3:boolean',
            // 'mr_xboolean4:boolean',
            // 'mr_xboolean5:boolean',
            // 'mr_xvarchar1',
            // 'mr_xvarchar2',
            // 'mr_xvarchar3',
            // 'mr_xinterger1',
            // 'mr_xinterger2',
            // 'mr_xinterger3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
