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


    <div class="dropdown dropdown-menu-right" style="padding-top:7px;">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Administrator
            <span class="caret"></span>
        </button>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li class="dropdown-header">MATERIAL</li>
            <li><a href="<?= Url::to(['material/index']) ?>">Index</a></li>
            <li><a href="<?= Url::to(['material/create']) ?>">Create</a></li>
            <li role="separator" class="divider"></li>

            <li class="dropdown-header">Equipment</li>
            <li><a href="<?= Url::to(['equip/index']) ?>">Index</a></li>
            <li><a href="<?= Url::to(['equip/create']) ?>">Create</a></li>
            <li role="separator" class="divider"></li>

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
