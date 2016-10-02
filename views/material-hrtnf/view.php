<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialHrtnf */

$this->title = $model->material_hrtnf_id;
$this->params['breadcrumbs'][] = ['label' => 'Material Hrtnfs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-hrtnf-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->material_hrtnf_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->material_hrtnf_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'material_hrtnf_id',
            'material_id',
            'hrtnf_xprod',
            'hrtnf_line',
            'hrtnf_cnf',
            'hrtnf_nat_op',
            'hrtnf_nf',
            'hrtnf_cod_prod',
            'hrtnf_ncm',
            'hrtnf_u_com',
            'hrtnf_q_com',
            'hrtnf_v_un_com',
            'hrtnf_tot_nf',
            'hrtnf_u_trib',
            'hrtnf_base_cal',
            'hrtnf_rate',
            'hrtnf_icms',
            'hrtnf_n_item',
            
/*            'hrtnf_xdate1',
            'hrtnf_xdate2',
            'hrtnf_xdate3',
            'hrtnf_xboolean1:boolean',
            'hrtnf_xboolean2:boolean',
            'hrtnf_xboolean3:boolean',
            'hrtnf_xvarchar1',
            'hrtnf_xvarchar2',
            'hrtnf_xvarchar3',
            'hrtnf_xinterger1',
            'hrtnf_xinterger2',
            'hrtnf_xinterger3',*/
        ],
    ]) ?>

</div>
