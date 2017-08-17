<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
?>
<div class="product-index">


    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!--    --><?//= $form->field($model, 'id') ?>
    <!---->
    <!--    --><?//= $form->field($model, 'category_id') ?>
    <!---->
    <!--    --><?//= $form->field($model, 'name') ?>
    <!---->
    <!--    --><?//= $form->field($model, 'content') ?>
    <!---->
    <!--    --><?//= $form->field($model, 'price') ?>
    <!---->
    <!--    --><?php // echo $form->field($model, 'keywords') ?>
    <!---->
    <!--    --><?php // echo $form->field($model, 'description') ?>
    <!---->
    <!--    --><?php // echo $form->field($model, 'img') ?>

<!--    --><?php // echo $form->field($searchModel, 'hit')->checkbox([ '0', '1', ]) ?>

<!--    --><?php // echo $form->field($searchModel, 'new')->checkbox([ '0', '1', ]) ?>

<!--    --><?php // echo $form->field($searchModel, 'sale')->checkbox([ '0', '1', ]) ?>

<!--    <div class="form-group">-->
<!--        --><?//= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
<!--        --><?//= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
<!--    </div>-->
<!---->
<!--    --><?php //ActiveForm::end(); ?>

<!--    --><?php //Pjax::begin(); ?>
<!--       --><?//= GridView::widget([
//        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
//           'layout'=>"{sorter}\n{pager}\n{summary}\n{items}",
//        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//
//            'id',
//            'category_id',
//            'name',
////            'content:ntext',
//            'price',
//             'keywords',
//             'description',
//             'img',
//             'hit',
//             'new',
//             'sale',
//
//            ['class' => 'yii\grid\ActionColumn'],
//        ],
//    ]); ?>
<!--    --><?php //Pjax::end(); ?>
   </div>

<div id="wb_content">
    <div id="content">
        <div class="row">
            <div class="col-1">
                <div id="wb_podf">
                    <div id="podf">
                        <div class="row">
                            <div class="col-1">
                                <div id="wb_Text2">
                                    <span id="wb_uid0"><strong>ФИЛЬТР ПОИСКА</strong></span>
                                </div>
                                <hr id="Line2">
                            </div>
                        </div>
                    </div>
                </div>

                <?php $form = ActiveForm::begin([
//                    'action' => ['index'],
//                    'method' => 'get',
                ]); ?>
                <div id="wb_LayoutGrid1">
                    <div id="LayoutGrid1">
                        <div class="row">
                            <div class="col-1">
<!--                                <input type="checkbox" id="Checkbox1" name="" value="on">-->
                                <?php  echo $form->field($searchModel, 'new')->checkbox([ '0', '1', 'class' => 'checkbox']) ?>
                            </div>
                            <div class="col-2">
                                <label for="productsearch-new" id="Label1">НОВИНКИ</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wb_LayoutGrid3">
                    <div id="LayoutGrid3">
                        <div class="row">
                            <div class="col-1">
<!--                                <input type="checkbox" id="Checkbox2" name="" value="on">-->
                                <?php  echo $form->field($searchModel, 'hit')->checkbox([ '0', '1', 'class' => 'checkbox']) ?>
                            </div>
                            <div class="col-2">
                                <label for="productsearch-hit" id="Label2">ХИТЫ</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wb_LayoutGrid2">
                    <div id="LayoutGrid2">
                        <div class="row">
                            <div class="col-1">
<!--                                <input type="checkbox" id="Checkbox3" name="" value="on">-->
                                    <?php  echo $form->field($searchModel, 'sale')->checkbox([ '0', '1', 'class' => 'checkbox']) ?>
                            </div>
                            <div class="col-2">
                                <label for="productsearch-sale" id="Label3">АКЦИЯ</label>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div id="wb_LayoutGrid4">-->
<!--                    <div id="LayoutGrid4">-->
<!--                        <div class="row">-->
<!--                            <div class="col-1">-->
<!--                                <input type="checkbox" id="Checkbox4" name="" value="on">-->
<!--                            </div>-->
<!--                            <div class="col-2">-->
<!--                                <label for="Checkbox4" id="Label4">НИШТЯКОВЫЕ</label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div id="wb_LayoutGrid9">-->
<!--                    <div id="LayoutGrid9">-->
<!--                        <div class="row">-->
<!--                            <div class="col-1">-->
<!--                                <input type="submit" id="Button_search2" name="" value="Найти">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
                <?php ActiveForm::end(); ?>

            </div>
            <div class="col-2">
                <div id="wb_LayoutGrid15">
                    <div id="LayoutGrid15">
                        <div class="row">
                            <div class="col-1">
                            </div>
                            <div class="col-2">
                                <div id="wb_Text1">
                                    <span id="wb_uid1">Сортировать по:</span>
                                </div>
                                <select name="Combobox1" size="1" id="Combobox1">
                                    <option>Цене (сначала дешевые)</option>
                                    <option>Цене (сначала дорогие)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wb_LayoutGrid14">
                    <div id="LayoutGrid14">
                        <div class="row">
                            <div class="col-1">
                                <div id="wb_Text16">
                                    <span id="wb_uid2"><strong>ПОПУЛЯРНЫЕ ТОВАРЫ</strong></span>
                                </div>
                                <hr id="Line10">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wb_LayoutGrid11">
                    <div id="LayoutGrid11">
                        <div class="row">

                            <?php $i = 0; $a = 0;
                            foreach ($dataProvider->getModels() as $product) : ?>

                                <div class="col-1">
                                    <?php if($product->new):  ?>
                                        <div class="podnew" style="position: absolute; width: 79px; height: 24px;">
                                            <?= Html::img("@web/images/new.png", ['alt' => 'Новинка', 'class'=>'new'])  ?></div>
                                    <?php endif;  ?>

                                    <?php if($product->sale):  ?>
                                        <div class="podnew" style="position: absolute; width: 79px; height: 24px;">
                                            <?= Html::img("@web/images/sale.png", ['alt' => 'Новинка', 'class'=>'new'])  ?></div>
                                    <?php endif;  ?>
                                    <div id="wb_Image1">
                                        <img src="/images/disk.jpg" id="Image1" alt="">
                                    </div>
                                    <div id="wb_Text8">
                                        <span id="wb_uid3"><strong><?= $product->price ?> РУБ.</strong></span>
                                    </div>
                                    <div id="wb_Text11">
                                        <span id="wb_uid4"><?= $product->name ?></span>
                                    </div>
                                    <div id="wb_FontAwesomeIcon6">
                                        <div id="FontAwesomeIcon6"><i class="fa fa-shopping-bag">&nbsp;</i></div>
                                    </div>
                                </div>
                                <?php $i++ ?>

                                <?php if ($i % 1 == 0): ?>


                                    <div class="line2" style="
                                    background-color: #A71F37;
                                    width: 1px;
                                    height: 200px;
                                    margin-top: 40px;
                                     position: static;
                                     float: left;">

                                    </div>

                                <?php endif; ?>
                                <?php if ($i % 3 == 0): ?>
                                    <div class="line3" style="background-color: #A71F37; width: 100%;
                            height: 1px; margin-top: 10px; position: static; float: left;"></div>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            <?php if(!$dataProvider->getModels()): ?>
                            <div id="wb_Text8">
                                        <span id="wb_uid3"><strong>Ничего не найдено</strong></span>
                                </div>

                            <?php endif; ?>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
