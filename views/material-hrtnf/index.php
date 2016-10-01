<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MaterialHrtnfSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Material Hrtnfs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-hrtnf-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Material Hrtnf', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'material_hrtnf_id',
            'material_id',
            'hrtnf_line',
            'hrtnf_cnf',
            'hrtnf_nat_op',
            // 'hrtnf_nf',
            // 'hrtnf_cod_prod',
            // 'hrtnf_ncm',
            // 'hrtnf_u_com',
            // 'hrtnf_q_com',
            // 'hrtnf_v_un_com',
            // 'hrtnf_tot_nf',
            // 'hrtnf_u_trib',
            // 'hrtnf_base_cal',
            // 'hrtnf_rate',
            // 'hrtnf_icms',
            // 'hrtnf_n_item',
            // 'hrtnf_xprod',
            // 'hrtnf_xdate1',
            // 'hrtnf_xdate2',
            // 'hrtnf_xdate3',
            // 'hrtnf_xboolean1:boolean',
            // 'hrtnf_xboolean2:boolean',
            // 'hrtnf_xboolean3:boolean',
            // 'hrtnf_xvarchar1',
            // 'hrtnf_xvarchar2',
            // 'hrtnf_xvarchar3',
            // 'hrtnf_xinterger1',
            // 'hrtnf_xinterger2',
            // 'hrtnf_xinterger3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
