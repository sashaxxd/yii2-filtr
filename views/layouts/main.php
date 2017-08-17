<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<html>
<head>
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
<body>
<?php $this->beginBody() ?>
<div id="wb_container_head1">
    <div id="container_head1">
        <div class="row">
            <div class="col-1">
            </div>
        </div>
    </div>
</div>
<div id="wb_container_head2">
    <div id="container_head2">
        <div class="row">
            <div class="col-1">
                <input type="text" id="Editbox1" name="Editbox1" value="" placeholder="&#1055;&#1054;&#1048;&#1057;&#1050;">
            </div>
            <div class="col-2">
                <input type="submit" id="Button_search1" name="" value="Найти">
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
</div>
<div id="wb_container_head3">
    <div id="container_head3">
        <div class="row">
            <div class="col-1">
            </div>
        </div>
    </div>
</div>
<div id="wb_podmen">
    <div id="podmen">
        <div class="row">
            <div class="col-1">
                <div id="wb_Menu">
                    <label class="toggle" for="Menu-submenu" id="Menu-title">МЕНЮ<span id="Menu-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                    <input type="checkbox" id="Menu-submenu">
                    <ul class="Menu" id="Menu">
                        <li><a href="#">&#1043;&#1051;&#1040;&#1042;&#1053;&#1040;&#1071;</a></li>
                        <li><a href="#">&#1054;&nbsp;&#1052;&#1040;&#1043;&#1040;&#1047;&#1048;&#1053;&#1045;</a></li>
                        <li><a href="#">&#1050;&#1054;&#1053;&#1058;&#1040;&#1050;&#1058;&#1067;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $content ?>
<div id="wb_footer1">
    <div id="footer1">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
            </div>
            <div class="col-3">
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>
</div>
<div id="wb_footer2">
    <div id="footer2">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text15">
                    <span id="wb_uid9"><strong>Copyright © 2017. Все права защищены. </strong><br></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Модальное окно -->
<?php
\yii\bootstrap\Modal::begin([
    'header' => '<div class="cartmod"><h2>Корзина</h2></div>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '<button type="button" id="Button_cart" class="btn" data-dismiss="modal">Продолжить покупки</button>
        <a href="' . \yii\helpers\Url::to(['cart/view']) . '" id="Button_cart" class="btn">Оформить заказ</a>
        <button type="button" id="Button_cart" class="btn" onclick="clearCart()">Очистить корзину</button>'
]);

\yii\bootstrap\Modal::end();
?>
<!-- /Модальное окно -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>