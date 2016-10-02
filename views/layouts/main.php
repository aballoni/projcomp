<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php


    NavBar::begin([
        'brandLabel' => 'ROSNEFT',
        'options' => ['class' => 'navbar navbar-default navbar-fixed-top ',],
    ]);
    ?>

    <div class="dropdown" style="position:absolute; left: 250px; top:9px">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Material
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?= Url::to(['material/index']) ?>">Material</a></li>
            <li><a href="<?= Url::to(['material/create']) ?>">New Material</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['material-cont/index']) ?>">Material Joint Property</a></li>
            <li><a href="<?= Url::to(['material-cont/create']) ?>">New Material Joint Property</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['materialtype/index']) ?>">Material Type</a></li>
            <li><a href="<?= Url::to(['materialtype/create']) ?>">New Material Type</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['equip/index']) ?>">Equip</a></li>
            <li><a href="<?= Url::to(['equip/create']) ?>">New Equip</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['matlist/index']) ?>">MatList</a></li>
            <li><a href="<?= Url::to(['matlist/create']) ?>">New MatList</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['uom/index']) ?>">UOM</a></li>
            <li><a href="<?= Url::to(['uom/create']) ?>">New UOM</a></li>
        </ul>
    </div>

    <div class="dropdown" style="position:absolute; left: 350px; top:9px;">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style= "width: 100px";>
            Location
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?= Url::to(['stock/index']) ?>">Stock</a></li>
            <li><a href="<?= Url::to(['stock/create']) ?>">New Stock</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['location/index']) ?>">Location</a></li>
            <li><a href="<?= Url::to(['location/create']) ?>">New Location</a></li>
        
        </ul>            
    </div>

    <div class="dropdown" style="position:absolute; left: 450px; top:9px;">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style= "width: 100px";>
            Proc
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?= Url::to(['mr/index']) ?>">PR</a></li>
            <li><a href="<?= Url::to(['mr/create']) ?>">New PR</a></li>
            <li><a href="<?= Url::to(['mr-line/index']) ?>">PR Line</a></li>
            <li><a href="<?= Url::to(['mr-line/create']) ?>">New PR Line</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['po/index']) ?>">PO</a></li>
            <li><a href="<?= Url::to(['po/create']) ?>">New PO</a></li>
            <li><a href="<?= Url::to(['po-line/index']) ?>">PO Line</a></li>
            <li><a href="<?= Url::to(['po-line/create']) ?>">New PO Line</a></li>
        
        </ul>            
    </div>

    <div class="dropdown" style="position:absolute; left: 550px; top:9px;">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style= "width: 100px";>
            Trans IN
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?= Url::to(['mreceipt/index']) ?>">MRR</a></li>
            <li><a href="<?= Url::to(['mreceipt/create']) ?>">New MRR</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['mreceipt-line/index']) ?>">MRR Line</a></li>
            <li><a href="<?= Url::to(['mreceipt-line/create']) ?>">New MRR Line</a></li>
            <li role="separator" class="divider"></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['material-hrtnf/index']) ?>">Invoice</a></li>
            <li><a href="<?= Url::to(['material-hrtnf/create']) ?>">New Invoice</a></li>        
        </ul>            
    </div>

    <div class="dropdown" style="position:absolute; left: 650px; top:9px;">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style= "width: 100px";>
            Trans OUT
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?= Url::to(['missue/index']) ?>">Material Issue Slip</a></li>
            <li><a href="<?= Url::to(['missue/create']) ?>">New Material Issue Slip</a></li>
            <li><a href="<?= Url::to(['missue-line/index']) ?>">Material Issue Line</a></li>
            <li><a href="<?= Url::to(['missue-line/create']) ?>">New Material Issue Line</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['torder/index']) ?>">CM</a></li>
            <li><a href="<?= Url::to(['torder/create']) ?>">New CM</a></li>
            <li><a href="<?= Url::to(['to-line/index']) ?>">CM Line</a></li>
            <li><a href="<?= Url::to(['to-line/create']) ?>">New CM Line</a></li>
        </ul>            
    </div>

    <div class="dropdown" style="position:absolute; left: 750px; top:9px;">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style= "width: 100px";>
            Entities
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?= Url::to(['client/index']) ?>">Internal Client</a></li>
            <li><a href="<?= Url::to(['client/create']) ?>">New Internal Client</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['dep/index']) ?>">Dep</a></li>
            <li><a href="<?= Url::to(['dep/create']) ?>">New Dep</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['owner/index']) ?>">Owner</a></li>
            <li><a href="<?= Url::to(['owner/create']) ?>">New Owner</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['userx/index']) ?>">User</a></li>
            <li><a href="<?= Url::to(['userx/create']) ?>">New User</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['vendor/index']) ?>">Vendor</a></li>
            <li><a href="<?= Url::to(['vendor/create']) ?>">New Vendor</a></li>
        </ul>            
    </div>

    <div class="dropdown" style="position:absolute; left: 850px; top:9px;">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style= "width: 100px";>
            Finacial
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?= Url::to(['budget/index']) ?>">Budget</a></li>
            <li><a href="<?= Url::to(['budget/create']) ?>">New Budget</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= Url::to(['cost-center/index']) ?>">CostCenter</a></li>
            <li><a href="<?= Url::to(['cost-center/create']) ?>">New CostCenter</a></li>        
        </ul>            
    </div>









    <?php
    /*
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);*/

    NavBar::end();
    ?>
    
         <div class="container", >
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>

</div>
  

<footer class="footer">
    <div class="container">
        <p class="pull-left"> ROSNEFT <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
