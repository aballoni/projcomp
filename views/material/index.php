<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use kartik\grid\DataColumn; 

/* @var $this yii\web\View */
/* @var $searchModel app\models\MaterialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-index">



    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Material', ['create'], ['class' => 'btn btn-success']) ?>

    </p>

<?= GridView::widget([
    'id' => 'kv-grid-demo',
    'dataProvider'=>$dataProvider,
    'filterModel'=>$searchModel,


    //--- tudo isso comentado

    //'columns'=>$gridColumns,
    //'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
    //'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    //'filterRowOptions'=>['class'=>'kartik-sheet-style'],
    //'rowOptions' => ['class' => GridView::TYPE_DEFAULT],
    //'pjax'=>true, // pjax is set to always true for this demo
    
    // set your toolbar
    // 'toolbar'=> [
    //     ['content'=>
    //         Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type'=>'button', 'title'=>Yii::t('kvgrid', 'Add Book'), 'class'=>'btn btn-success', 'onclick'=>'alert("This will launch the book creation form.\n\nDisabled for this demo!");']) . ' '.
    //         Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['grid-demo'], ['data-pjax'=>0, 'class'=>'btn btn-default', 'title'=>Yii::t('kvgrid', 'Reset Grid')])
    //     ],
    //     '{export}',
    //     '{toggleData}',
    // ],
    

    // set export properties

    //--- ate aqui

    

    'export'=>[
        'fontAwesome'=>true
    ],

    //--- tudo isso comentado


    // parameters from the demo form
    //'bordered'=>$bordered,
    //'striped'=>$striped,
    //'condensed'=>$condensed,
    //'responsive'=>$responsive,
    //'hover'=>$hover,
    //'showPageSummary'=>$pageSummary,

    //--- ate aqui


    'panel'=>[
        'type'=>GridView::TYPE_PRIMARY,
        //'heading'=>$heading,
    ],
    'persistResize'=>true,
    //'exportConfig'=>$exportConfig,



        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],


            //['class' => '\kartik\grid\DataColumn',
            //'attribute' => 'amount',
            //'pageSummary' => true
            //],

            'material_id'


            ,
            //'mat_identification',
            //'mat_description_pt',
            'mat_description_en',
            
            //'uom_id',
            'uom.uom_code:text:Uom',
            //'mat_list_id',
            'mat_vpn',
            'mat_manufacturer',
            // 'mat_mpn',
            // 'mat_sn',
            'materialtype.type_description:text:Type',
            // 'mat_bin',
            // 'mat_inventory_ref',
            // 'equip_id',
            // 'mat_dimenssion',
            // 'mat_unit_price',
            // 'mat_weight',
            // 'owner_id',
            // 'mat_picture',
            // 'mat_xdate1',
            // 'mat_xdate2',
            // 'mat_xdate3',
            // 'mat_xboolean1:boolean',
            // 'mat_xboolean2:boolean',
            // 'mat_xboolean3:boolean',
            // 'mat_xboolean4:boolean',
            // 'mat_xboolean5:boolean',
            // 'mat_xvarchar1',
            // 'mat_xvarchar2',
            // 'mat_xvarchar3',
            // 'mat_xinterger1',
            // 'mat_xinterger2',
            // 'mat_xinterger3',
            // 'vendor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
