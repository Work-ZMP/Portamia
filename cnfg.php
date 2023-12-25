<?php
/*
Template Name: Configurator

*/
?>

<?php

if (isset($_GET['door_cfg'])) {

    //$door_cfg = json_decode($_GET['door_cfg'], true);

    $door_cfg = $_GET;
} else {

    $_GET = array(
        'model' => 1,
        'leaf' => 'single',
        'leafdooritems_single' => 'slditem1',
        'outdoorstyles' => 'classic',
        'metalcolin' => 'btncol1',
        'metalcolout' => 'btncolout1',
        'doorcolout' => 'btndoorcolout1',
        'indoorstylesmilled' => '1',
        'classicmilled' => '1',
        'typemilledoutclassic' => 'btn-milled-classic1',
        'locknumber' => 'lockbtn1',
        'lockitems' => 'cfg-lock-item1',
        'furniturecol' => 'furn-col-1',
        'furnituretype' => 'furn-item-1',
        'hinges' => 'furn-hinges-item1',
        'furnituredoorsteptype' => 'doorstep-item1',
        'furnitem_size' => 'size-item3-step_6',
        'furnitem_side' => 'side-item1-step_6',
        'furnitem_met' => 'met-item1-step_6',
    );

    $door_cfg = $_GET;
}

//print '<pre>';
//print_r($door_cfg);
//print '</pre>';

?>

<?php get_header('light'); ?>

<body>
    <div class="width-wrapper height-wrapper configurator-styles without-padding cfg-container">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <div class="gridContainer content">
            <div class="cfg-body">
                <div id="cfg-options" class="cfg-options">
                    <div class="step" id="step__0" btn="">
                        <h1 style="text-align: left;">Модель двери</h1>
                        <div class="cfg-model-wrapper">
                            <div data-variable-name="model" data-variable-value="1" data-model="1" data-price="69400" data-image="" data-order="1" class="cfg-model<?= (isset($_GET['model']) and $_GET['model'] == '1') ? ' active' : '' ?>" id="cfg-secondmodel" onclick='cfgDoorModel1()'>
                                <div class="cfg-model-inner">
                                    <i class="info-btn">i</i>
                                    <div class="cfg-model-name">
                                        <div class="cfg-model-naming">
                                            <p class="cfg-model-title">
                                                Portamia MW
                                            </p> <span class="cfg-model-cost">
                                                от 79 400 ₽
                                            </span>
                                        </div>
                                        <div class="cfg-tooltip cfg-tooltip">
                                            металл/панель
                                        </div>
                                    </div>
                                    <div class="cfg-model-info-wrapper">
                                        <div class="cfg-model-info">
                                            <div class="info info-depth"><span class="info-value">
                                                    1.5
                                                </span>
                                                <p class="info-title">
                                                    Толщина стали
                                                </p>
                                                <div class="info-descr">
                                                    мм
                                                </div>
                                            </div>
                                            <div class="info info-soundproofing"><span class="info-value">
                                                    32
                                                </span>
                                                <p class="info-title">
                                                    Шумоизоляция
                                                </p>
                                                <div class="info-descr">
                                                    дБ
                                                </div>
                                            </div>
                                            <div class="info info-rating"><span class="info-value">
                                                    81
                                                </span>
                                                <p class="info-title">Рейтинг безоп-сти</p>
                                                <div class="info-descr">
                                                    из <br> 100
                                                </div>
                                            </div>
                                            <div class="info info-lock"><span class="info-value"><span class="country country-tr"></span></span>
                                                <p class="info-title">Замковая база</p>
                                                <div class="info-descr">
                                                    Тур.
                                                </div>
                                            </div>
                                            <div class="info info-guaranty"><span class="info-value">
                                                    3
                                                </span>
                                                <p class="info-title">
                                                    Гарантия
                                                </p>
                                                <div class="info-descr">
                                                    года
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cfg-model-info cfg-model-info--mobile">
                                            <div class="info info-depth"><span class="info-value">
                                                    1.5 мм
                                                </span>
                                                <p class="info-title">
                                                    — Толщина стали
                                                </p>
                                            </div>
                                            <div class="info info-soundproofing"><span class="info-value">
                                                    32 дБ
                                                </span>
                                                <p class="info-title">
                                                    — Шумоизоляция
                                                </p>
                                            </div>
                                            <div class="info info-rating"><span class="info-value rating-perfect">Отличный
                                                </span>
                                                <p class="info-title">
                                                    — Рейтинг безоп-сти
                                                </p>
                                            </div>
                                            <div class="info info-lock"><span class="info-value">
                                                    Тур.
                                                </span>
                                                <p class="info-title"><span>Улучшенная</span> замковая база</p>
                                            </div>
                                            <div class="info info-guaranty"><span class="info-value">
                                                    3 года
                                                </span>
                                                <p class="info-title">
                                                    — Гарантия
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-variable-name="model" data-variable-value="2" data-model="2" data-price="109900" data-image="" data-order="1" class=" cfg-model<?= (isset($_GET['model']) and $_GET['model'] == '2') ? ' active' : '' ?>" id="cfg-firstmodel" onclick='cfgDoorModel2()'>
                                <div class="cfg-model-inner">
                                    <i class="info-btn">i</i>
                                    <div class="cfg-model-name">
                                        <div class="cfg-model-naming">
                                            <p class="cfg-model-title">
                                                Portamia MDF
                                            </p> <span class="cfg-model-cost">
                                                от 109 900 ₽
                                            </span>
                                        </div>
                                        <div class="cfg-tooltip cfg-tooltip">
                                            панель/панель
                                        </div>
                                    </div>
                                    <div class="cfg-model-info-wrapper">
                                        <div class="cfg-model-info">
                                            <div class="info info-depth"><span class="info-value">
                                                    2
                                                </span>
                                                <p class="info-title">
                                                    Толщина стали
                                                </p>
                                                <div class="info-descr">
                                                    мм
                                                </div>
                                            </div>
                                            <div class="info info-soundproofing"><span class="info-value">
                                                    32
                                                </span>
                                                <p class="info-title">
                                                    Шумоизоляция
                                                </p>
                                                <div class="info-descr">
                                                    дБ
                                                </div>
                                            </div>
                                            <div class="info info-rating"><span class="info-value">
                                                    81
                                                </span>
                                                <p class="info-title">Рейтинг безоп-сти</p>
                                                <div class="info-descr">
                                                    из <br> 100
                                                </div>
                                            </div>
                                            <div class="info info-lock"><span class="info-value"><span class="country country-tr"></span></span>
                                                <p class="info-title">Замковая база</p>
                                                <div class="info-descr">
                                                    Тур.
                                                </div>
                                            </div>
                                            <div class="info info-guaranty"><span class="info-value">
                                                    3
                                                </span>
                                                <p class="info-title">
                                                    Гарантия
                                                </p>
                                                <div class="info-descr">
                                                    года
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cfg-model-info cfg-model-info--mobile">
                                            <div class="info info-depth"><span class="info-value">
                                                    1.5 мм
                                                </span>
                                                <p class="info-title">
                                                    — Толщина стали
                                                </p>
                                            </div>
                                            <div class="info info-soundproofing"><span class="info-value">
                                                    32 дБ
                                                </span>
                                                <p class="info-title">
                                                    — Шумоизоляция
                                                </p>
                                            </div>
                                            <div class="info info-rating"><span class="info-value rating-perfect">Отличный
                                                </span>
                                                <p class="info-title">
                                                    — Рейтинг безоп-сти
                                                </p>
                                            </div>
                                            <div class="info info-lock"><span class="info-value">
                                                    Тур.
                                                </span>
                                                <p class="info-title"><span>Улучшенная</span> замковая база</p>
                                            </div>
                                            <div class="info info-guaranty"><span class="info-value">
                                                    3 года
                                                </span>
                                                <p class="info-title">
                                                    — Гарантия
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step" id="step__1" btn="">
                        <div class="step-header">
                            <div class="step-header-title">
                                <div class="title">Форма двери</div>
                            </div>
                            <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-call" href="javascript:;">
                                <span>Помощь менеджера</span>
                            </button>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-1step-number-leaf">
                            <button type="button" class="btn accordion-header" id='close-button-1step-1' onclick="closeblock('aria-step1-number-leaf', 'close-button-1step-1', 'checkbox-1step-number-leaf')">
                                <span class="accordion-head"> </span>Форма</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded=" true" class="accordion-block" id='aria-step1-number-leaf'>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group" withoutscroll="true">
                                            <div class="tabs-group-item tabs-2">
                                                <div data-variable-name="leaf" data-variable-value="single" data-leaf="single" data-price="0" data-image="" data-order="1" class="tab tab-2<?= (isset($_GET['leaf']) and $_GET['leaf'] == 'single') ? ' active' : '' ?>" id="singleleafdoorbutton" onclick="singleleaf()">
                                                    Одностворчатая
                                                </div>
                                                <div data-variable-name="leaf" data-variable-value="double" data-leaf="double" data-price="0" data-image="" data-order="1" class="tab tab-2<?= (isset($_GET['leaf']) and $_GET['leaf'] == 'double') ? ' active' : '' ?>" id="doubleleafdoorbutton" onclick="doubleleaf()">
                                                    Двустворчатая
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="tabs-group-body">
                                                <div>
                                                    <div class="furniture-group construction-body single-leaf" id="singleleafdoor" <?= (isset($_GET['leaf']) and $_GET['leaf'] == 'single') ? '' : 'style="display: none;"' ?>>
                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem1" data-leafdooritems_single="slditem1" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= ((isset($_GET['leafdooritems_single']) and $_GET['leafdooritems_single'] == 'slditem1') or !isset($_GET['leafdooritems_single'])) ? ' active' : '' ?>" id="slditem1" onclick="leafdooritems('slditem1')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-1.svg);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Вид I</div>
                                                            <div class="furniture-item-title">Базовое</div>
                                                        </div>


                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem4" data-leafdooritems_single="slditem4" data-price="0" data-image="" data-order="1" class=" furniture-item furniture-item--big<?= (isset($_GET['leafdooritems_single']) and $_GET['leafdooritems_single'] == 'slditem4') ? ' active' : '' ?>" id="slditem4" onclick="leafdooritems('slditem4')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-6.svg);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Вид II</div>
                                                            <div class="furniture-item-title">С фрамугой по бокам</div>
                                                        </div>

                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem5" data-leafdooritems_single="slditem5" data-price="0" data-image="" data-order="1" class=" furniture-item furniture-item--big<?= (isset($_GET['leafdooritems_single']) and $_GET['leafdooritems_single'] == 'slditem5') ? ' active' : '' ?>" id="slditem5" onclick="leafdooritems('slditem5')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-7.svg)">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Вид III</div>
                                                            <div class="furniture-item-title">С фрамугой по бокам и сверху</div>
                                                        </div>

                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem6" data-leafdooritems_single="slditem6" data-price="0" data-image="" data-order="1" class="unfinished furniture-item furniture-item--big<?= (isset($_GET['leafdooritems_single']) and $_GET['leafdooritems_single'] == 'slditem6') ? ' active' : '' ?>" id="slditem6" onclick="leafdooritems('slditem6')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-4.svg)">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">В разработке</div>
                                                            <div class="furniture-item-title">С фрамугой слева</div>
                                                        </div>



                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem2" data-leafdooritems_single="slditem2" data-price="0" data-image="" data-order="1" class="unfinished furniture-item furniture-item--big<?= (isset($_GET['leafdooritems_single']) and $_GET['leafdooritems_single'] == 'slditem2') ? ' active' : '' ?>" id="slditem2" onclick="leafdooritems('slditem2')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-2.svg);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">В разработке</div>
                                                            <div class="furniture-item-title">С фрамугой сверху</div>
                                                        </div>


                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem7" data-leafdooritems_single="slditem7" data-price="0" data-image="" data-order="1" class="unfinished furniture-item furniture-item--big<?= (isset($_GET['leafdooritems_single']) and $_GET['leafdooritems_single'] == 'slditem7') ? ' active' : '' ?>" id="slditem7" onclick="leafdooritems('slditem7')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-9.svg)">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">В разработке</div>
                                                            <div class="furniture-item-title">С фрамугой справа</div>
                                                        </div>
                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem8" data-leafdooritems_single="slditem8" data-price="0" data-image="" data-order="1" class="unfinished furniture-item furniture-item--big<?= (isset($_GET['leafdooritems_single']) and $_GET['leafdooritems_single'] == 'slditem8') ? ' active' : '' ?>" id="slditem8" onclick="leafdooritems('slditem8')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-8.svg)">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">В разработке</div>
                                                            <div class="furniture-item-title">С фрамугой справа и сверху</div>
                                                        </div>
                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem9" data-leafdooritems_single="slditem9" data-price="0" data-image="" data-order="1" class="unfinished furniture-item furniture-item--big<?= (isset($_GET['leafdooritems_single']) and $_GET['leafdooritems_single'] == 'slditem9') ? ' active' : '' ?>" id="slditem9" onclick="leafdooritems('slditem9')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-5.svg)">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">В разработке</div>
                                                            <div class="furniture-item-title">С фрамугой слева и сверху</div>
                                                        </div>
                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem3" data-leafdooritems_single="slditem3" data-price="0" data-image="" data-order="1" class="unfinished furniture-item furniture-item--big<?= (isset($_GET['leafdooritems_single']) and $_GET['leafdooritems_single'] == 'slditem3') ? ' active' : '' ?>" id="slditem3" onclick="leafdooritems('slditem3')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-3.svg)">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">В разработке</div>
                                                            <div class="furniture-item-title">Арочная</div>
                                                        </div>








                                                    </div>
                                                    <div class="furniture-group construction-body double-leaf" id="doubleleafdoor" <?= (isset($_GET['leaf']) and $_GET['leaf'] == 'double') ? '' : 'style="display: none;"' ?>>
                                                        <div data-variable-name="leafdooritems_double" data-variable-value="dlditem1" data-leafdooritems_double="dlditem1" data-price="0" data-image="" data-order="1" class="unfinished furniture-item furniture-item--big<?= (isset($_GET['leafdooritems_double']) and $_GET['leafdooritems_double'] == 'dlditem1') ? ' active' : '' ?>" id="dlditem1" onclick="leafdooritems('dlditem1')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-10.svg);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">В разработке</div>
                                                            <div class="furniture-item-title">Базовое</div>
                                                        </div>
                                                        <div data-variable-name="leafdooritems_double" data-variable-value="dlditem2" data-leafdooritems_double="dlditem2" data-price="0" data-image="" data-order="1" class="unfinished furniture-item furniture-item--big<?= (isset($_GET['leafdooritems_double']) and $_GET['leafdooritems_double'] == 'dlditem2') ? ' active' : '' ?>" id="dlditem2" onclick="leafdooritems('dlditem2')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-11.svg);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">В разработке</div>
                                                            <div class="furniture-item-title">Базовое</div>
                                                        </div>
                                                        <div data-variable-name="leafdooritems_double" data-variable-value="dlditem3" data-leafdooritems="dlditem3" data-price="0" data-image="" data-order="1" class="unfinished furniture-item furniture-item--big<?= (isset($_GET['leafdooritems_double']) and $_GET['leafdooritems_double'] == 'dlditem3') ? ' active' : '' ?>" id="dlditem3" onclick="leafdooritems('dlditem3')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/types/door-type-img-12.svg);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">В разработке</div>
                                                            <div class="furniture-item-title">Базовое</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-1step-glass-col" <?= ((isset($_GET['leafdooritems_single']) and ($_GET['leafdooritems_single'] == 'slditem2' or $_GET['leafdooritems_single'] == 'slditem3')) or (isset($_GET['leafdooritems_double']) and ($_GET['leafdooritems_double'] == 'dlditem2' or $_GET['leafdooritems_double'] == 'dlditem3'))) ? '' : 'style="display: none;"' ?>>
                            <button type="button" class="btn accordion-header" id="close-button-1step-2" onclick="closeblock('aria-step1-glass-color', 'close-button-1step-2', 'checkbox-1step-glass-col')">
                                <span class="accordion-head">
                                    Цвет стекла
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step1-glass-color">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div>
                                            <span class="swipe-info">
                                                Свайпайте чтобы <br> посмотреть все цвета
                                            </span>
                                            <div class="texture-group glass-frame-col">
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item1" data-frameglasscol="glass-frame-col-item1" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['frameglasscol']) and $_GET['frameglasscol'] == 'glass-frame-col-item1') ? ' active' : '' ?>" id="glass-frame-col-item1" onclick="chooseFrameGlassCol('glass-frame-col-item1')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image silver property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Серебро</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item2" data-frameglasscol="glass-frame-col-item2" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['frameglasscol']) and $_GET['frameglasscol'] == 'glass-frame-col-item2') ? ' active' : '' ?>" id="glass-frame-col-item2" onclick="chooseFrameGlassCol('glass-frame-col-item2')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image silver-gray property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Серебристо-серый</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item3" data-frameglasscol="glass-frame-col-item3" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['frameglasscol']) and $_GET['frameglasscol'] == 'glass-frame-col-item3') ? ' active' : '' ?>" id="glass-frame-col-item3" onclick="chooseFrameGlassCol('glass-frame-col-item3')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image bronze property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Бронза</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item4" data-frameglasscol="glass-frame-col-item4" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['frameglasscol']) and $_GET['frameglasscol'] == 'glass-frame-col-item4') ? ' active' : '' ?>" id="glass-frame-col-item4" onclick="chooseFrameGlassCol('glass-frame-col-item4')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image blue property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Голубой</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item5" data-active="false" data-frameglasscol="glass-frame-col-item5" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['frameglasscol']) and $_GET['frameglasscol'] == 'glass-frame-col-item5') ? ' active' : '' ?>" id="glass-frame-col-item5" onclick="chooseFrameGlassCol('glass-frame-col-item5')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image multi property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Мультифункциональное</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div data-variable-name="furniture_extra-grid1_check" data-variable-value="1" data-furniture_extra-grid1_check="1" data-price="0" data-image="" data-order="1" class="checkbox-accordion accordion accordion--with-plus colored<?= (((isset($_GET['leafdooritems_single']) and ($_GET['leafdooritems_single'] == 'slditem2' or $_GET['leafdooritems_single'] == 'slditem3')) or (isset($_GET['leafdooritems_double']) and ($_GET['leafdooritems_double'] == 'dlditem2' or $_GET['leafdooritems_double'] == 'dlditem3'))) and (isset($_GET['furniture_extra-grid1_check']) and $_GET['furniture_extra-grid1_check'] == 1)) ? ' active' : '' ?>" id="checkbox-1step-extra-grid" <?= ((isset($_GET['leafdooritems_single']) and ($_GET['leafdooritems_single'] == 'slditem2' or $_GET['leafdooritems_single'] == 'slditem3')) or (isset($_GET['leafdooritems_double']) and ($_GET['leafdooritems_double'] == 'dlditem2' or $_GET['leafdooritems_double'] == 'dlditem3'))) ? '' : 'style="display: none;"' ?>>
                            <div class="checkbox-accordion-header" id="close-button-1step-4" onclick="togglerGridStep1()">
                                <div class="title">
                                    <span>Декоративная решетка</span>
                                </div>
                                <div class="checkbox-accordion-toggler">
                                    <label class="toggler">
                                        <div class="checkbox-pseudo-input<?= (isset($_GET['furniture_extra-grid1_check'])) ? ' checked' : '' ?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div id="aria-step1-extra-grid" <?= (isset($_GET['furniture_extra-grid1_check'])) ? '' : 'style="display: none;"' ?>>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="grille_glazing">
                                            <span class="swipe-info">
                                                Свайпайте чтобы <br> посмотреть все цвета
                                            </span>
                                            <div class="texture-group extra-grid">
                                                <div data-variable-name="furnitem_extra-grid1" data-variable-value="extra-grid-step1-item1-step__1" data-furnitem_extra-grid1="extra-grid-step1-item1-step__1" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['furnitem_extra-grid1']) and $_GET['furnitem_extra-grid1'] == 'extra-grid-step1-item1-step__1') ? ' active' : '' ?>" id="extra-grid-step1-item1" onclick="furnItem('extra-grid-step1-item1', '#checkbox-1step-extra-grid .texture-item')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image asia property-texture section_grille base" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/extra-grid-img-1.jpg);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Тип 1</div>
                                                </div>

                                                <div data-variable-name="furnitem_extra-grid1" data-variable-value="extra-grid-step1-item2-step__1" data-furnitem_extra-grid1="extra-grid-step1-item2-step__1" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['furnitem_extra-grid1']) and $_GET['furnitem_extra-grid1'] == 'extra-grid-step1-item2-step__1') ? ' active' : '' ?>" id="extra-grid-step1-item2" onclick="furnItem('extra-grid-step1-item2', '#checkbox-1step-extra-grid .texture-item')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_3 property-texture section_grille base" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/extra-grid-img-5.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Тип 2</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid1" data-variable-value="extra-grid-step1-item3-step__1" data-furnitem_extra-grid1="extra-grid-step1-item3-step__1" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['furnitem_extra-grid1']) and $_GET['furnitem_extra-grid1'] == 'extra-grid-step1-item3-step__1') ? ' active' : '' ?>" id="extra-grid-step1-item3" onclick="furnItem('extra-grid-step1-item3', '#checkbox-1step-extra-grid .texture-item')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_4 property-texture section_grille base" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/extra-grid-img-6.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Тип 3</div>
                                                </div>

                                                <div data-variable-name="furnitem_extra-grid1" data-variable-value="extra-grid-step1-item4-step__1" data-furnitem_extra-grid1="extra-grid-step1-item4-step__1" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['furnitem_extra-grid1']) and $_GET['furnitem_extra-grid1'] == 'extra-grid-step1-item4-step__1') ? ' active' : '' ?>" id="extra-grid-step1-item4" onclick="furnItem('extra-grid-step1-item4', '#checkbox-1step-extra-grid .texture-item')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_new property-texture section_grille base" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/extra-grid-img-new.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Тип 4</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-2step-style">
                            <button type="button" class="btn accordion-header" id='close-button-2step-1' onclick="closeblock('aria-step2-style', 'close-button-2step-1', 'checkbox-2step-style')">
                                <span class="accordion-head"> </span>Стиль</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id='aria-step2-style'>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-btn-group-wrapper">
                                            <button data-variable-name="outdoorstyles" data-variable-value="classic" data-outdoorstyles="classic" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'classic') ? ' active' : '' ?>" id="btn2step1" onclick="outdoorStylesClassic()">
                                                <span>
                                                    <em>Металл / МДФ</em>

                                                </span>
                                            </button>
                                            <button data-variable-name="outdoorstyles" data-variable-value="milling" data-outdoorstyles="milling" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'milling') ? ' active' : '' ?>" id="btn2step5" style="display: none;" onclick="outdoorStylesMilling()">
                                                <span>
                                                    <em>Фрезеровка</em>
                                                </span>
                                            </button>
                                            <button data-variable-name="outdoorstyles" data-variable-value="fusing" data-outdoorstyles="fusing" data-price="0" data-image="" data-order="1" type="button" class="unfinished cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'fusing') ? ' active' : '' ?>" id="btn2step4" onclick="outdoorStylesFusing()">
                                                <span>
                                                    <em>Фьюзинг</em>
                                                    <em>В разработке</em>
                                                </span>
                                            </button>
                                            <button data-variable-name="outdoorstyles" data-variable-value="glazed" data-outdoorstyles="glazed" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'glazed') ? ' active' : '' ?>" id="btn2step3" onclick="outdoorStylesGlazed()">
                                                <span>
                                                    <em>Остекление металл</em>

                                                </span>
                                            </button>
                                            <button data-variable-name="outdoorstyles" data-variable-value="glazed-panel" data-outdoorstyles="glazed-panel" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'glazed-panel') ? ' active' : '' ?>" id="btn2step6" style="display: none;" onclick="outdoorStylesGlazedPanel()">
                                                <span>
                                                    <em>Остекление панель</em>

                                                </span>
                                            </button>
                                            <button data-variable-name="outdoorstyles" data-variable-value="baguette" data-outdoorstyles="baguette" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'baguette') ? ' active' : '' ?>" id="btn2step2" onclick="outdoorStylesBaguette()">
                                                <span>
                                                    <em>Рамка</em>
                                                </span>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-2step-milled" <?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'milling') ? '' : 'style="display: none;"' ?>>
                            <button type="button" class="btn accordion-header" id='close-button-2step-5' onclick='closeblock("aria-step2-milled", "close-button-2step-5", "checkbox-2step-milled" )'>
                                <span class="accordion-head">
                                    Фрезеровка
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id='aria-step2-milled'>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group" withoutscroll="true">
                                            <div class="tabs-group-item tabs-2">
                                                <div data-variable-name="outclassicmilled" data-variable-value="1" data-classicmilled="1" data-price="0" data-image="" data-order="1" class="tab tab-2<?= (isset($_GET['outclassicmilled']) and $_GET['outclassicmilled'] == '1') ? ' active' : '' ?>" id="outclassicmilled-btn" onclick="outclassicmilled()">
                                                    Классический стиль
                                                </div>
                                                <div data-variable-name="outmodernmilled" data-variable-value="1" data-modernmilled="1" data-price="0" data-image="" data-order="1" class="tab tab-2<?= (isset($_GET['outmodernmilled']) and $_GET['outmodernmilled'] == '1') ? ' active' : '' ?>" id="outmodernmilled-btn" onclick="outmodernmilled()">
                                                    Современный стиль
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="tabs-group-body" id="classicmilledout-block" <?= (isset($_GET['classicmilledout']) and $_GET['classicmilledout'] == '1') ? '' : 'style="display: none;"' ?>>
                                                <div>
                                                    <div class="milling-group">
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor1" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor1" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor1') ? ' active' : '' ?>" id='btn-milled-classic-outdoor1' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor1")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/1.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor2" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor2') ? ' active' : '' ?>" id='btn-milled-classic-outdoor2' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor2")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/2.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor3" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor3" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor3') ? ' active' : '' ?>" id='btn-milled-classic-outdoor3' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor3")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/3.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 003</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor4" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor4" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor4') ? ' active' : '' ?>" id='btn-milled-classic-outdoor4' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor4")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/4.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 004</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor5" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor5" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor5') ? ' active' : '' ?>" id='btn-milled-classic-outdoor5' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor5")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/5.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 005</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor6" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor6" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor6') ? ' active' : '' ?>" id='btn-milled-classic-outdoor6' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor6")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/6.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 006</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor7" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor7" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor7') ? ' active' : '' ?>" id='btn-milled-classic-outdoor7' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor7")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/7.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 007</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor8" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor8" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor8') ? ' active' : '' ?>" id='btn-milled-classic-outdoor8' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor8")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/8.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 008</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor9" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor9" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor9') ? ' active' : '' ?>" id='btn-milled-classic-outdoor9' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor9")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/9.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 009</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor10" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor10" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor10') ? ' active' : '' ?>" id='btn-milled-classic-outdoor10' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor10")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/10.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 010</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor11" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor11" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor11') ? ' active' : '' ?>" id='btn-milled-classic-outdoor11' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor11")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/11.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 009</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor12" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor12" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor12') ? ' active' : '' ?>" id='btn-milled-classic-outdoor12' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor12")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/12.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 010</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor13" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor13" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor13') ? ' active' : '' ?>" id='btn-milled-classic-outdoor13' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor13")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/13.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 013</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor14" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor14" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor14') ? ' active' : '' ?>" id='btn-milled-classic-outdoor14' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor14")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/14.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 014</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor15" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor15" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor15') ? ' active' : '' ?>" id='btn-milled-classic-outdoor15' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor15")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/15.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 015</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor16" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor16" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor16') ? ' active' : '' ?>" id='btn-milled-classic-outdoor16' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor16")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/16.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 016</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor17" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor17" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor17') ? ' active' : '' ?>" id='btn-milled-classic-outdoor17' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor17")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/17.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 017</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor18" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor18" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor18') ? ' active' : '' ?>" id='btn-milled-classic-outdoor18' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor18")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/18.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 018</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor19" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor19" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor19') ? ' active' : '' ?>" id='btn-milled-classic-outdoor19' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor19")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/19.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 019</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor20" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor20" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor20') ? ' active' : '' ?>" id='btn-milled-classic-outdoor20' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor20")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/20.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 020</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor21" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor21" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor21') ? ' active' : '' ?>" id='btn-milled-classic-outdoor21' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor21")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/21.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 021</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor22" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor22" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor22') ? ' active' : '' ?>" id='btn-milled-classic-outdoor22' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor22")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/22.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 022</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor23" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor23" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor23') ? ' active' : '' ?>" id='btn-milled-classic-outdoor23' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor23")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/23.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 023</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor24" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor24" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor24') ? ' active' : '' ?>" id='btn-milled-classic-outdoor24' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor24")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/24.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 024</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor25" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor25" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor25') ? ' active' : '' ?>" id='btn-milled-classic-outdoor25' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor25")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/25.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 025</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor26" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor26" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor26') ? ' active' : '' ?>" id='btn-milled-classic-outdoor26' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor26")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/26.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 026</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor27" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor27" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor27') ? ' active' : '' ?>" id='btn-milled-classic-outdoor27' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor27")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/27.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 027</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor28" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor28" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor28') ? ' active' : '' ?>" id='btn-milled-classic-outdoor28' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor28")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/28.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 028</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor29" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor29" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor29') ? ' active' : '' ?>" id='btn-milled-classic-outdoor29' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor29")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/29.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 029</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor30" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor30" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor30') ? ' active' : '' ?>" id='btn-milled-classic-outdoor30' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor30")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/30.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 030</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor31" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor31" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor31') ? ' active' : '' ?>" id='btn-milled-classic-outdoor31' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor31")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/31.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 031</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor32" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor32" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor32') ? ' active' : '' ?>" id='btn-milled-classic-outdoor32' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor32")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/32.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 032</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor33" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor33" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor33') ? ' active' : '' ?>" id='btn-milled-classic-outdoor33' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor33")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/33.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 033</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor34" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor34" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor34') ? ' active' : '' ?>" id='btn-milled-classic-outdoor34' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor34")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/34.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 034</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor35" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor35" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor35') ? ' active' : '' ?>" id='btn-milled-classic-outdoor35' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor35")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/35.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 035</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor36" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor36" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor36') ? ' active' : '' ?>" id='btn-milled-classic-outdoor36' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor36")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/36.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 036</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor37" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor37" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor37') ? ' active' : '' ?>" id='btn-milled-classic-outdoor37' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor37")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/37.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 037</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor38" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor38" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor38') ? ' active' : '' ?>" id='btn-milled-classic-outdoor38' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor38")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/38.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 038</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassicoutdoor" data-variable-value="btn-milled-classic-outdoor39" data-typemilledoutclassicoutdoor="btn-milled-classic-outdoor39" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassicoutdoor']) and $_GET['typemilledoutclassicoutdoor'] == 'btn-milled-classic-outdoor39') ? ' active' : '' ?>" id='btn-milled-classic-outdoor39' onclick='typeMilledOutClassicOutdoor("btn-milled-classic-outdoor39")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/39.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 039</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-group-body" id="modernmilledout-block" <?= (isset($_GET['modernmilledout']) and $_GET['modernmilledout'] == '1') ? '' : 'style="display: none;"' ?>>
                                                <div>
                                                    <div class="milling-group">
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor1" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor1" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modernoutdoor1') ? ' active' : '' ?>" id='btn-milled-modern-outdoor1' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor1")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/40.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor2" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modernoutdoor2') ? ' active' : '' ?>" id='btn-milled-modern-outdoor2' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor2")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/41.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor3" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor3" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modernoutdoor3') ? ' active' : '' ?>" id='btn-milled-modern-outdoor3' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor3")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/42.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 003</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor4" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor4" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modernoutdoor4') ? ' active' : '' ?>" id='btn-milled-modern-outdoor4' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor4")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/43.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 004</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor5" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor5" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modernoutdoor5') ? ' active' : '' ?>" id='btn-milled-modern-outdoor5' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor5")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/44.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 005</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor6" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor6" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modernoutdoor6') ? ' active' : '' ?>" id='btn-milled-modern-outdoor6' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor6")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/45.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 006</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor7" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor7" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modernoutdoor7') ? ' active' : '' ?>" id='btn-milled-modern-outdoor7' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor7")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/46.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 007</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor8" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor8" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modernoutdoor8') ? ' active' : '' ?>" id='btn-milled-modern-outdoor8' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor8")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/47.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 008</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor9" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor9" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modernoutdoor9') ? ' active' : '' ?>" id='btn-milled-modern-outdoor9' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor9")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/48.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 009</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor10" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor10" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor10') ? ' active' : '' ?>" id='btn-milled-modern-outdoor10' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor10")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/49.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 010</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor11" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor11" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor11') ? ' active' : '' ?>" id='btn-milled-modern-outdoor11' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor11")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/50.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 011</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor12" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor12" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor12') ? ' active' : '' ?>" id='btn-milled-modern-outdoor12' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor12")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/51.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 012</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor13" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor13" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor13') ? ' active' : '' ?>" id='btn-milled-modern-outdoor13' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor13")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/52.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 013</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor14" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor14" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor14') ? ' active' : '' ?>" id='btn-milled-modern-outdoor14' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor14")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/53.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 014</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor15" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor15" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor15') ? ' active' : '' ?>" id='btn-milled-modern-outdoor15' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor15")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/54.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 015</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor16" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor16" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor16') ? ' active' : '' ?>" id='btn-milled-modern-outdoor16' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor16")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/55.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 016</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor17" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor17" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor17') ? ' active' : '' ?>" id='btn-milled-modern-outdoor17' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor17")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/56.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 017</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor18" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor18" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor18') ? ' active' : '' ?>" id='btn-milled-modern-outdoor18' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor18")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/57.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 018</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor19" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor19" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor19') ? ' active' : '' ?>" id='btn-milled-modern-outdoor19' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor19")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/58.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 019</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor20" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor20" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor20') ? ' active' : '' ?>" id='btn-milled-modern-outdoor20' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor20")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/59.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 020</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor21" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor21" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor21') ? ' active' : '' ?>" id='btn-milled-modern-outdoor21' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor21")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/60.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 021</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor22" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor22" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor22') ? ' active' : '' ?>" id='btn-milled-modern-outdoor22' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor22")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/61.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 022</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor23" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor23" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor23') ? ' active' : '' ?>" id='btn-milled-modern-outdoor23' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor23")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/62.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 023</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor24" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor24" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor24') ? ' active' : '' ?>" id='btn-milled-modern-outdoor24' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor24")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/63.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 024</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodernoutdoor" data-variable-value="btn-milled-modern-outdoor25" data-typemilledoutmodernoutdoor="btn-milled-modern-outdoor25" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodernoutdoor']) and $_GET['typemilledoutmodernoutdoor'] == 'btn-milled-modern-outdoor25') ? ' active' : '' ?>" id='btn-milled-modern-outdoor25' onclick='typeMilledOutModernOutdoor("btn-milled-modern-outdoor25")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/64.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 025</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-2step-fusing" <?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'fusing') ? '' : 'style="display: none;"' ?>>
                            <button type="button" class="btn accordion-header" id="close-button-2step-4" onclick="closeblock('aria-step2-fusing', 'close-button-2step-4', 'checkbox-2step-fusing')">
                                <span class="accordion-head">Вид фьюзинга</span>
                                <span class="accordion-head-tab"></span>
                            </button> <!---->
                            <div id='aria-step2-fusing'>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="milling-group">
                                            <div>
                                                <div data-variable-name="furnitem_fusing" data-variable-value="fusing-item1-step__2" data-furnitem_fusing="fusing-item1-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_fusing']) and $_GET['furnitem_fusing'] == 'fusing-item1-step__2') ? ' active' : '' ?>" id="fusing-item1" onclick="furnItem('fusing-item1', '#checkbox-2step-fusing .milling-item')"><!---->
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/fusing/1.svg);"></div>
                                                    </div>
                                                    <div class="milling-title">Тип 1</div>
                                                </div> <!---->
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_fusing" data-variable-value="fusing-item2-step__2" data-furnitem_fusing="fusing-item2-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_fusing']) and $_GET['furnitem_fusing'] == 'fusing-item2-step__2') ? ' active' : '' ?>" id="fusing-item2" onclick="furnItem('fusing-item2', '#checkbox-2step-fusing .milling-item')"><!---->
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/fusing/2.svg);"></div>
                                                    </div>
                                                    <div class="milling-title">Тип 2</div>
                                                </div> <!---->
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_fusing" data-variable-value="fusing-item3-step__2" data-furnitem_fusing="fusing-item3-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_fusing']) and $_GET['furnitem_fusing'] == 'fusing-item3-step__2') ? ' active' : '' ?>" id="fusing-item3" onclick="furnItem('fusing-item3', '#checkbox-2step-fusing .milling-item')"><!---->
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/fusing/3.svg);"></div>
                                                    </div>
                                                    <div class="milling-title">Тип 3</div>
                                                </div> <!---->
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_fusing" data-variable-value="fusing-item4-step__2" data-furnitem_fusing="fusing-item4-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_fusing']) and $_GET['furnitem_fusing'] == 'fusing-item4-step__2') ? ' active' : '' ?>" id="fusing-item4" onclick="furnItem('fusing-item4', '#checkbox-2step-fusing .milling-item')"><!---->
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/fusing/4.svg);"></div>
                                                    </div>
                                                    <div class="milling-title">Тип 4</div>
                                                </div> <!---->
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_fusing" data-variable-value="fusing-item5-step__2" data-furnitem_fusing="fusing-item5-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_fusing']) and $_GET['furnitem_fusing'] == 'fusing-item5-step__2') ? ' active' : '' ?>" id="fusing-item5" onclick="furnItem('fusing-item5', '#checkbox-2step-fusing .milling-item')"><!---->
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/fusing/5.svg);"></div>
                                                    </div>
                                                    <div class="milling-title">Тип 5</div>
                                                </div> <!---->
                                            </div> <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-2step-baguette" <?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'baguette') ? '' : 'style="display: none;"' ?>>
                            <button type="button" class="btn accordion-header" id="close-button-2step-3" onclick="closeblock('aria-step2-baguette', 'close-button-2step-3', 'checkbox-2step-baguette')">
                                <span class="accordion-head">
                                    Тип рамки
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id='aria-step2-baguette'>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="milling-group">
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item1-step__2" data-furnitem_baguette="baguette-item1-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_baguette']) and $_GET['furnitem_baguette'] == 'baguette-item1-step__2') ? ' active' : '' ?>" id="baguette-item1" onclick="furnItem('baguette-item1', '#checkbox-2step-baguette .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/baguette/1.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">B 001</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item2-step__2" data-furnitem_baguette="baguette-item2-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_baguette']) and $_GET['furnitem_baguette'] == 'baguette-item2-step__2') ? ' active' : '' ?>" id="baguette-item2" onclick="furnItem('baguette-item2', '#checkbox-2step-baguette .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/baguette/2.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">B 002</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item3-step__2" data-furnitem_baguette="baguette-item3-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_baguette']) and $_GET['furnitem_baguette'] == 'baguette-item3-step__2') ? ' active' : '' ?>" id="baguette-item3" onclick="furnItem('baguette-item3', '#checkbox-2step-baguette .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/baguette/3.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">B 003</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item4-step__2" data-furnitem_baguette="baguette-item4-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_baguette']) and $_GET['furnitem_baguette'] == 'baguette-item4-step__2') ? ' active' : '' ?>" id="baguette-item4" onclick="furnItem('baguette-item4', '#checkbox-2step-baguette .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/baguette/4.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">B 004</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item5-step__2" data-furnitem_baguette="baguette-item5-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_baguette']) and $_GET['furnitem_baguette'] == 'baguette-item5-step__2') ? ' active' : '' ?>" id="baguette-item5" onclick="furnItem('baguette-item5', '#checkbox-2step-baguette .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/baguette/5.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">B 005</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item6-step__2" data-furnitem_baguette="baguette-item6-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_baguette']) and $_GET['furnitem_baguette'] == 'baguette-item6-step__2') ? ' active' : '' ?>" id="baguette-item6" onclick="furnItem('baguette-item6', '#checkbox-2step-baguette .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/baguette/6.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">B 006</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item7-step__2" data-furnitem_baguette="baguette-item7-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_baguette']) and $_GET['furnitem_baguette'] == 'baguette-item7-step__2') ? ' active' : '' ?>" id="baguette-item7" onclick="furnItem('baguette-item7', '#checkbox-2step-baguette .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/baguette/7.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">B 007</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item8-step__2" data-furnitem_baguette="baguette-item8-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_baguette']) and $_GET['furnitem_baguette'] == 'baguette-item8-step__2') ? ' active' : '' ?>" id="baguette-item8" onclick="furnItem('baguette-item8', '#checkbox-2step-baguette .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/baguette/8.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">B 008</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item9-step__2" data-furnitem_baguette="baguette-item9-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_baguette']) and $_GET['furnitem_baguette'] == 'baguette-item9-step__2') ? ' active' : '' ?>" id="baguette-item9" onclick="furnItem('baguette-item9', '#checkbox-2step-baguette .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/baguette/9.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">B 009</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item10-step__2" data-furnitem_baguette="baguette-item10-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_baguette']) and $_GET['furnitem_baguette'] == 'baguette-item10-step__2') ? ' active' : '' ?>" id="baguette-item10" onclick="furnItem('baguette-item10', '#checkbox-2step-baguette .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/baguette/10.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">B 010</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-2step-glass-type" <?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'glazed') ? '' : 'style="display: none;"' ?>>
                            <button type="button" class="btn accordion-header" id="close-button-2step4" onclick="closeblock('aria-step2-glass-type', 'close-button-2step4', 'checkbox-2step-glass-type')">
                                <span class="accordion-head">
                                    Вид остекления металл
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step2-glass-type">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div>
                                            <div class="milling-group">
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item1-step__2" data-furnitem_glass-type="glass-type-item1-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type']) and $_GET['furnitem_glass-type'] == 'glass-type-item1-step__2') ? ' active' : '' ?>" id="glass-type-item1" onclick="furnItem('glass-type-item1', '#checkbox-2step-glass-type .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/1.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 001</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item2-step__2" data-furnitem_glass-type="glass-type-item2-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type']) and $_GET['furnitem_glass-type'] == 'glass-type-item2-step__2') ? ' active' : '' ?>" id="glass-type-item2" onclick="furnItem('glass-type-item2', '#checkbox-2step-glass-type .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/2.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 002</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item3-step__2" data-furnitem_glass-type="glass-type-item3-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type']) and $_GET['furnitem_glass-type'] == 'glass-type-item3-step__2') ? ' active' : '' ?>" id="glass-type-item3" onclick="furnItem('glass-type-item3', '#checkbox-2step-glass-type .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/3.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 003</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item4-step__2" data-furnitem_glass-type="glass-type-item4-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type']) and $_GET['furnitem_glass-type'] == 'glass-type-item4-step__2') ? ' active' : '' ?>" id="glass-type-item4" onclick="furnItem('glass-type-item4', '#checkbox-2step-glass-type .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/4.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 004</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item5-step__2" data-furnitem_glass-type="glass-type-item5-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type']) and $_GET['furnitem_glass-type'] == 'glass-type-item5-step__2') ? ' active' : '' ?>" id="glass-type-item5" onclick="furnItem('glass-type-item5', '#checkbox-2step-glass-type .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/5.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 005</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item6-step__2" data-furnitem_glass-type="glass-type-item6-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type']) and $_GET['furnitem_glass-type'] == 'glass-type-item6-step__2') ? ' active' : '' ?>" id="glass-type-item6" onclick="furnItem('glass-type-item6', '#checkbox-2step-glass-type .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/6.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 006</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item7-step__2" data-furnitem_glass-type="glass-type-item7-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type']) and $_GET['furnitem_glass-type'] == 'glass-type-item7-step__2') ? ' active' : '' ?>" id="glass-type-item7" onclick="furnItem('glass-type-item7', '#checkbox-2step-glass-type .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/7.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 007</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item8-step__2" data-furnitem_glass-type="glass-type-item8-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type']) and $_GET['furnitem_glass-type'] == 'glass-type-item8-step__2') ? ' active' : '' ?>" id="glass-type-item8" onclick="furnItem('glass-type-item8', '#checkbox-2step-glass-type .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/8.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 008</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item9-step__2" data-furnitem_glass-type="glass-type-item9-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type']) and $_GET['furnitem_glass-type'] == 'glass-type-item9-step__2') ? ' active' : '' ?>" id="glass-type-item9" onclick="furnItem('glass-type-item9', '#checkbox-2step-glass-type .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/9.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 009</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item10-step__2" data-furnitem_glass-type="glass-type-item10-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type']) and $_GET['furnitem_glass-type'] == 'glass-type-item10-step__2') ? ' active' : '' ?>" id="glass-type-item10" onclick="furnItem('glass-type-item10', '#checkbox-2step-glass-type .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/10.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 010</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item11-step__2" data-furnitem_glass-type="glass-type-item11-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type']) and $_GET['furnitem_glass-type'] == 'glass-type-item11-step__2') ? ' active' : '' ?>" id="glass-type-item11" onclick="furnItem('glass-type-item11', '#checkbox-2step-glass-type .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/11.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 011</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="cfg-option-changer-wrapper">
                                                <div class="cfg-option-changer-title">
                                                    Цвет стекла
                                                </div>
                                            </div>
                                            <div><span class="swipe-info">
                                                    Свайпайте чтобы <br> посмотреть все цвета
                                                </span>
                                                <div class="texture-group glass-col">
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item1" data-glasscol="glass-col-item1" data-price="25400" data-image="" data-order="1" class="texture-item<?= (isset($_GET['glasscol']) and $_GET['glasscol'] == 'glass-col-item1') ? ' active' : '' ?>" id="glass-col-item1" onclick="chooseGlassCol('glass-col-item1')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image silver property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">25 400 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Серебро</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item2" data-glasscol="glass-col-item3" data-price="34600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['glasscol']) and $_GET['glasscol'] == 'glass-col-item2') ? ' active' : '' ?>" id="glass-col-item2" onclick="chooseGlassCol('glass-col-item2')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image silver-gray property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Серебристо-серый</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item3" data-glasscol="glass-col-item3" data-price="34600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['glasscol']) and $_GET['glasscol'] == 'glass-col-item3') ? ' active' : '' ?>" id="glass-col-item3" onclick="chooseGlassCol('glass-col-item3')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image bronze property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Бронза</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item4" data-glasscol="glass-col-item4" data-price="34600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['glasscol']) and $_GET['glasscol'] == 'glass-col-item4') ? ' active' : '' ?>" id="glass-col-item4" onclick="chooseGlassCol('glass-col-item4')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image blue property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Голубой</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item5" data-glasscol="glass-col-item5" data-price="34600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['glasscol']) and $_GET['glasscol'] == 'glass-col-item5') ? ' active' : '' ?>" id="glass-col-item5" onclick="chooseGlassCol('glass-col-item5')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image multi property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Мультифункциональное</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-2step-glass-type-panel" <?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'glazed-panel') ? '' : 'style="display: none;"' ?>>
                            <button type="button" class="btn accordion-header" id="close-button-2step7" onclick="closeblock('aria-step2-glass-type-panel', 'close-button-2step7', 'checkbox-2step-glass-type-panel')">
                                <span class="accordion-head">
                                    Вид остекления панель
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step2-glass-type-panel">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div>
                                            <div class="milling-group">
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type-panel" data-variable-value="glass-type-panel-item1-step__2" data-furnitem_glass-type-panel="glass-type-panel-item1-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type-panel']) and $_GET['furnitem_glass-type-panel'] == 'glass-type-panel-item1-step__2') ? ' active' : '' ?>" id="glass-type-panel-item1" onclick="furnItem('glass-type-panel-item1', '#checkbox-2step-glass-type-panel .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/1.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 001</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type-panel" data-variable-value="glass-type-panel-item2-step__2" data-furnitem_glass-type-panel="glass-type-panel-item2-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type-panel']) and $_GET['furnitem_glass-type-panel'] == 'glass-type-panel-item2-step__2') ? ' active' : '' ?>" id="glass-type-panel-item2" onclick="furnItem('glass-type-panel-item2', '#checkbox-2step-glass-type-panel .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/2.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 002</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type-panel" data-variable-value="glass-type-panel-item3-step__2" data-furnitem_glass-type-panel="glass-type-panel-item3-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type-panel']) and $_GET['furnitem_glass-type-panel'] == 'glass-type-panel-item3-step__2') ? ' active' : '' ?>" id="glass-type-panel-item3" onclick="furnItem('glass-type-panel-item3', '#checkbox-2step-glass-type-panel .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/3.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 003</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type-panel" data-variable-value="glass-type-panel-item4-step__2" data-furnitem_glass-type-panel="glass-type-panel-item4-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type-panel']) and $_GET['furnitem_glass-type-panel'] == 'glass-type-panel-item4-step__2') ? ' active' : '' ?>" id="glass-type-panel-item4" onclick="furnItem('glass-type-panel-item4', '#checkbox-2step-glass-type-panel .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/4.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 004</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type-panel" data-variable-value="glass-type-panel-item5-step__2" data-furnitem_glass-type-panel="glass-type-panel-item5-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type-panel']) and $_GET['furnitem_glass-type-panel'] == 'glass-type-panel-item5-step__2') ? ' active' : '' ?>" id="glass-type-panel-item5" onclick="furnItem('glass-type-panel-item5', '#checkbox-2step-glass-type-panel .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/5.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 005</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type-panel" data-variable-value="glass-type-panel-item6-step__2" data-furnitem_glass-type-panel="glass-type-panel-item6-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type-panel']) and $_GET['furnitem_glass-type-panel'] == 'glass-type-panel-item6-step__2') ? ' active' : '' ?>" id="glass-type-panel-item6" onclick="furnItem('glass-type-panel-item6', '#checkbox-2step-glass-type-panel .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/6.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 006</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type-panel" data-variable-value="glass-type-panel-item7-step__2" data-furnitem_glass-type-panel="glass-type-panel-item7-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type-panel']) and $_GET['furnitem_glass-type-panel'] == 'glass-type-panel-item7-step__2') ? ' active' : '' ?>" id="glass-type-panel-item7" onclick="furnItem('glass-type-panel-item7', '#checkbox-2step-glass-type-panel .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/7.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 007</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type-panel" data-variable-value="glass-type-panel-item8-step__2" data-furnitem_glass-type-panel="glass-type-panel-item8-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type-panel']) and $_GET['furnitem_glass-type-panel'] == 'glass-type-panel-item8-step__2') ? ' active' : '' ?>" id="glass-type-panel-item8" onclick="furnItem('glass-type-panel-item8', '#checkbox-2step-glass-type-panel .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/8.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 008</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type-panel" data-variable-value="glass-type-panel-item9-step__2" data-furnitem_glass-type-panel="glass-type-panel-item9-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type-panel']) and $_GET['furnitem_glass-type-panel'] == 'glass-type-panel-item9-step__2') ? ' active' : '' ?>" id="glass-type-panel-item9" onclick="furnItem('glass-type-panel-item9', '#checkbox-2step-glass-type-panel .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/9.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 009</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type-panel" data-variable-value="glass-type-panel-item10-step__2" data-furnitem_glass-type-panel="glass-type-panel-item10-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type-panel']) and $_GET['furnitem_glass-type-panel'] == 'glass-type-panel-item10-step__2') ? ' active' : '' ?>" id="glass-type-panel-item10" onclick="furnItem('glass-type-panel-item10', '#checkbox-2step-glass-type-panel .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/10.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 010</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type-panel" data-variable-value="glass-type-panel-item11-step__2" data-furnitem_glass-type-panel="glass-type-panel-item11-step__2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['furnitem_glass-type-panel']) and $_GET['furnitem_glass-type-panel'] == 'glass-type-panel-item11-step__2') ? ' active' : '' ?>" id="glass-type-panel-item11" onclick="furnItem('glass-type-panel-item11', '#checkbox-2step-glass-type-panel .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/glass/11.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">G 011</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="cfg-option-changer-wrapper">
                                                <div class="cfg-option-changer-title">
                                                    Цвет стекла
                                                </div>
                                            </div>
                                            <div><span class="swipe-info">
                                                    Свайпайте чтобы <br> посмотреть все цвета
                                                </span>
                                                <div class="texture-group glass-col">
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item1" data-glasscol="glass-col-item1" data-price="25400" data-image="" data-order="1" class="texture-item<?= (isset($_GET['glasscol']) and $_GET['glasscol'] == 'glass-col-item1') ? ' active' : '' ?>" id="glass-col-item1" onclick="chooseGlassCol('glass-col-item1')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image silver property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">25 400 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Серебро</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item2" data-glasscol="glass-col-item3" data-price="34600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['glasscol']) and $_GET['glasscol'] == 'glass-col-item2') ? ' active' : '' ?>" id="glass-col-item2" onclick="chooseGlassCol('glass-col-item2')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image silver-gray property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Серебристо-серый</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item3" data-glasscol="glass-col-item3" data-price="34600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['glasscol']) and $_GET['glasscol'] == 'glass-col-item3') ? ' active' : '' ?>" id="glass-col-item3" onclick="chooseGlassCol('glass-col-item3')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image bronze property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Бронза</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item4" data-glasscol="glass-col-item4" data-price="34600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['glasscol']) and $_GET['glasscol'] == 'glass-col-item4') ? ' active' : '' ?>" id="glass-col-item4" onclick="chooseGlassCol('glass-col-item4')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image blue property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Голубой</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item5" data-glasscol="glass-col-item5" data-price="34600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['glasscol']) and $_GET['glasscol'] == 'glass-col-item5') ? ' active' : '' ?>" id="glass-col-item5" onclick="chooseGlassCol('glass-col-item5')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image multi property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Мультифункциональное</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-variable-name="furniture_extra-grid2_check" data-variable-value="1" data-furniture_extra-grid2_check="1" data-price="0" data-image="" data-order="1" class="checkbox-accordion accordion accordion--with-plus colored" id="checkbox-2step-extra-grid" <?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'glazed') ? '' : 'style="display: none;"' ?>>
                            <div class="checkbox-accordion-header" id="close-button-2step-3" onclick="togglerGridStep2()">
                                <div class="title">
                                    <span>Декоративная решетка</span>
                                </div>
                                <div class="checkbox-accordion-toggler"><label class="toggler">
                                        <div class="checkbox-pseudo-input<?= (isset($_GET['furniture_extra-grid2_check'])) ? ' checked' : '' ?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div id="aria-step2-extra-grid" <?= (isset($_GET['furniture_extra-grid2_check'])) ? '' : 'style="display: none;"' ?>>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="grille_glazing"><span class="swipe-info">
                                                Свайпайте чтобы <br> посмотреть все цвета
                                            </span>
                                            <div class="texture-group extra-grid">
                                                <div class="texture-item<?= (isset($_GET['furnitem_extra-grid2']) and $_GET['furnitem_extra-grid2'] == 'extra-grid-item1') ? ' active' : '' ?>" id="extra-grid-item1" onclick="chooseExtraGrid('extra-grid-item1')" data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item1" data-furnitem_extra-grid2="extra-grid-item1" data-price="23600" data-image="" data-order="1">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image asia property-texture grille_glazing base" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/extra-grid-img-1.jpg);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">23 600 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Тип 1</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item2" data-furnitem_extra-grid2="extra-grid-item2" data-price="23600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['furnitem_extra-grid2']) and $_GET['furnitem_extra-grid2'] == 'extra-grid-item2') ? ' active' : '' ?>" id="extra-grid-item2" onclick="chooseExtraGrid('extra-grid-item2')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_3 property-texture grille_glazing base" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/extra-grid-img-5.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">23 600 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Тип 2</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item3" data-furnitem_extra-grid2="extra-grid-item3" data-price="23600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['furnitem_extra-grid2']) and $_GET['furnitem_extra-grid2'] == 'extra-grid-item3') ? ' active' : '' ?>" id="extra-grid-item3" onclick="chooseExtraGrid('extra-grid-item3')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_4 property-texture grille_glazing base" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/extra-grid-img-6.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">23 600 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Тип 3</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item4" data-furnitem_extra-grid2="extra-grid-item4" data-price="23600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['furnitem_extra-grid2']) and $_GET['furnitem_extra-grid2'] == 'extra-grid-item4') ? ' active' : '' ?>" id="extra-grid-item4" onclick="chooseExtraGrid('extra-grid-item4')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_new property-texture grille_glazing base" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/extra-grid-img-new.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">23 600 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Тип 4</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-4step-loops-type">
                            <button type="button" class="btn accordion-header" id='close-button-4step-3' onclick="closeblock('aria-step4-loops-type', 'close-button-4step-3', 'checkbox-4step-loops-type')">
                                <span class="accordion-head">Тип петель</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step4-loops-type">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group door-hinges">
                                            <div data-variable-name="hinges" data-variable-value="furn-hinges-item1" data-hinges="furn-hinges-item1" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['hinges']) and $_GET['hinges'] == 'furn-hinges-item1') ? ' active' : '' ?>" id="furn-hinges-item1" onclick="chooseHinges('furn-hinges-item1')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/hinges/hinges-img-1.webp);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">С петлями</div>
                                                <div class="furniture-item-title">Базовое</div>
                                            </div>
                                            <div data-variable-name="hinges" data-variable-value="furn-hinges-item2" data-hinges="furn-hinges-item2" data-price="26600" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['hinges']) and $_GET['hinges'] == 'furn-hinges-item2') ? ' active' : '' ?>" id="furn-hinges-item2" onclick="chooseHinges('furn-hinges-item2')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country it"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/hinges/hinges-img-2.webp);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Скрытые петли</div>
                                                <div class="furniture-item-title">26 600 ₽</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="step" id="step__2" btn="">
                        <div class="step-header">
                            <div class="step-header-title">
                                <div class="title">Цвет металла</div>
                            </div>
                            <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-call" href="javascript:;">
                                <span>Помощь менеджера</span>
                            </button>
                        </div>


                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-2step-metcol">
                            <button type="button" class="btn accordion-header" id='close-button-2step-2' onclick="closeblock('aria-step2-metcol', 'close-button-2step-2', 'checkbox-2step-metcol')">
                                <span class="accordion-head">Наружная сторона</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step2-metcol">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group">
                                            <div class="tabs-group-item tabs-2">
                                                <div class="tab active tab-2" id="btn-coltype-in-1" onclick="metalColTypeIn1()">Полимерное покрытие</div>
                                                <div class="tab tab-2 unfinished" id="btn-coltype-in-2" onclick="metalColTypeIn2()">Эмаль (в разработке)</div>
                                            </div>


                                            <hr>
                                            <div class="tabs-group-body">
                                                <div>
                                                    <div class="tabs-group-body-1 furniture-group aсtive">
                                                        <div class="cfg-image-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/banner-met.jpg); background-size: cover;">
                                                            <div class="cfg-image-banner-info">
                                                                <div>
                                                                    <p class="cfg-image-banner-title">Полимерная покраска</p>
                                                                </div>
                                                                <p class="cfg-image-banner-descr">Полимерно-порошковая покраска с эффектом матовый металлик или муар. Тактильно муар можно сравнить с эффектом наждачной бумаги.</p>
                                                            </div>
                                                        </div>

                                                        <hr>

                                                        <div><span class="swipe-info">Свайпайте чтобы посмотреть все цвета</span>
                                                            <div class="texture-group met-col">
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol1" data-metalcolin="btncol1" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol1') ? ' active' : '' ?>" id="btncol1" onclick="metalColIn('btncol1')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23119 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">Базовое</div>
                                                                    </div>
                                                                    <div class="texture-title">N23119</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol2" data-metalcolin="btncol2" data-price="5400" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol2') ? ' active' : '' ?>" id="btncol2" onclick="metalColIn('btncol2')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23039 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23039</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol3" data-metalcolin="btncol3" data-price="5400" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol3') ? ' active' : '' ?>" id="btncol3" onclick="metalColIn('btncol3')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23239 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23239</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol4" data-metalcolin="btncol4" data-price="5400" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol4') ? ' active' : '' ?>" id="btncol4" onclick="metalColIn('btncol4')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n43009 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N43009</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol5" data-metalcolin="btncol5" data-price="15000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol5') ? ' active' : '' ?>" id="btncol5" onclick="metalColIn('btncol5')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image sx3019 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">15 000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">SX3019</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol6" data-metalcolin="btncol6" data-price="5400" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol6') ? ' active' : '' ?>" id="btncol6" onclick="metalColIn('btncol6')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23129 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23129</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol7" data-metalcolin="btncol7" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol7') ? ' active' : '' ?>" id="btncol7" onclick="metalColIn('btncol7')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23219 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23219</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol8" data-metalcolin="btncol8" data-price="5400" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol8') ? ' active' : '' ?>" id="btncol8" onclick="metalColIn('btncol8')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image r23009 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">R23009</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol9" data-metalcolin="btncol9" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol9') ? ' active' : '' ?>" id="btncol9" onclick="metalColIn('btncol9')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23019 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23019</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol10" data-metalcolin="btncol10" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol10') ? ' active' : '' ?>" id="btncol10" onclick="metalColIn('btncol10')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23049 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23049</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol11" data-metalcolin="btncol11" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol11') ? ' active' : '' ?>" id="btncol11" onclick="metalColIn('btncol11')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23109 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23109</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol12" data-metalcolin="btncol12" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol12') ? ' active' : '' ?>" id="btncol12" onclick="metalColIn('btncol12')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23079 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23079</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol13" data-metalcolin="btncol13" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol13') ? ' active' : '' ?>" id="btncol13" onclick="metalColIn('btncol13')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23089 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23089</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol14" data-metalcolin="btncol14" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol14') ? ' active' : '' ?>" id="btncol14" onclick="metalColIn('btncol14')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23099 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23099</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol15" data-metalcolin="btncol15" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol15') ? ' active' : '' ?>" id="btncol15" onclick="metalColIn('btncol15')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23009 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23009</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol16" data-metalcolin="btncol16" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol16') ? ' active' : '' ?>" id="btncol16" onclick="metalColIn('btncol16')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23139 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23139</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol17" data-metalcolin="btncol17" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol17') ? ' active' : '' ?>" id="btncol17" onclick="metalColIn('btncol17')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23189 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23189</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol18" data-metalcolin="btncol18" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol18') ? ' active' : '' ?>" id="btncol18" onclick="metalColIn('btncol18')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23149 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23149</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol19" data-metalcolin="btncol19" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol19') ? ' active' : '' ?>" id="btncol19" onclick="metalColIn('btncol19')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23209 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23209</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol20" data-active="false" data-metalcolin="btncol20" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol20') ? ' active' : '' ?>" id="btncol20" onclick="metalColIn('btncol20')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23159 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23159</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol21" data-metalcolin="btncol21" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol21') ? ' active' : '' ?>" id="btncol21" onclick="metalColIn('btncol21')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23179 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23179</div>
                                                                </div>


                                                                <div data-variable-name="metalcolin" data-variable-value="btncol22" data-metalcolin="btncol22" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol22') ? ' active' : '' ?>" id="btncol22" onclick="metalColIn('btncol22')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23059 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23059</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol23" data-metalcolin="btncol23" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol23') ? ' active' : '' ?>" id="btncol23" onclick="metalColIn('btncol23')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23229 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23229</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol24" data-metalcolin="btncol24" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol24') ? ' active' : '' ?>" id="btncol24" onclick="metalColIn('btncol24')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23069 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23069</div>
                                                                </div>
                                                                <div data-variable-name="metalcolin" data-variable-value="btncol25" data-metalcolin="btncol25" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolin']) and $_GET['metalcolin'] == 'btncol25') ? ' active' : '' ?>" id="btncol25" onclick="metalColIn('btncol25')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image sa3039 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">SA3039</div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabs-group-body-2 furniture-group" style="display: none;">
                                                        <div class="cfg-image-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/banner-met.jpg); background-size: cover;">
                                                            <div class="cfg-image-banner-info">
                                                                <div>
                                                                    <p class="cfg-image-banner-title">Автоэмаль</p>
                                                                </div>
                                                                <p class="cfg-image-banner-descr">Это несколько слоёв полимерных покрытий, цинкосодержащий антикоррозийный полимерный грунт AkzoNobel и слой декоративной эмали.</p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div><span class="swipe-info">Свайпайте чтобы посмотреть все цвета</span>
                                                            <div class="texture-group met-col">
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem1" data-metalcolinemal="btncolem1" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem1') ? ' active' : '' ?>" id="btncolem1" onclick="metalColInEmal('btncolem1')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23119 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">Базовое</div>
                                                                    </div>
                                                                    <div class="texture-title">N23119</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem2" data-metalcolinemal="btncolem2" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem2') ? ' active' : '' ?>" id="btncolem2" onclick="metalColInEmal('btncolem2')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23039 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23039</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem3" data-metalcolinemal="btncolem3" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem3') ? ' active' : '' ?>" id="btncolem3" onclick="metalColInEmal('btncolem3')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23239 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23239</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem4" data-metalcolinemal="btncolem4" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem4') ? ' active' : '' ?>" id="btncolem4" onclick="metalColInEmal('btncolem4')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n43009 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N43009</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem5" data-metalcolinemal="btncolem5" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem5') ? ' active' : '' ?>" id="btncolem5" onclick="metalColInEmal('btncolem5')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image sx3019 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">15 000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">SX3019</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem6" data-metalcolinemal="btncolem6" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem6') ? ' active' : '' ?>" id="btncolem6" onclick="metalColInEmal('btncolem6')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23129 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23129</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem7" data-metalcolinemal="btncolem7" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem7') ? ' active' : '' ?>" id="btncolem7" onclick="metalColInEmal('btncolem7')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23219 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23219</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem8" data-metalcolinemal="btncolem8" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem8') ? ' active' : '' ?>" id="btncolem8" onclick="metalColInEmal('btncolem8')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image r23009 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">R23009</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem9" data-metalcolinemal="btncolem9" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem9') ? ' active' : '' ?>" id="btncolem9" onclick="metalColInEmal('btncolem9')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23019 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23019</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem10" data-metalcolinemal="btncolem10" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem10') ? ' active' : '' ?>" id="btncolem10" onclick="metalColInEmal('btncolem10')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23049 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23049</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem11" data-metalcolinemal="btncolem11" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem11') ? ' active' : '' ?>" id="btncolem11" onclick="metalColInEmal('btncolem11')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23109 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23109</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem12" data-metalcolinemal="btncolem12" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem12') ? ' active' : '' ?>" id="btncolem12" onclick="metalColInEmal('btncolem12')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23079 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23079</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem13" data-metalcolinemal="btncolem13" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem13') ? ' active' : '' ?>" id="btncolem13" onclick="metalColInEmal('btncolem13')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23089 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23089</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem14" data-metalcolinemal="btncolem14" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem14') ? ' active' : '' ?>" id="btncolem14" onclick="metalColInEmal('btncolem14')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23099 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23099</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem15" data-metalcolinemal="btncolem15" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem15') ? ' active' : '' ?>" id="btncolem15" onclick="metalColInEmal('btncolem15')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23009 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23009</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem16" data-metalcolinemal="btncolem16" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem16') ? ' active' : '' ?>" id="btncolem16" onclick="metalColInEmal('btncolem16')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23139 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23139</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem17" data-metalcolinemal="btncolem17" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem17') ? ' active' : '' ?>" id="btncolem17" onclick="metalColInEmal('btncolem17')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23189 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23189</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem18" data-metalcolinemal="btncolem18" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem18') ? ' active' : '' ?>" id="btncolem18" onclick="metalColInEmal('btncolem18')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23149 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23149</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem19" data-metalcolinemal="btncolem19" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem19') ? ' active' : '' ?>" id="btncolem19" onclick="metalColInEmal('btncolem19')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23209 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23209</div>
                                                                </div>
                                                                <div data-variable-name="metalcolinem" data-variable-value="btncolem20" data-metalcolinemal="btncolem20" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolinem']) and $_GET['metalcolinem'] == 'btncolem20') ? ' active' : '' ?>" id="btncolem20" onclick="metalColInEmal('btncolem20')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23159 property-texture color_out  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23159</div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-metcol">
                            <button type="button" class="btn accordion-header" id='close-button-3step-2' onclick="closeblock('aria-step3-metcol', 'close-button-3step-2', 'checkbox-3step-metcol')">
                                <span class="accordion-head">Внутренняя сторона</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step3-metcol">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group">
                                            <div class="tabs-group-item tabs-2">
                                                <div class="tab tab-2 active" id="btn-coltype-out-1" onclick="metalColTypeOut1()">Полимерное покрытие</div>
                                                <div class="tab tab-2 unfinished" id="btn-coltype-out-2" onclick="metalColTypeOut2()">Эмаль (в разработке)</div>
                                            </div>

                                            <hr>

                                            <div class="tabs-group-body">
                                                <div>
                                                    <div class="tabs-group-body-1-indoor">
                                                        <div class="cfg-image-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/banner-met.jpg); background-size: cover;">
                                                            <div class="cfg-image-banner-info">
                                                                <div>
                                                                    <p class="cfg-image-banner-title">Полимерная покраска</p>
                                                                </div>
                                                                <p class="cfg-image-banner-descr">Полимерно-порошковая покраска с эффектом матовый металлик или муар. Тактильно муар можно сравнить с эффектом наждачной бумаги.</p>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <div>
                                                            <span class="swipe-info">
                                                                Свайпайте чтобы посмотреть все цвета
                                                            </span>
                                                            <div class="texture-group met-col">
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout1" data-metalcolout="btncolout1" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout1') ? ' active' : '' ?>" id="btncolout1" onclick="metalColOut('btncolout1')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23119 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">N23119</div>
                                                                    </div>
                                                                    <div class="texture-title">Bronze</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout2" data-metalcolout="btncolout2" data-price="5400" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout2') ? ' active' : '' ?>" id="btncolout2" onclick="metalColOut('btncolout2')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23039 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23039</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout3" data-metalcolout="btncolout3" data-price="5400" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout3') ? ' active' : '' ?>" id="btncolout3" onclick="metalColOut('btncolout3')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23239 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23239</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout4" data-metalcolout="btncolout4" data-price="5400" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout4') ? ' active' : '' ?>" id="btncolout4" onclick="metalColOut('btncolout4')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n43009 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N43009</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout5" data-metalcolout="btncolout5" data-price="15000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout5') ? ' active' : '' ?>" id="btncolout5" onclick="metalColOut('btncolout5')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image sx3019 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">15 000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">SX3019</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout6" data-metalcolout="btncolout6" data-price="5400" data-image="" data-order="1" class="texture-item" id="btncolout6<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout6') ? ' active' : '' ?>" onclick="metalColOut('btncolout6')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23129 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23129</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout7" data-metalcolout="btncolout7" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout7') ? ' active' : '' ?>" id="btncolout7" onclick="metalColOut('btncolout7')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23219 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23219</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout8" data-metalcolout="btncolout8" data-price="5400" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout8') ? ' active' : '' ?>" id="btncolout8" onclick="metalColOut('btncolout8')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image r23009 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">R23009</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout9" data-metalcolout="btncolout9" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout9') ? ' active' : '' ?>" id="btncolout9" onclick="metalColOut('btncolout9')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23019 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23019</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout10" data-metalcolout="btncolout10" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout10') ? ' active' : '' ?>" id="btncolout10" onclick="metalColOut('btncolout10')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23049 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23049</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout11" data-metalcolout="btncolout11" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout11') ? ' active' : '' ?>" id="btncolout11" onclick="metalColOut('btncolout11')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23109 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23109</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout12" data-metalcolout="btncolout12" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout12') ? ' active' : '' ?>" id="btncolout12" onclick="metalColOut('btncolout12')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23079 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23079</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout13" data-metalcolout="btncolout13" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout13') ? ' active' : '' ?>" id="btncolout13" onclick="metalColOut('btncolout13')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23089 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23089</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout14" data-metalcolout="btncolout14" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout14') ? ' active' : '' ?>" id="btncolout14" onclick="metalColOut('btncolout14')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23099 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23099</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout15" data-metalcolout="btncolout15" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout15') ? ' active' : '' ?>" id="btncolout15" onclick="metalColOut('btncolout15')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23009 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23009</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout16" data-active="false" data-metalcolout="btncolout16" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout16') ? ' active' : '' ?>" id="btncolout16" onclick="metalColOut('btncolout16')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23139 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23139</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout17" data-active="false" data-metalcolout="btncolout17" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout17') ? ' active' : '' ?>" id="btncolout17" onclick="metalColOut('btncolout17')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23189 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23189</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout18" data-metalcolout="btncolout18" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout18') ? ' active' : '' ?>" id="btncolout18" onclick="metalColOut('btncolout18')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23149 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23149</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout19" data-metalcolout="btncolout19" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout19') ? ' active' : '' ?>" id="btncolout19" onclick="metalColOut('btncolout19')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23209 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23209</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout20" data-metalcolout="btncolout20" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout20') ? ' active' : '' ?>" id="btncolout20" onclick="metalColOut('btncolout20')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23159 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23159</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout21" data-metalcolout="btncolout21" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout21') ? ' active' : '' ?>" id="btncolout21" onclick="metalColOut('btncolout21')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23179 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23179</div>
                                                                </div>



                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout22" data-metalcolout="btncolout22" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout22') ? ' active' : '' ?>" id="btncolout22" onclick="metalColOut('btncolout22')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23059 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23059</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout23" data-metalcolout="btncolout23" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout23') ? ' active' : '' ?>" id="btncolout23" onclick="metalColOut('btncolout23')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23229 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23229</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout24" data-metalcolout="btncolout24" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout24') ? ' active' : '' ?>" id="btncolout24" onclick="metalColOut('btncolout24')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23069 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23069</div>
                                                                </div>
                                                                <div data-variable-name="metalcolout" data-variable-value="btncolout25" data-metalcolout="btncolout25" data-price="6000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcolout']) and $_GET['metalcolout'] == 'btncolout25') ? ' active' : '' ?>" id="btncolout25" onclick="metalColOut('btncolout25')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image sa3039 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">SA3039</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tabs-group-body-2-indoor" style="display: none;">
                                                        <div class="cfg-image-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/banner-met.jpg); background-size: cover;">
                                                            <div class="cfg-image-banner-info">
                                                                <div>
                                                                    <p class="cfg-image-banner-title">Автоэмаль</p>
                                                                </div>
                                                                <p class="cfg-image-banner-descr">Это несколько слоёв полимерных покрытий, цинкосодержащий антикоррозийный полимерный грунт AkzoNobel и слой декоративной эмали.</p>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <div>
                                                            <span class="swipe-info">
                                                                Свайпайте чтобы посмотреть все цвета
                                                            </span>
                                                            <div class="texture-group met-col">
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem1" data-metalcoloutem="btncoloutem1" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem1') ? ' active' : '' ?>" id="btncoloutem1" onclick="metalColOutEmal('btncoloutem1')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23119 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">N23119</div>
                                                                    </div>
                                                                    <div class="texture-title">Bronze</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem2" data-metalcoloutem="btncoloutem2" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem2') ? ' active' : '' ?>" id="btncoloutem2" onclick="metalColOutEmal('btncoloutem2')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23039 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23039</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem3" data-metalcoloutem="btncoloutem3" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem3') ? ' active' : '' ?>" id="btncoloutem3" onclick="metalColOutEmal('btncoloutem3')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23239 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23239</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem4" data-metalcoloutem="btncoloutem4" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem4') ? ' active' : '' ?>" id="btncoloutem4" onclick="metalColOutEmal('btncoloutem4')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n43009 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N43009</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem5" data-metalcoloutem="btncoloutem5" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem5') ? ' active' : '' ?>" id="btncoloutem5" onclick="metalColOutEmal('btncoloutem5')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image sx3019 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">15 000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">SX3019</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem6" data-metalcoloutem="btncoloutem6" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem6') ? ' active' : '' ?>" id="btncoloutem6" onclick="metalColOutEmal('btncoloutem6')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23129 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23129</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem7" data-metalcoloutem="btncoloutem7" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem7') ? ' active' : '' ?>" id="btncoloutem7" onclick="metalColOutEmal('btncoloutem7')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23219 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23219</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem8" data-metalcoloutem="btncoloutem8" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem8') ? ' active' : '' ?>" id="btncoloutem8" onclick="metalColOutEmal('btncoloutem8')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image r23009 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">5400 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">R23009</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem9" data-metalcoloutem="btncoloutem9" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem9') ? ' active' : '' ?>" id="btncoloutem9" onclick="metalColOutEmal('btncoloutem9')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23019 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23019</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem10" data-metalcoloutem="btncoloutem10" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem10') ? ' active' : '' ?>" id="btncoloutem10" onclick="metalColOutEmal('btncoloutem10')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23049 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23049</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem11" data-metalcoloutem="btncoloutem11" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem11') ? ' active' : '' ?>" id="btncoloutem11" onclick="metalColOutEmal('btncoloutem11')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23109 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23109</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem12" data-metalcoloutem="btncoloutem12" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem12') ? ' active' : '' ?>" id="btncoloutem12" onclick="metalColOutEmal('btncoloutem12')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23079 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23079</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem13" data-metalcoloutem="btncoloutem13" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem13') ? ' active' : '' ?>" id="btncoloutem13" onclick="metalColOutEmal('btncoloutem13')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23089 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23089</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem14" data-metalcoloutem="btncoloutem14" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem14') ? ' active' : '' ?>" id="btncoloutem14" onclick="metalColOutEmal('btncoloutem14')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23099 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23099</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem15" data-metalcoloutem="btncoloutem15" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem15') ? ' active' : '' ?>" id="btncoloutem15" onclick="metalColOutEmal('btncoloutem15')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23009 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23009</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem16" data-metalcoloutem="btncoloutem16" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem16') ? ' active' : '' ?>" id="btncoloutem16" onclick="metalColOutEmal('btncoloutem16')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23139 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23139</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem17" data-metalcoloutem="btncoloutem17" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem17') ? ' active' : '' ?>" id="btncoloutem17" onclick="metalColOutEmal('btncoloutem17')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23189 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23189</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem18" data-metalcoloutem="btncoloutem18" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem18') ? ' active' : '' ?>" id="btncoloutem18" onclick="metalColOutEmal('btncoloutem18')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23149 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23149</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem19" data-metalcoloutem="btncoloutem19" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem19') ? ' active' : '' ?>" id="btncoloutem19" onclick="metalColOutEmal('btncoloutem19')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23209 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23209</div>
                                                                </div>
                                                                <div data-variable-name="metalcoloutem" data-variable-value="btncoloutem20" data-metalcoloutem="btncoloutem20" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['metalcoloutem']) and $_GET['metalcoloutem'] == 'btncoloutem20') ? ' active' : '' ?>" id="btncoloutem20" onclick="metalColOutEmal('btncoloutem20')">
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image n23159 property-texture color_in  base">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">6000 ₽</div>
                                                                    </div>
                                                                    <div class="texture-title">N23159</div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step" id="step__3" btn="">
                        <div class="step-header">
                            <div class="step-header-title">
                                <div class="title">Панель МДФ</div>
                            </div>
                            <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-call" href="javascript:;">
                                <span>Помощь менеджера</span>
                            </button>
                        </div>

                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-style1" style='display: flex;'>
                            <button type="button" class="btn accordion-header" id='close-button-3step-3' onclick='closeblock("aria-step3-style1", "close-button-3step-3", "checkbox-3step-style1" )'>
                                <span class="accordion-head">
                                    Стиль
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step3-style1">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-btn-group-wrapper">
                                            <button data-variable-name="indoorstylesmilled" data-variable-value="1" data-indoorstylesmilled="1" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?= (isset($_GET['indoorstylesmilled']) and $_GET['indoorstylesmilled'] == '1') ? ' active' : '' ?>" id='btn3step1-1' onclick="indoorStylesMilled()">
                                                <span>
                                                    <em>Фрезерованная</em>
                                                    <em>Decoline, Collori, Woodline</em>
                                                </span>
                                            </button>
                                            <button data-variable-name="indoorstylespanel" data-variable-value="1" data-indoorstylespanel="1" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?= ((isset($_GET['indoorstylespanel']) and $_GET['indoorstylespanel'] == '1') and ((isset($_GET['outdoorstyles']) and ($_GET['outdoorstyles'] == 'classic' or  $_GET['outdoorstyles'] == 'baguette')))) ? ' active' : '' ?>" id='btn3step1-2' onclick="indoorStylesPanel()">
                                                <span>
                                                    <em>Панель гладкая</em>
                                                    <em>Все, кроме Metal</em>
                                                </span>
                                            </button>
                                            <button data-variable-name="indoorstylesmirror" data-variable-value="1" data-indoorstylespanel="1" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?= (isset($_GET['indoorstylesmirror']) and $_GET['indoorstylesmirror'] == '1') ? ' active' : '' ?>" id='btn3step1-3' onclick="indoorStylesMirror()">
                                                <span>
                                                    <em>С зеркалом</em>
                                                    <em>Все, кроме Metal</em>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-mirror" <?= (isset($_GET['indoorstylesmirror']) and $_GET['indoorstylesmirror'] == '1') ? '' : 'style="display: none;"' ?>>
                            <button type="button" class="btn accordion-header" id='close-button-3step-4' onclick='closeblock("aria-step3-mirror", "close-button-3step-4", "checkbox-3step-mirror")'>
                                <span class="accordion-head">
                                    Вид зеркала
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <!---->
                            <div id="aria-step3-mirror">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div>
                                            <div class="tabs-group">
                                                <div class="tabs-group-item tabs-2">
                                                    <div data-variable-name="milledmirror" data-variable-value="1" data-milledmirror="1" data-price="0" data-image="" data-order="1" class="tab tab-2<?= (isset($_GET['milledmirror']) and $_GET['milledmirror'] == '1') ? ' active' : '' ?>" id='milled-mirror-btn' onclick="milledmirror()">
                                                        Фрезерованная панель с зеркалом
                                                    </div>
                                                    <div data-variable-name="panelmirror" data-variable-value="1" data-panelmirror="1" data-price="0" data-image="" data-order="1" class="tab tab-2<?= (isset($_GET['panelmirror']) and $_GET['panelmirror'] == '1') ? ' active' : '' ?>" id='panel-mirror-btn' onclick="panelmirror()">
                                                        Гладкая панель с зеркалом
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="tabs-group-body" id="milled-mirror-block" <?= (isset($_GET['milledmirror']) and $_GET['milledmirror'] == '1') ? '' : 'style="display: none;"' ?>>
                                                    <div>
                                                        <div class="milling-group">
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin1" data-typemirrorin="btn-mirrorin1" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemirrorin']) and $_GET['typemirrorin'] == 'btn-mirrorin9') ? ' active' : '' ?>" id='btn-mirrorin1' onclick='typeMirrorIn("btn-mirrorin1")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/mirror/1.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">ZF-MDF 001</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin2" data-typemirrorin="btn-mirrorin2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['milledmirror']) and $_GET['milledmirror'] == 'btn-mirrorin2') ? ' active' : '' ?>" id='btn-mirrorin2' onclick='typeMirrorIn("btn-mirrorin2")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/mirror/2.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">ZF-MDF 002</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin3" data-typemirrorin="btn-mirrorin3" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['milledmirror']) and $_GET['milledmirror'] == 'btn-mirrorin3') ? ' active' : '' ?>" id='btn-mirrorin3' onclick='typeMirrorIn("btn-mirrorin3")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/mirror/3.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">ZF-MDF 003</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin4" data-typemirrorin="btn-mirrorin4" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['milledmirror']) and $_GET['milledmirror'] == 'btn-mirrorin4') ? ' active' : '' ?>" id='btn-mirrorin4' onclick='typeMirrorIn("btn-mirrorin4")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/mirror/4.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">ZF-MDF 004</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin5" data-typemirrorin="btn-mirrorin5" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['milledmirror']) and $_GET['milledmirror'] == 'btn-mirrorin5') ? ' active' : '' ?>" id='btn-mirrorin5' onclick='typeMirrorIn("btn-mirrorin5")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/mirror/5.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">ZF-MDF 005</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin6" data-typemirrorin="btn-mirrorin6" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['milledmirror']) and $_GET['milledmirror'] == 'btn-mirrorin6') ? ' active' : '' ?>" id='btn-mirrorin6' onclick='typeMirrorIn("btn-mirrorin6")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/mirror/6.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">ZF-MDF 006</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin7" data-typemirrorin="btn-mirrorin7" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['milledmirror']) and $_GET['milledmirror'] == 'btn-mirrorin7') ? ' active' : '' ?>" id='btn-mirrorin7' onclick='typeMirrorIn("btn-mirrorin7")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/mirror/7.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">ZF-MDF 007</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin8" data-typemirrorin="btn-mirrorin8" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['milledmirror']) and $_GET['milledmirror'] == 'btn-mirrorin8') ? ' active' : '' ?>" id='btn-mirrorin8' onclick='typeMirrorIn("btn-mirrorin8")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/mirror/8.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">ZF-MDF 008</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div class="cfg-option-changer-wrapper">
                                                            <div class="cfg-option-changer-title">
                                                                Цвет зеркала
                                                            </div>
                                                        </div>
                                                        <div><span class="swipe-info">
                                                                Свайпайте чтобы <br> посмотреть все цвета
                                                            </span>
                                                            <div class="texture-group">
                                                                <div data-variable-name="typemirrorcolIn" data-variable-value="btn-mirrorcolin1" data-typemirrorcolIn="btn-mirrorcolin1" data-price="9200" data-image="" data-order="1" class="texture-item<?= (isset($_GET['typemirrorcolIn']) and $_GET['typemirrorcolIn'] == 'btn-mirrorcolin1') ? ' active' : '' ?>" id='btn-mirrorcolin1' onclick='typeMirrorColIn("btn-mirrorcolin1")'>
                                                                    <!---->
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image standart property-texture inset inset z001">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">9200 ₽</div>
                                                                        <!---->
                                                                    </div>
                                                                    <div class="texture-title">Стандарт</div>
                                                                </div>
                                                                <div data-variable-name="typemirrorcolIn" data-variable-value="btn-mirrorcolin2" data-typemirrorcolIn="btn-mirrorcolin2" data-price="11800" data-image="" data-order="1" class="texture-item<?= (isset($_GET['typemirrorcolIn']) and $_GET['typemirrorcolIn'] == 'btn-mirrorcolin2') ? ' active' : '' ?>" id='btn-mirrorcolin2' onclick='typeMirrorColIn("btn-mirrorcolin2")'>
                                                                    <!---->
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image kofe property-texture inset inset z001">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">11 800 ₽</div>
                                                                        <!---->
                                                                    </div>
                                                                    <div class="texture-title">Кофе</div>
                                                                </div>
                                                                <div data-variable-name="typemirrorcolIn" data-variable-value="btn-mirrorcolin3" data-typemirrorcolIn="btn-mirrorcolin3" data-price="13800" data-image="" data-order="1" class="texture-item<?= (isset($_GET['typemirrorcolIn']) and $_GET['typemirrorcolIn'] == 'btn-mirrorcolin3') ? ' active' : '' ?>" id='btn-mirrorcolin3' onclick='typeMirrorColIn("btn-mirrorcolin3")'>
                                                                    <!---->
                                                                    <div class="texture-image-cover">
                                                                        <div class="texture-image grafit property-texture inset inset z001">
                                                                            <div class="image"></div>
                                                                        </div>
                                                                        <div class="texture-price">13 800 ₽</div>
                                                                        <!---->
                                                                    </div>
                                                                    <div class="texture-title">Графит</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-group-body" id="panel-mirror-block" <?= (isset($_GET['panelmirror']) and $_GET['panelmirror'] == '1') ? '' : 'style="display: none;"' ?>>
                                                <div>
                                                    <div class="milling-group">
                                                        <div>
                                                            <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin9" data-typemirrorin="btn-mirrorin9" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemirrorin']) and $_GET['typemirrorin'] == 'btn-mirrorin9') ? ' active' : '' ?>" id='btn-mirrorin9' onclick='typeMirrorIn("btn-mirrorin9")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/mirror/9.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">ZG-MDF 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin10" data-typemirrorin="btn-mirrorin10" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemirrorcolIn']) and $_GET['typemirrorcolIn'] == 'btn-mirrorin10') ? ' active' : '' ?>" id='btn-mirrorin10' onclick='typeMirrorIn("btn-mirrorin10")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/mirror/10.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">ZG-MDF 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                    </div>
                                                    <div class="cfg-option-changer-wrapper">
                                                        <div class="cfg-option-changer-title">
                                                            Цвет зеркала
                                                        </div>
                                                    </div>
                                                    <div><span class="swipe-info">
                                                            Свайпайте чтобы <br> посмотреть все цвета
                                                        </span>
                                                        <div class="texture-group">
                                                            <div data-variable-name="typemirrorcolin" data-variable-value="btn-mirrorcolin4" data-typemirrorcolin="btn-mirrorcolin4" data-price="9200" data-image="" data-order="1" class="texture-item<?= (isset($_GET['typemirrorcolin']) and $_GET['typemirrorcolIn'] == 'btn-mirrorcolin4') ? ' active' : '' ?>" id='btn-mirrorcolin4' onclick='typeMirrorColIn("btn-mirrorcolin4")'>
                                                                <!---->
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image standart property-texture inset inset z009">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">9200 ₽</div>
                                                                    <!---->
                                                                </div>
                                                                <div class="texture-title">Стандарт</div>
                                                            </div>
                                                            <div data-variable-name="typemirrorcolin" data-variable-value="btn-mirrorcolin5" data-active="false" data-typemirrorcolin="btn-mirrorcolin5" data-price="11800" data-image="" data-order="1" class="texture-item<?= (isset($_GET['typemirrorcolin']) and $_GET['typemirrorcolIn'] == 'btn-mirrorcolin5') ? ' active' : '' ?>" id='btn-mirrorcolin5' onclick='typeMirrorColIn("btn-mirrorcolin5")'>
                                                                <!---->
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image kofe property-texture inset inset z009">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">11 800 ₽</div>
                                                                    <!---->
                                                                </div>
                                                                <div class="texture-title">Кофе</div>
                                                            </div>
                                                            <div data-variable-name="typemirrorcolin" data-variable-value="btn-mirrorcolin6" data-active="false" data-typemirrorcolin="btn-mirrorcolin6" data-price="13800" data-image="" data-order="1" class="texture-item<?= (isset($_GET['typemirrorcolin']) and $_GET['typemirrorcolIn'] == 'btn-mirrorcolin6') ? ' active' : '' ?>" id='btn-mirrorcolin6' onclick='typeMirrorColIn("btn-mirrorcolin6")'>
                                                                <!---->
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image grafit property-texture inset inset z009">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">13 800 ₽</div>
                                                                    <!---->
                                                                </div>
                                                                <div class="texture-title">Графит</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-milled">
                            <button type="button" class="btn accordion-header" id='close-button-3step-5' onclick='closeblock("aria-step3-milled", "close-button-3step-5", "checkbox-3step-milled" )'>
                                <span class="accordion-head">
                                    Фрезеровка
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id='aria-step3-milled'>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group" withoutscroll="true">
                                            <div class="tabs-group-item tabs-2">
                                                <div data-variable-name="classicmilled" data-variable-value="1" data-classicmilled="1" data-price="0" data-image="" data-order="1" class="tab tab-2<?= (isset($_GET['classicmilled']) and $_GET['classicmilled'] == '1') ? ' active' : '' ?>" id="classicmilled-btn" onclick="classicmilled()">
                                                    Классический стиль
                                                </div>
                                                <div data-variable-name="modernmilled" data-variable-value="1" data-modernmilled="1" data-price="0" data-image="" data-order="1" class="tab tab-2<?= (isset($_GET['modernmilled']) and $_GET['modernmilled'] == '1') ? ' active' : '' ?>" id="modernmilled-btn" onclick="modernmilled()">
                                                    Современный стиль
                                                </div>
                                            </div>

                                            <hr>



                                            <div class="tabs-group-body" id="classicmilled-block" <?= (isset($_GET['classicmilled']) and $_GET['classicmilled'] == '1') ? '' : 'style="display: none;"' ?>>
                                                <div>
                                                    <div class="milling-group">
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic1" data-typemilledoutclassic="btn-milled-classic1" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic1') ? ' active' : '' ?>" id='btn-milled-classic1' onclick='typeMilledOutClassic("btn-milled-classic1")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/1.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic2" data-typemilledoutclassic="btn-milled-classic2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic2') ? ' active' : '' ?>" id='btn-milled-classic2' onclick='typeMilledOutClassic("btn-milled-classic2")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/2.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic3" data-typemilledoutclassic="btn-milled-classic3" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic3') ? ' active' : '' ?>" id='btn-milled-classic3' onclick='typeMilledOutClassic("btn-milled-classic3")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/3.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 003</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic4" data-typemilledoutclassic="btn-milled-classic4" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic4') ? ' active' : '' ?>" id='btn-milled-classic4' onclick='typeMilledOutClassic("btn-milled-classic4")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/4.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 004</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic5" data-typemilledoutclassic="btn-milled-classic5" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic5') ? ' active' : '' ?>" id='btn-milled-classic5' onclick='typeMilledOutClassic("btn-milled-classic5")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/5.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 005</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic6" data-typemilledoutclassic="btn-milled-classic6" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic6') ? ' active' : '' ?>" id='btn-milled-classic6' onclick='typeMilledOutClassic("btn-milled-classic6")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/6.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 006</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic7" data-typemilledoutclassic="btn-milled-classic7" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic7') ? ' active' : '' ?>" id='btn-milled-classic7' onclick='typeMilledOutClassic("btn-milled-classic7")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/7.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 007</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic8" data-typemilledoutclassic="btn-milled-classic8" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic8') ? ' active' : '' ?>" id='btn-milled-classic8' onclick='typeMilledOutClassic("btn-milled-classic8")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/8.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 008</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic9" data-typemilledoutclassic="btn-milled-classic9" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic9') ? ' active' : '' ?>" id='btn-milled-classic9' onclick='typeMilledOutClassic("btn-milled-classic9")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/9.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 009</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic10" data-typemilledoutclassic="btn-milled-classic10" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic10') ? ' active' : '' ?>" id='btn-milled-classic10' onclick='typeMilledOutClassic("btn-milled-classic10")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/10.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 010</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic11" data-typemilledoutclassic="btn-milled-classic11" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic11') ? ' active' : '' ?>" id='btn-milled-classic11' onclick='typeMilledOutClassic("btn-milled-classic11")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/11.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 009</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic12" data-typemilledoutclassic="btn-milled-classic12" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic12') ? ' active' : '' ?>" id='btn-milled-classic12' onclick='typeMilledOutClassic("btn-milled-classic12")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/12.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 010</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic13" data-typemilledoutclassic="btn-milled-classic13" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic13') ? ' active' : '' ?>" id='btn-milled-classic13' onclick='typeMilledOutClassic("btn-milled-classic13")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/13.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 013</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic14" data-typemilledoutclassic="btn-milled-classic14" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic14') ? ' active' : '' ?>" id='btn-milled-classic14' onclick='typeMilledOutClassic("btn-milled-classic14")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/14.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 014</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic15" data-typemilledoutclassic="btn-milled-classic15" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic15') ? ' active' : '' ?>" id='btn-milled-classic15' onclick='typeMilledOutClassic("btn-milled-classic15")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/15.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 015</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic16" data-typemilledoutclassic="btn-milled-classic16" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic16') ? ' active' : '' ?>" id='btn-milled-classic16' onclick='typeMilledOutClassic("btn-milled-classic16")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/16.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 016</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic17" data-typemilledoutclassic="btn-milled-classic17" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic17') ? ' active' : '' ?>" id='btn-milled-classic17' onclick='typeMilledOutClassic("btn-milled-classic17")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/17.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 017</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic18" data-typemilledoutclassic="btn-milled-classic18" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic18') ? ' active' : '' ?>" id='btn-milled-classic18' onclick='typeMilledOutClassic("btn-milled-classic18")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/18.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 018</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic19" data-typemilledoutclassic="btn-milled-classic19" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic19') ? ' active' : '' ?>" id='btn-milled-classic19' onclick='typeMilledOutClassic("btn-milled-classic19")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/19.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 019</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic20" data-typemilledoutclassic="btn-milled-classic20" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic20') ? ' active' : '' ?>" id='btn-milled-classic20' onclick='typeMilledOutClassic("btn-milled-classic20")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/20.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 020</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic21" data-typemilledoutclassic="btn-milled-classic21" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic21') ? ' active' : '' ?>" id='btn-milled-classic21' onclick='typeMilledOutClassic("btn-milled-classic21")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/21.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 021</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic22" data-typemilledoutclassic="btn-milled-classic22" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic22') ? ' active' : '' ?>" id='btn-milled-classic22' onclick='typeMilledOutClassic("btn-milled-classic22")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/22.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 022</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic23" data-typemilledoutclassic="btn-milled-classic23" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic23') ? ' active' : '' ?>" id='btn-milled-classic23' onclick='typeMilledOutClassic("btn-milled-classic23")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/23.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 023</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic24" data-typemilledoutclassic="btn-milled-classic24" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic24') ? ' active' : '' ?>" id='btn-milled-classic24' onclick='typeMilledOutClassic("btn-milled-classic24")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/24.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 024</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic25" data-typemilledoutclassic="btn-milled-classic25" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic25') ? ' active' : '' ?>" id='btn-milled-classic25' onclick='typeMilledOutClassic("btn-milled-classic25")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/25.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 025</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic26" data-typemilledoutclassic="btn-milled-classic26" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic26') ? ' active' : '' ?>" id='btn-milled-classic26' onclick='typeMilledOutClassic("btn-milled-classic26")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/26.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 026</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic27" data-typemilledoutclassic="btn-milled-classic27" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic27') ? ' active' : '' ?>" id='btn-milled-classic27' onclick='typeMilledOutClassic("btn-milled-classic27")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/27.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 027</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic28" data-typemilledoutclassic="btn-milled-classic28" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic28') ? ' active' : '' ?>" id='btn-milled-classic28' onclick='typeMilledOutClassic("btn-milled-classic28")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/28.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 028</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic29" data-typemilledoutclassic="btn-milled-classic29" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic29') ? ' active' : '' ?>" id='btn-milled-classic29' onclick='typeMilledOutClassic("btn-milled-classic29")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/29.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 029</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic30" data-typemilledoutclassic="btn-milled-classic30" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic30') ? ' active' : '' ?>" id='btn-milled-classic30' onclick='typeMilledOutClassic("btn-milled-classic30")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/30.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 030</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic31" data-typemilledoutclassic="btn-milled-classic31" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic31') ? ' active' : '' ?>" id='btn-milled-classic31' onclick='typeMilledOutClassic("btn-milled-classic31")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/31.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 031</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic32" data-typemilledoutclassic="btn-milled-classic32" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic32') ? ' active' : '' ?>" id='btn-milled-classic32' onclick='typeMilledOutClassic("btn-milled-classic32")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/32.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 032</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic33" data-typemilledoutclassic="btn-milled-classic33" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic33') ? ' active' : '' ?>" id='btn-milled-classic33' onclick='typeMilledOutClassic("btn-milled-classic33")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/33.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 033</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic34" data-typemilledoutclassic="btn-milled-classic34" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic34') ? ' active' : '' ?>" id='btn-milled-classic34' onclick='typeMilledOutClassic("btn-milled-classic34")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/34.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 034</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic35" data-typemilledoutclassic="btn-milled-classic35" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic35') ? ' active' : '' ?>" id='btn-milled-classic35' onclick='typeMilledOutClassic("btn-milled-classic35")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/35.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 035</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic36" data-typemilledoutclassic="btn-milled-classic36" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic36') ? ' active' : '' ?>" id='btn-milled-classic36' onclick='typeMilledOutClassic("btn-milled-classic36")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/36.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 036</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic37" data-typemilledoutclassic="btn-milled-classic37" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic37') ? ' active' : '' ?>" id='btn-milled-classic37' onclick='typeMilledOutClassic("btn-milled-classic37")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/37.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 037</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic38" data-typemilledoutclassic="btn-milled-classic38" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic38') ? ' active' : '' ?>" id='btn-milled-classic38' onclick='typeMilledOutClassic("btn-milled-classic38")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/38.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 038</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic39" data-typemilledoutclassic="btn-milled-classic39" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutclassic']) and $_GET['typemilledoutclassic'] == 'btn-milled-classic39') ? ' active' : '' ?>" id='btn-milled-classic39' onclick='typeMilledOutClassic("btn-milled-classic39")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/39.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FK-MDF 039</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-group-body" id="modernmilled-block" <?= (isset($_GET['modernmilled']) and $_GET['modernmilled'] == '1') ? '' : 'style="display: none;"' ?>>
                                                <div>
                                                    <div class="milling-group">
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern1" data-typemilledoutmodern="btn-milled-modern1" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern1') ? ' active' : '' ?>" id='btn-milled-modern1' onclick='typeMilledOutModern("btn-milled-modern1")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/40.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern2" data-typemilledoutmodern="btn-milled-modern2" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern2') ? ' active' : '' ?>" id='btn-milled-modern2' onclick='typeMilledOutModern("btn-milled-modern2")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/41.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern3" data-typemilledoutmodern="btn-milled-modern3" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern3') ? ' active' : '' ?>" id='btn-milled-modern3' onclick='typeMilledOutModern("btn-milled-modern3")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/42.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 003</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern4" data-typemilledoutmodern="btn-milled-modern4" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern4') ? ' active' : '' ?>" id='btn-milled-modern4' onclick='typeMilledOutModern("btn-milled-modern4")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/43.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 004</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern5" data-typemilledoutmodern="btn-milled-modern5" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern5') ? ' active' : '' ?>" id='btn-milled-modern5' onclick='typeMilledOutModern("btn-milled-modern5")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/44.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 005</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern6" data-typemilledoutmodern="btn-milled-modern6" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern6') ? ' active' : '' ?>" id='btn-milled-modern6' onclick='typeMilledOutModern("btn-milled-modern6")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/45.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 006</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern7" data-typemilledoutmodern="btn-milled-modern7" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern7') ? ' active' : '' ?>" id='btn-milled-modern7' onclick='typeMilledOutModern("btn-milled-modern7")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/46.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 007</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern8" data-typemilledoutmodern="btn-milled-modern8" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern8') ? ' active' : '' ?>" id='btn-milled-modern8' onclick='typeMilledOutModern("btn-milled-modern8")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/47.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 008</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern9" data-typemilledoutmodern="btn-milled-modern9" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern9') ? ' active' : '' ?>" id='btn-milled-modern9' onclick='typeMilledOutModern("btn-milled-modern9")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/48.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 009</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern10" data-typemilledoutmodern="btn-milled-modern10" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern10') ? ' active' : '' ?>" id='btn-milled-modern10' onclick='typeMilledOutModern("btn-milled-modern10")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/49.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 010</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern11" data-typemilledoutmodern="btn-milled-modern11" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern11') ? ' active' : '' ?>" id='btn-milled-modern11' onclick='typeMilledOutModern("btn-milled-modern11")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/50.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 011</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern12" data-typemilledoutmodern="btn-milled-modern12" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern12') ? ' active' : '' ?>" id='btn-milled-modern12' onclick='typeMilledOutModern("btn-milled-modern12")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/51.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 012</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern13" data-typemilledoutmodern="btn-milled-modern13" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern13') ? ' active' : '' ?>" id='btn-milled-modern13' onclick='typeMilledOutModern("btn-milled-modern13")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/52.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 013</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern14" data-typemilledoutmodern="btn-milled-modern14" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern14') ? ' active' : '' ?>" id='btn-milled-modern14' onclick='typeMilledOutModern("btn-milled-modern14")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/53.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 014</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern15" data-typemilledoutmodern="btn-milled-modern15" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern15') ? ' active' : '' ?>" id='btn-milled-modern15' onclick='typeMilledOutModern("btn-milled-modern15")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/54.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 015</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern16" data-typemilledoutmodern="btn-milled-modern16" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern16') ? ' active' : '' ?>" id='btn-milled-modern16' onclick='typeMilledOutModern("btn-milled-modern16")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/55.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 016</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern17" data-typemilledoutmodern="btn-milled-modern17" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern17') ? ' active' : '' ?>" id='btn-milled-modern17' onclick='typeMilledOutModern("btn-milled-modern17")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/56.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 017</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern18" data-typemilledoutmodern="btn-milled-modern18" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern18') ? ' active' : '' ?>" id='btn-milled-modern18' onclick='typeMilledOutModern("btn-milled-modern18")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/57.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 018</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern19" data-typemilledoutmodern="btn-milled-modern19" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern19') ? ' active' : '' ?>" id='btn-milled-modern19' onclick='typeMilledOutModern("btn-milled-modern19")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/58.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 019</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern20" data-typemilledoutmodern="btn-milled-modern20" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern20') ? ' active' : '' ?>" id='btn-milled-modern20' onclick='typeMilledOutModern("btn-milled-modern20")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/59.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 020</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern21" data-typemilledoutmodern="btn-milled-modern21" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern21') ? ' active' : '' ?>" id='btn-milled-modern21' onclick='typeMilledOutModern("btn-milled-modern21")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/60.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 021</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern22" data-typemilledoutmodern="btn-milled-modern22" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern22') ? ' active' : '' ?>" id='btn-milled-modern22' onclick='typeMilledOutModern("btn-milled-modern22")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/61.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 022</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern23" data-typemilledoutmodern="btn-milled-modern23" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern23') ? ' active' : '' ?>" id='btn-milled-modern23' onclick='typeMilledOutModern("btn-milled-modern23")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/62.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 023</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern24" data-typemilledoutmodern="btn-milled-modern24" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern24') ? ' active' : '' ?>" id='btn-milled-modern24' onclick='typeMilledOutModern("btn-milled-modern24")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/63.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 024</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern25" data-typemilledoutmodern="btn-milled-modern25" data-price="0" data-image="" data-order="1" class="milling-item<?= (isset($_GET['typemilledoutmodern']) and $_GET['typemilledoutmodern'] == 'btn-milled-modern25') ? ' active' : '' ?>" id='btn-milled-modern25' onclick='typeMilledOutModern("btn-milled-modern25")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/milling/64.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">FS-MDF 025</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-glazed" <?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'glazed') ? '' : 'style="display: none;"' ?>>
                            <button type="button" class="btn accordion-header" id='close-button-3step-6' onclick='closeblock("aria-step3-glazed", "close-button-3step-6", "checkbox-3step-glazed" )'>
                                <span class="accordion-head">
                                    Стиль
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <!---->
                            <div id="aria-step3-glazed">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-btn-group-wrapper"><button type="button" class="cfg-btn cfg-btn-group btn btn-normal  active btn-gradient-primary<?= (isset($_GET['outdoorstyles']) and $_GET['outdoorstyles'] == 'glazed') ? ' active' : '' ?>">
                                                <span>
                                                    <em>Со стеклом</em>
                                                    <em>Metal, Decoline, Collori, Woodline, Terma</em>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-tree-color-out" <?= (isset($_GET['outdoorstyles']) and ($_GET['outdoorstyles'] == 'milling')) ? '' : 'style="display: none;"' ?>>
                            <button type="button" class="btn accordion-header" id='close-button-3step-8' onclick='closeblock("aria-step3-tree-color-out", "close-button-3step-8", "checkbox-3step-tree-color-out" )'>
                                <span class="accordion-head">
                                    Цвет и текстура (внешняя сторона)
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step3-tree-color-out">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group panel_in tabs-hidden">
                                            <div class="tabs-group-item tabs-2">
                                                <div class="tab active tab-2">
                                                    Decoline
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="tabs-group-body">
                                                <div>
                                                    <div class="cfg-image-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/banner-pan.jpg); background-size: cover;">
                                                        <div class="cfg-image-banner-info">
                                                            <div><span class="country country-de"></span>
                                                                <p class="cfg-image-banner-title">Decoline</p>
                                                            </div>
                                                            <p class="cfg-image-banner-descr">
                                                                Немецкий эко-шпон с текстурой дерева. Верхний слой – декоративная рельефная
                                                                пленка, защищенная от термального воздействия и влаги.
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div><span class="swipe-info">
                                                            Свайпайте чтобы <br> посмотреть все цвета
                                                        </span>
                                                        <div class="texture-group">
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor1" data-doorcoloutdoor="btndoorcoloutdoor1" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor1') ? ' active' : '' ?>" id='btndoorcoloutdoor1' onclick='doorColOutdoor("btndoorcoloutdoor1")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image wenge_light property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">Базовое</div>
                                                                </div>
                                                                <div class="texture-title">Венге</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor2" data-doorcoloutdoor="btndoorcoloutdoor2" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor2') ? ' active' : '' ?>" id='btndoorcoloutdoor2' onclick='doorColOutdoor("btndoorcoloutdoor2")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image milk_light property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">Базовое</div>
                                                                </div>
                                                                <div class="texture-title">Белое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor3" data-doorcoloutdoor="btndoorcoloutdoor3" data-price="12500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor3') ? ' active' : '' ?>" id='btndoorcoloutdoor3' onclick='doorColOutdoor("btndoorcoloutdoor3")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image koniak_dub property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Коньячный дуб</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor4" data-doorcoloutdoor="btndoorcoloutdoor4" data-price="12500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor4') ? ' active' : '' ?>" id='btndoorcoloutdoor4' onclick='doorColOutdoor("btndoorcoloutdoor4")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image vanil_dub property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Ванильный дуб</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor5" data-doorcoloutdoor="btndoorcoloutdoor5" data-price="12500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor5') ? ' active' : '' ?>" id='btndoorcoloutdoor5' onclick='doorColOutdoor("btndoorcoloutdoor5")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image milk property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Милк</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor6" data-doorcoloutdoor="btndoorcoloutdoor6" data-price="12500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor6') ? ' active' : '' ?>" id='btndoorcoloutdoor6' onclick='doorColOutdoor("btndoorcoloutdoor6")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image coffee_three property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Кофейное дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor7" data-doorcoloutdoor="btndoorcoloutdoor7" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor7') ? ' active' : '' ?>" id='btndoorcoloutdoor7' onclick='doorColOutdoor("btndoorcoloutdoor7")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image grey_matt property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Серый матовый</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor8" data-doorcoloutdoor="btndoorcoloutdoor8" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor8') ? ' active' : '' ?>" id='btndoorcoloutdoor8' onclick='doorColOutdoor("btndoorcoloutdoor8")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image soft_black property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Черный матовый</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor9" data-doorcoloutdoor="btndoorcoloutdoor9" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor9') ? ' active' : '' ?>" id='btndoorcoloutdoor9' onclick='doorColOutdoor("btndoorcoloutdoor9")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image deco_grafit property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Графитовое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor10" data-doorcoloutdoor="btndoorcoloutdoor10" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor10') ? ' active' : '' ?>" id='btndoorcoloutdoor10' onclick='doorColOutdoor("btndoorcoloutdoor10")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image smoky_wood property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Дымчатое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor11" data-doorcoloutdoor="btndoorcoloutdoor11" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor11') ? ' active' : '' ?>" id='btndoorcoloutdoor11' onclick='doorColOutdoor("btndoorcoloutdoor11")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image satin property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Сатиновое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor12" data-doorcoloutdoor="btndoorcoloutdoor12" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor12') ? ' active' : '' ?>" id='btndoorcoloutdoor12' onclick='doorColOutdoor("btndoorcoloutdoor12")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image grab property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Граб белый</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor13" data-doorcoloutdoor="btndoorcoloutdoor13" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor13') ? ' active' : '' ?>" id='btndoorcoloutdoor13' onclick='doorColOutdoor("btndoorcoloutdoor13")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image bonobo property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Венге бонобо</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor14" data-doorcoloutdoor="btndoorcoloutdoor14" data-price="19600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor14') ? ' active' : '' ?>" id='btndoorcoloutdoor14' onclick='doorColOutdoor("btndoorcoloutdoor14")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image arctic_birch property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Арктическая береза</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor15" data-doorcoloutdoor="btndoorcoloutdoor15" data-price="19600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor15') ? ' active' : '' ?>" id='btndoorcoloutdoor15' onclick='doorColOutdoor("btndoorcoloutdoor15")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image chicago_concrete_2sc property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Бетон темный</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor16" data-doorcoloutdoor="btndoorcoloutdoor16" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor16') ? ' active' : '' ?>" id='btndoorcoloutdoor16' onclick='doorColOutdoor("btndoorcoloutdoor16")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image chicago_concrete_1sc property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Бетон светлый</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor17" data-doorcoloutdoor="btndoorcoloutdoor17" data-price="19600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor17') ? ' active' : '' ?>" id='btndoorcoloutdoor17' onclick='doorColOutdoor("btndoorcoloutdoor17")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image votan_eiche_natur property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Греческий платан</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor18" data-doorcoloutdoor="btndoorcoloutdoor18" data-price="19600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor18') ? ' active' : '' ?>" id='btndoorcoloutdoor18' onclick='doorColOutdoor("btndoorcoloutdoor18")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image jute property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Джут</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor19" data-doorcoloutdoor="btndoorcoloutdoor19" data-price="19600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor19') ? ' active' : '' ?>" id='btndoorcoloutdoor19' onclick='doorColOutdoor("btndoorcoloutdoor19")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image jute_white property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Джут белый</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor20" data-doorcoloutdoor="btndoorcoloutdoor20" data-price="17000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor20') ? ' active' : '' ?>" id='btndoorcoloutdoor20' onclick='doorColOutdoor("btndoorcoloutdoor20")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image soft_white property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">17 000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Белый</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor21" data-doorcoloutdoor="btndoorcoloutdoor21" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor21') ? ' active' : '' ?>" id='btndoorcoloutdoor21' onclick='doorColOutdoor("btndoorcoloutdoor21")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image brandy_oak property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Дуб бренди</div>
                                                            </div>
                                                            <div data-variable-name="doorcoloutdoor" data-variable-value="btndoorcoloutdoor22" data-doorcoloutdoor="btndoorcoloutdoor22" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcoloutdoor']) and $_GET['doorcoloutdoor'] == 'btndoorcoloutdoor22') ? ' active' : '' ?>" id='btndoorcoloutdoor22' onclick='doorColOutdoor("btndoorcoloutdoor22")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image rustic_oak property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Дуб рустик</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-tree-color" <?= (isset($_GET['outdoorstyles']) and ($_GET['outdoorstyles'] == 'baguette' or $_GET['outdoorstyles'] == 'glazed' or $_GET['outdoorstyles'] == 'classic' or $_GET['outdoorstyles'] == 'fusing')) ? '' : 'style="display: none;"' ?>>
                            <button type="button" class="btn accordion-header" id='close-button-3step-7' onclick='closeblock("aria-step3-tree-color", "close-button-3step-7", "checkbox-3step-tree-color" )'>
                                <span class="accordion-head">
                                    Цвет и текстура
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step3-tree-color">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group panel_in tabs-hidden">
                                            <div class="tabs-group-item tabs-2">
                                                <div class="tab active tab-2">
                                                    Decoline
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="tabs-group-body">
                                                <div>
                                                    <div class="cfg-image-banner" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/cnfg/banner-pan.jpg); background-size: cover;">
                                                        <div class="cfg-image-banner-info">
                                                            <div><span class="country country-de"></span>
                                                                <p class="cfg-image-banner-title">Decoline</p>
                                                            </div>
                                                            <p class="cfg-image-banner-descr">
                                                                Немецкий эко-шпон с текстурой дерева. Верхний слой – декоративная рельефная
                                                                пленка, защищенная от термального воздействия и влаги.
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <hr>

                                                    <div><span class="swipe-info">
                                                            Свайпайте чтобы <br> посмотреть все цвета
                                                        </span>
                                                        <div class="texture-group">
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout1" data-doorcolout="btndoorcolout1" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout1') ? ' active' : '' ?>" id='btndoorcolout1' onclick='doorColOut("btndoorcolout1")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image wenge_light property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">Базовое</div>
                                                                </div>
                                                                <div class="texture-title">Венге</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout2" data-doorcolout="btndoorcolout2" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout2') ? ' active' : '' ?>" id='btndoorcolout2' onclick='doorColOut("btndoorcolout2")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image milk_light property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">Базовое</div>
                                                                </div>
                                                                <div class="texture-title">Белое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout3" data-doorcolout="btndoorcolout3" data-price="12500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout3') ? ' active' : '' ?>" id='btndoorcolout3' onclick='doorColOut("btndoorcolout3")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image koniak_dub property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Коньячный дуб</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout4" data-doorcolout="btndoorcolout4" data-price="12500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout4') ? ' active' : '' ?>" id='btndoorcolout4' onclick='doorColOut("btndoorcolout4")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image vanil_dub property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Ванильный дуб</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout5" data-doorcolout="btndoorcolout5" data-price="12500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout5') ? ' active' : '' ?>" id='btndoorcolout5' onclick='doorColOut("btndoorcolout5")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image milk property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Милк</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout6" data-doorcolout="btndoorcolout6" data-price="12500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout6') ? ' active' : '' ?>" id='btndoorcolout6' onclick='doorColOut("btndoorcolout6")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image coffee_three property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Кофейное дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout7" data-doorcolout="btndoorcolout7" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout7') ? ' active' : '' ?>" id='btndoorcolout7' onclick='doorColOut("btndoorcolout7")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image grey_matt property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Серый матовый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout8" data-doorcolout="btndoorcolout8" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout8') ? ' active' : '' ?>" id='btndoorcolout8' onclick='doorColOut("btndoorcolout8")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image soft_black property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Черный матовый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout9" data-doorcolout="btndoorcolout9" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout9') ? ' active' : '' ?>" id='btndoorcolout9' onclick='doorColOut("btndoorcolout9")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image deco_grafit property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Графитовое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout10" data-doorcolout="btndoorcolout10" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout10') ? ' active' : '' ?>" id='btndoorcolout10' onclick='doorColOut("btndoorcolout10")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image smoky_wood property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Дымчатое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout11" data-doorcolout="btndoorcolout11" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout11') ? ' active' : '' ?>" id='btndoorcolout11' onclick='doorColOut("btndoorcolout11")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image satin property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Сатиновое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout12" data-doorcolout="btndoorcolout12" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout12') ? ' active' : '' ?>" id='btndoorcolout12' onclick='doorColOut("btndoorcolout12")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image grab property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Граб белый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout13" data-doorcolout="btndoorcolout13" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout13') ? ' active' : '' ?>" id='btndoorcolout13' onclick='doorColOut("btndoorcolout13")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image bonobo property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Венге бонобо</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout14" data-doorcolout="btndoorcolout14" data-price="19600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout14') ? ' active' : '' ?>" id='btndoorcolout14' onclick='doorColOut("btndoorcolout14")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image arctic_birch property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Арктическая береза</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout15" data-doorcolout="btndoorcolout15" data-price="19600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout15') ? ' active' : '' ?>" id='btndoorcolout15' onclick='doorColOut("btndoorcolout15")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image chicago_concrete_2sc property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Бетон темный</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout16" data-doorcolout="btndoorcolout16" data-price="0" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout16') ? ' active' : '' ?>" id='btndoorcolout16' onclick='doorColOut("btndoorcolout16")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image chicago_concrete_1sc property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Бетон светлый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout17" data-doorcolout="btndoorcolout17" data-price="19600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout17') ? ' active' : '' ?>" id='btndoorcolout17' onclick='doorColOut("btndoorcolout17")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image votan_eiche_natur property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Греческий платан</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout18" data-doorcolout="btndoorcolout18" data-price="19600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout18') ? ' active' : '' ?>" id='btndoorcolout18' onclick='doorColOut("btndoorcolout18")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image jute property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Джут</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout19" data-doorcolout="btndoorcolout19" data-price="19600" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout19') ? ' active' : '' ?>" id='btndoorcolout19' onclick='doorColOut("btndoorcolout19")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image jute_white property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Джут белый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout20" data-doorcolout="btndoorcolout20" data-price="17000" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout20') ? ' active' : '' ?>" id='btndoorcolout20' onclick='doorColOut("btndoorcolout20")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image soft_white property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">17 000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Белый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout21" data-doorcolout="btndoorcolout21" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout21') ? ' active' : '' ?>" id='btndoorcolout21' onclick='doorColOut("btndoorcolout21")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image brandy_oak property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Дуб бренди</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout22" data-doorcolout="btndoorcolout22" data-price="16500" data-image="" data-order="1" class="texture-item<?= (isset($_GET['doorcolout']) and $_GET['doorcolout'] == 'btndoorcolout22') ? ' active' : '' ?>" id='btndoorcolout22' onclick='doorColOut("btndoorcolout22")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image rustic_oak property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Дуб рустик</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="step" id="step__4" btn="">
                        <div class="step-header">
                            <div class="step-header-title">
                                <div class="title">Накладные элементы</div>
                            </div>
                            <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-call" href="javascript:;">
                                <span>Помощь менеджера</span>
                            </button>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-4step-doorstep">
                            <button type="button" class="btn accordion-header" id='close-button-4step-6' onclick="closeblock('aria-step4-doorstep', 'close-button-4step-6', 'checkbox-4step-doorstep')">
                                <span class="accordion-head">Порог</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step4-doorstep">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group furn-doorstep">
                                            <div data-variable-name="furnituredoorsteptype" data-variable-value="doorstep-item1" data-furnituredoorsteptype="doorstep-item1" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnituredoorsteptype']) and $_GET['furnituredoorsteptype'] == 'doorstep-item1') ? ' active' : '' ?>" id="doorstep-item1" onclick="furnitureDoorStepType('doorstep-item1')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/doorstep/doorstep-img-1.webp);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Стандартный порог</div>
                                                <div class="furniture-item-title">Базовое</div>
                                            </div>
                                            <div data-variable-name="furnituredoorsteptype" data-variable-value="doorstep-item2" data-furnituredoorsteptype="doorstep-item2" data-price="10200" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnituredoorsteptype']) and $_GET['furnituredoorsteptype'] == 'doorstep-item2') ? ' active' : '' ?>" id="doorstep-item2" onclick="furnitureDoorStepType('doorstep-item2')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/doorstep/doorstep-img-2.webp);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Накладной порог Хром</div>
                                                <div class="furniture-item-title">10 200 ₽</div>
                                            </div>
                                            <div data-variable-name="furnituredoorsteptype" data-variable-value="doorstep-item3" data-furnituredoorsteptype="doorstep-item3" data-price="12800" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnituredoorsteptype']) and $_GET['furnituredoorsteptype'] == 'doorstep-item3') ? ' active' : '' ?>" id="doorstep-item3" onclick="furnitureDoorStepType('doorstep-item3')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/doorstep/doorstep-img-3.webp);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Накладной порог Латунь</div>
                                                <div class="furniture-item-title">12 800 ₽</div>
                                            </div>
                                            <div data-variable-name="furnituredoorsteptype" data-variable-value="doorstep-item4" data-furnituredoorsteptype="doorstep-item4" data-price="21600" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnituredoorsteptype']) and $_GET['furnituredoorsteptype'] == 'doorstep-item4') ? ' active' : '' ?>" id="doorstep-item4" onclick="furnitureDoorStepType('doorstep-item4')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/doorstep/doorstep-img-4.webp);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Цельнопрофильный порог Матовый Хром
                                                </div>
                                                <div class="furniture-item-title">21 600 ₽</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-variable-name="furniture_knocker_check" data-variable-value="1" data-furniture_listtype_check="1" data-price="0" data-image="" data-order="1" class="unfinished checkbox-accordion accordion accordion--with-plus accordion-closed colored" id="checkbox-4step-knocker"><!---->
                            <div class="checkbox-accordion-header" id="close-button-4step-5" onclick="togglerKnockerStep4()">
                                <div class="title">
                                    <span>Кнокер (в разработке)</span>
                                </div>
                                <div class="checkbox-accordion-toggler">
                                    <label class="toggler">
                                        <div class="checkbox-pseudo-input<?= (isset($_GET['furniture_knocker_check'])) ? ' checked' : '' ?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div id="aria-step4-knocker" <?= (isset($_GET['furniture_knocker_check'])) ? '' : 'style="display: none;"' ?>>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group">
                                            <div data-variable-name="furnitureknockertype" data-variable-value="furn-knocker-item-4" data-furnitureknockertype="furn-knocker-item-4" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnitureknockertype']) and $_GET['furnitureknockertype'] == 'furn-knocker-item-4') ? ' active' : '' ?>" id="furn-knocker-item-4" onclick="furnitureKnockerType('furn-knocker-item-4')"><!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/onlay/onlay-img-1.webp);"></div> <!---->
                                                </div>
                                                <div class="furniture-item-title">Lion хром</div>
                                                <div class="furniture-item-title">12&nbsp;200 ₽</div>
                                            </div>
                                            <div data-variable-name="furnitureknockertype" data-variable-value="furn-knocker-item-4" data-furnitureknockertype="furn-knocker-item-4" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnitureknockertype']) and $_GET['furnitureknockertype'] == 'furn-knocker-item-4') ? ' active' : '' ?>" id="furn-knocker-item-4" onclick="furnitureKnockerType('furn-knocker-item-4')"><!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/onlay/onlay-img-1.webp);"></div> <!---->
                                                </div>
                                                <div class="furniture-item-title">Lion матовый хром</div>
                                                <div class="furniture-item-title">12&nbsp;200 ₽</div>
                                            </div>
                                            <div data-variable-name="furnitureknockertype" data-variable-value="furn-knocker-item-4" data-furnitureknockertype="furn-knocker-item-4" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnitureknockertype']) and $_GET['furnitureknockertype'] == 'furn-knocker-item-4') ? ' active' : '' ?>" id="furn-knocker-item-4" onclick="furnitureKnockerType('furn-knocker-item-4')"><!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/onlay/onlay-img-1.webp);"></div> <!---->
                                                </div>
                                                <div class="furniture-item-title">Lion латунь</div>
                                                <div class="furniture-item-title">12&nbsp;200 ₽</div>
                                            </div>
                                            <div data-variable-name="furnitureknockertype" data-variable-value="furn-knocker-item-5" data-furnitureknockertype="furn-knocker-item-5" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnitureknockertype']) and $_GET['furnitureknockertype'] == 'furn-knocker-item-5') ? ' active' : '' ?>" id="furn-knocker-item-5" onclick="furnitureKnockerType('furn-knocker-item-5')"><!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/onlay/onlay-img-1.webp);"></div> <!---->
                                                </div>
                                                <div class="furniture-item-title">Lion бронза</div>
                                                <div class="furniture-item-title">19&nbsp;000 ₽</div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-variable-name="furniture_listtype_check" data-variable-value="1" data-furniture_listtype_check="1" data-price="0" data-image="" data-order="1" class="checkbox-accordion accordion accordion--with-plus accordion-closed colored" id="checkbox-4step-plate">
                            <div class="checkbox-accordion-header" id="close-button-4step-7" onclick="togglerListStep4()">
                                <div class="title">
                                    <span>Защитная пластина</span>
                                </div>
                                <div class="checkbox-accordion-toggler">
                                    <label class="toggler">
                                        <div class="checkbox-pseudo-input<?= (isset($_GET['furniture_listtype_check'])) ? ' checked' : '' ?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div id="aria-step4-plate" <?= (isset($_GET['furniture_listtype_check'])) ? '' : 'style="display: none;"' ?>>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group list-type">
                                            <div data-variable-name="furniturelisttype" data-variable-value="furn-list-item-1" data-furniturelisttype="furn-list-item-1" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furniturelisttype']) and $_GET['furniturelisttype'] == 'furn-list-item-1') ? ' active' : '' ?>" id="furn-list-item-1" onclick="furnitureListType('furn-list-item-1')">
                                                <div class="furniture-item-image-cover"><span lass="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/onlay/onlay-img-1.webp);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Матовый хром</div>
                                                <div class="furniture-item-title">14 800 ₽</div>
                                            </div>
                                            <div data-variable-name="furniturelisttype" data-variable-value="furn-list-item-2" data-furniturelisttype="furn-list-item-2" data-price="25300" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furniturelisttype']) and $_GET['furniturelisttype'] == 'furn-list-item-2') ? ' active' : '' ?>" id="furn-list-item-2" onclick="furnitureListType('furn-list-item-2')">
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/onlay/onlay-img-2.webp);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Латунь</div>
                                                <div class="furniture-item-title">25 300 ₽</div>
                                            </div>
                                            <div data-variable-name="furniturelisttype" data-variable-value="furn-list-item-3" data-furniturelisttype="furn-list-item-3" data-price="15000" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furniturelisttype']) and $_GET['furniturelisttype'] == 'furn-list-item-3') ? ' active' : '' ?>" id="furn-list-item-3" onclick="furnitureListType('furn-list-item-3')">
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/onlay/onlay-img-3.webp);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Бронза</div>
                                                <div class="furniture-item-title">15 000 ₽</div>
                                            </div>
                                            <div data-variable-name="furniturelisttype" data-variable-value="furn-list-item-4" data-furniturelisttype="furn-list-item-4" data-price="15000" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furniturelisttype']) and $_GET['furniturelisttype'] == 'furn-list-item-4') ? ' active' : '' ?>" id="furn-list-item-4" onclick="furnitureListType('furn-list-item-4')">
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/onlay/onlay-img-4.webp);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Черный</div>
                                                <div class="furniture-item-title">15 000 ₽</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-variable-name="furniture_closer_check" data-variable-value="1" data-furniture_closer_check="1" data-price="0" data-image="" data-order="1" class="checkbox-accordion accordion accordion--with-plus colored" id="checkbox-6step-closer">
                            <!---->
                            <div class="checkbox-accordion-header" onclick="togglerCloserStep6()">
                                <div class="title">
                                    <span>Тип доводчика</span>
                                </div>
                                <div class="checkbox-accordion-toggler">
                                    <label class="toggler">
                                        <div class="checkbox-pseudo-input<?= (isset($_GET['furniture_closer_check'])) ? ' checked' : '' ?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div id="aria-step4-closer" <?= (isset($_GET['furniture_closer_check'])) ? '' : 'style="display: none;"' ?> class="closing">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group closer-items">
                                            <div data-variable-name="furnitem_closer" data-variable-value="closer-item1-step_6" data-furnitem_closerm="closer-item1-step_6" data-price="8700" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnitem_closer']) and $_GET['furnitem_closer'] == 'closer-item1-step_6') ? ' active' : '' ?>" id="closer-item1" onclick="furnItem('closer-item1', '#step__4 .closer-items .furniture-item')">
                                                <!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/closer/closer-img-1.webp);">
                                                    </div>
                                                    <!---->
                                                </div>
                                                <div class="furniture-item-title">Черный (внешний)</div>
                                                <div class="furniture-item-title">8700 ₽</div>
                                            </div>
                                            <div data-variable-name="furnitem_closer" data-variable-value="closer-item2-step_6" data-furnitem_closer="closer-item2-step_6" data-price="8700" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnitem_closer']) and $_GET['furnitem_closer'] == 'closer-item2-step_6') ? ' active' : '' ?>" id="closer-item2" onclick="furnItem('closer-item2', '#step__4 .closer-items .furniture-item')">
                                                <!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/closer/closer-img-2.webp);">
                                                    </div>
                                                    <!---->
                                                </div>
                                                <div class="furniture-item-title">Коричневый (внешний)</div>
                                                <div class="furniture-item-title">8700 ₽</div>
                                            </div>
                                            <div data-variable-name="furnitem_closer" data-variable-value="closer-item3-step_6" data-furnitem_closer="closer-item3-step_6" data-price="8700" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnitem_closer']) and $_GET['furnitem_closer'] == 'closer-item3-step_6') ? ' active' : '' ?>" id="closer-item3" onclick="furnItem('closer-item3', '#step__4 .closer-items .furniture-item')">
                                                <!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/closer/closer-img-3.webp);">
                                                    </div>
                                                    <!---->
                                                </div>
                                                <div class="furniture-item-title">Серебристый (внешний)</div>
                                                <div class="furniture-item-title">8700 ₽</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div data-variable-name="furniture_platband_check" data-variable-value="1" data-furniture_closer_check="1" data-price="0" data-image="" data-order="1" class="unfinished checkbox-accordion accordion accordion--with-plus colored" id="checkbox-4step-platband"><!---->
                            <div class="checkbox-accordion-header" onclick="togglerPlatbandStep4()">
                                <div class="title">
                                    <span>Декоративный наличник (в разработке)</span>
                                </div>
                                <div class="checkbox-accordion-toggler">
                                    <label class="toggler">
                                        <div class="checkbox-pseudo-input<?= (isset($_GET['furniture_platband_check'])) ? ' checked' : '' ?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div id="aria-step4-platband" <?= (isset($_GET['furniture_platband_check'])) ? '' : 'style="display: none;"' ?> class="closing">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group option-changer">
                                            <!-- <div class="option-changer-wrapper">
                                                <div class="cfg-option-changer-wrapper">
                                                    <div class="cfg-option-changer-title">
                                                        Ламинированная МДФ
                                                    </div>
                                                    <p class="cfg-info-icon icon-hidden">
                                                        Что это за материал?
                                                        <span class="help-item"><span class="help-item-symbol">
                                                                <div class="help-item-symbol-default"></div>
                                                            </span>
                                                            <div class="help-item-content" style="display: none;">
                                                                <div class="help-item-text"><b>Что это за материал?</b> <br>
                                                                    Влагостойкая древесно-волокнистая плита 16 мм, покрытая слоем декоративной 3D пленки. Пленка повторяет различные текстуры и защищает наличники от температурных перепадов, воды и ультрафиолета.
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div> -->

                                            <div data-variable-name="furnitem_platband" data-variable-value="platband-item1-step_4" data-furnitem_platband="platband-item1-step_4" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnitem_platband']) and $_GET['furnitem_platband'] == 'platband-item1-step_4') ? ' active' : '' ?>" id="platband-item1" onclick="furnItem('platband-item1', '#checkbox-4step-platband .furniture-item')"><!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/platband/1.webp);"></div> <!---->
                                                </div>
                                                <div class="furniture-item-title">Стандартные</div>
                                                <div class="furniture-item-title">Базовое</div>
                                            </div>
                                            <div data-variable-name="furnitem_platband" data-variable-value="platband-item2-step_4" data-furnitem_platband="platband-item2-step_4" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnitem_platband']) and $_GET['furnitem_platband'] == 'platband-item2-step_4') ? ' active' : '' ?>" id="platband-item2" onclick="furnItem('platband-item2', '#checkbox-4step-platband .furniture-item')"><!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/platband/2.webp);"></div> <!---->
                                                </div>
                                                <div class="furniture-item-title">Декоративные</div>
                                                <div class="furniture-item-title">Базовое</div>
                                            </div>
                                            <div data-variable-name="furnitem_platband" data-variable-value="platband-item3-step_4" data-furnitem_platband="platband-item3-step_4" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnitem_platband']) and $_GET['furnitem_platband'] == 'platband-item3-step_4') ? ' active' : '' ?>" id="platband-item3" onclick="furnItem('platband-item3', '#checkbox-4step-platband .furniture-item')"><!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/platband/3.webp);"></div> <!---->
                                                </div>
                                                <div class="furniture-item-title">Фигурные</div>
                                                <div class="furniture-item-title">Базовое</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-variable-name="furniture_dodings_check" data-variable-value="1" data-furniture_dodings_check="1" data-price="0" data-image="" data-order="1" class="unfinished checkbox-accordion accordion accordion--with-plus colored" id="checkbox-4step-dodings"><!---->
                            <div class="checkbox-accordion-header" onclick="togglerDodingsStep4()">
                                <div class="title">
                                    <span>Доборы (в разработке)</span>
                                </div>
                                <div class="checkbox-accordion-toggler">
                                    <label class="toggler">
                                        <div class="checkbox-pseudo-input<?= (isset($_GET['furniture_dodings_check'])) ? ' checked' : '' ?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div id="aria-step4-dodings" <?= (isset($_GET['furniture_dodings_check'])) ? '' : 'style="display: none;"' ?> class="closing">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="dodings">
                                            <div class="furniture-group option-block">

                                                <div data-variable-name="furnitem_dodings" data-variable-value="dodings-item1-step_4" data-furnitem_dodings="dodings-item1-step_4" data-price="0" data-image="" data-order="1" class="furniture-item furniture-item--big<?= (isset($_GET['furnitem_dodings']) and $_GET['furnitem_dodings'] == 'dodings-item1-step_4') ? ' active' : '' ?>" id="dodings-item1" onclick="furnItem('dodings-item1', '#checkbox-4step-dodings .furniture-item')">
                                                    <div class="furniture-item active furniture-item--big"><!---->
                                                        <div class="furniture-item-image-cover"><span class="furniture-item-image-country"></span>
                                                            <div class="furniture-item-image" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/platband/1.webp);"></div> <!---->
                                                        </div>
                                                        <div class="furniture-item-title">Стандартные</div>
                                                        <div class="furniture-item-title">Базовое</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="option-block">
                                                <div class="chooser">
                                                    <div class="chooser-block"><!---->
                                                        <div class="chooser-select">Размер доборов, мм</div>
                                                    </div>
                                                    <div class="chooser-items"></div> <select class="chooser-select-native"></select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-variable-name="extra-cornice_check" data-variable-value="1" data-extra_cornice_check="1" data-price="0" data-image="" data-order="1" class="unfinished checkbox-accordion accordion accordion--with-plus colored" id="checkbox-2step-extra-cornice">
                            <div class="checkbox-accordion-header" onclick="togglerCorniceStep4()">
                                <div class="title">
                                    <span>Карниз (в разработке)</span>
                                </div>
                                <div class="checkbox-accordion-toggler"><label class="toggler">
                                        <div class="checkbox-pseudo-input<?= (isset($_GET['extra-cornice_check'])) ? ' checked' : '' ?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div id="aria-step2-extra-cornice" <?= (isset($_GET['extra-cornice_check'])) ? '' : 'style="display: none;"' ?>>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group">
                                            <div class="furniture-item <?= (isset($_GET['furnitem_extra-grid2']) and $_GET['furnitem_extra-grid2'] == 'extra-grid-item1') ? ' active' : '' ?>" id="extra-cornice-item1" onclick="chooseExtraCornice('extra-cornice-item1')" data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item1" data-furnitem_extra-grid2="extra-grid-item1" data-price="23600" data-image="" data-order="1"><!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(&quot;<?php bloginfo('template_url'); ?>/assets/img/cnfg/cornice-img-1.jpg);"></div> <!---->
                                                </div>
                                                <div class="furniture-item-title">Металлический</div>
                                                <div class="furniture-item-title">20&nbsp;000 ₽</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="step" id="step__5" btn="">
                        <div class="step-header">
                            <div class="step-header-title">
                                <div class="title">Фурнитура</div>
                            </div>
                            <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-call" href="javascript:;">
                                <span>Помощь менеджера</span>
                            </button>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-4step-handle-color">
                            <button type="button" class="btn accordion-header" id='close-button-4step-1' onclick="closeblock('aria-step4-handle-color', 'close-button-4step-1', 'checkbox-4step-handle-color')">
                                <span class="accordion-head">Цвет</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step4-handle-color">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-color furniture-color-circle">
                                            <span class="swipe-info">Свайпайте чтобы
                                                посмотреть все цвета</span>
                                            <div class="texture-group">
                                                <div data-variable-name="furniturecol" data-variable-value="furn-col-1" data-furniturecol="furn-col-1" data-price="0" data-image="" data-order="3" class="texture-item<?= (isset($_GET['furniturecol']) and $_GET['furniturecol'] == 'furn-col-1') ? ' active' : '' ?>" id="furn-col-1" onclick="furnitureCol('furn-col-1')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image chrome property-texture furniture_color base">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Хром</div>
                                                </div>
                                                <div data-variable-name="furniturecol" data-variable-value="furn-col-2" data-furniturecol="furn-col-2" data-price="7500" data-image="" data-order="3" class="texture-item<?= (isset($_GET['furniturecol']) and $_GET['furniturecol'] == 'furn-col-2') ? ' active' : '' ?>" id="furn-col-2" onclick="furnitureCol('furn-col-2')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image chrome_mat property-texture furniture_color  base">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">7500 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Матовый хром</div>
                                                </div>
                                                <div data-variable-name="furniturecol" data-variable-value="furn-col-3" data-furniturecol="furn-col-3" data-price="9200" data-image="" data-order="3" class="texture-item<?= (isset($_GET['furniturecol']) and $_GET['furniturecol'] == 'furn-col-3') ? ' active' : '' ?>" id="furn-col-3" onclick="furnitureCol('furn-col-3')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image gold property-texture furniture_color  base">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">9200 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Латунь</div>
                                                </div>
                                                <div data-variable-name="furniturecol" data-variable-value="furn-col-4" data-furniturecol="furn-col-4" data-price="7500" data-image="" data-order="3" class="texture-item<?= (isset($_GET['furniturecol']) and $_GET['furniturecol'] == 'furn-col-4') ? ' active' : '' ?>" id="furn-col-4" onclick="furnitureCol('furn-col-4')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image bronze property-texture furniture_color  base">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">7500 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Бронза</div>
                                                </div>
                                                <div data-variable-name="furniturecol" data-variable-value="furn-col-5" data-furniturecol="furn-col-5" data-price="11500" data-image="" data-order="3" class="texture-item<?= (isset($_GET['furniturecol']) and $_GET['furniturecol'] == 'furn-col-5') ? ' active' : '' ?>" id="furn-col-5" onclick="furnitureCol('furn-col-5')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image black_mat property-texture furniture_color  base">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">11 500 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Черный</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus lock-system" id="checkbox-4step-lock-system">
                            <button type="button" class="btn accordion-header" id='close-button-5step-1' onclick="closeblock('aria-step4-lock-system', 'close-button-5step-1', 'checkbox-4step-lock-system')">
                                <span class="accordion-head">
                                    Замковая система</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step4-lock-system">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div>
                                            <div class="tabs-group" withoutscroll="true">
                                                <div class="tabs-group-item tabs-2">
                                                    <div data-variable-name="locknumber" data-variable-value="lockbtn1" data-locknumber="lockbtn1" data-price="0" data-image="" data-order="1" class="tab tab-2<?= (isset($_GET['locknumber']) and $_GET['locknumber'] == 'lockbtn1') ? ' active' : '' ?>" id="lockbtn1" onclick="lockNumber('lockbtn1')">1 замок</div>
                                                    <div data-variable-name="locknumber" data-variable-value="lockbtn2" data-locknumber="lockbtn2" data-price="0" data-image="" data-order="1" class="tab tab-2<?= (isset($_GET['locknumber']) and $_GET['locknumber'] == 'lockbtn2') ? ' active' : '' ?>" id="lockbtn2" onclick="lockNumber('lockbtn2')">2 замка</div>
                                                </div>

                                                <hr>

                                                <div class="tabs-group-body" id="lock-group-body1" <?= ((isset($_GET['locknumber']) and $_GET['locknumber'] == 'lockbtn1') or !isset($_GET['locknumber'])) ? '' : 'style="display: none"' ?>>
                                                    <div>
                                                        <div class="lock-group">
                                                            <div class="cfg-locksystem-parts">
                                                                <div class="cfg-locksystem-parts-pictures">
                                                                    <div class="cfg-locksystem-parts-pictures-item">
                                                                        <img src="https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/1/1.png" alt="" class="cfg-locksystem-parts-pictures-item-img">
                                                                    </div>
                                                                    <div class="cfg-locksystem-parts-pictures-item">
                                                                        <img src="https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/keys/2.png" alt="" class="cfg-locksystem-parts-pictures-item-img">
                                                                        <div class="cfg-locksystem-parts-pictures-item-text">Сувальдный ключ</div>
                                                                    </div>
                                                                </div>
                                                                <div class="cfg-locksystem-parts-items">
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item1" data-lockitems="cfg-lock-item1" data-price="0" data-image="" data-order="1" class="cfg-locksystem<?= ((isset($_GET['lockitems']) and $_GET['lockitems'] == 'cfg-lock-item1') or !isset($_GET['lockitems'])) ? ' active' : '' ?>" id="cfg-lock-item1" onclick="lockItems('cfg-lock-item1')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Kale сувальдный</div>
                                                                            <div class="cfg-locksystem-info-cost">0 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-turkey">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">3 класс защиты</div>
                                                                            <div class="button-standart item">односистемный</div>
                                                                            <div class="button-standart item">Сувальдный</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item2" data-lockitems="cfg-lock-item2" data-price="8300" data-image="" data-order="1" class="cfg-locksystem<?= (isset($_GET['lockitems']) and $_GET['lockitems'] == 'cfg-lock-item2') ? ' active' : '' ?>" id="cfg-lock-item2" onclick="lockItems('cfg-lock-item2')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Securemme сувальдный</div>
                                                                            <div class="cfg-locksystem-info-cost">8300 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-italy">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">4 класс защиты</div>
                                                                            <div class="button-standart item">односистемный</div>
                                                                            <div class="button-standart item">Сувальдный</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item3" data-lockitems="cfg-lock-item3" data-price="9700" data-image="" data-order="1" class="cfg-locksystem<?= (isset($_GET['lockitems']) and $_GET['lockitems'] == 'cfg-lock-item3') ? ' active' : '' ?>" id="cfg-lock-item3" onclick="lockItems('cfg-lock-item3')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Kale циллиндрический</div>
                                                                            <div class="cfg-locksystem-info-cost">9700 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-turkey">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">4 класс защиты
                                                                            </div>
                                                                            <div class="button-standart item">односистемный</div>
                                                                            <div class="button-standart item">Циллиндровый</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item4" data-lockitems="cfg-lock-item4" data-price="12000" data-image="" data-order="1" class="cfg-locksystem<?= (isset($_GET['lockitems']) and $_GET['lockitems'] == 'cfg-lock-item4') ? ' active' : '' ?>" id="cfg-lock-item4" onclick="lockItems('cfg-lock-item4')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Securemme циллиндрический</div>
                                                                            <div class="cfg-locksystem-info-cost">12 000 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-italy">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">4 класс защиты
                                                                            </div>
                                                                            <div class="button-standart item">односистемный</div>
                                                                            <div class="button-standart item">Циллиндровый</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabs-group-body" id="lock-group-body2" <?= (isset($_GET['locknumber']) and $_GET['locknumber'] == 'lockbtn2') ? '' : 'style="display: none"' ?>>
                                                    <div>
                                                        <div class="lock-group">
                                                            <div class="cfg-locksystem-parts">
                                                                <div class="cfg-locksystem-parts-pictures">
                                                                    <div class="cfg-locksystem-parts-pictures-item"><img alt="" class="cfg-locksystem-parts-pictures-item-img" src="https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/2/1.png">
                                                                    </div>
                                                                    <div class="cfg-locksystem-parts-pictures-item"><img src="https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/lock-types/keys/2.png" alt="" class="cfg-locksystem-parts-pictures-item-img">
                                                                        <div class="cfg-locksystem-parts-pictures-item-text">Сувальдный ключ</div>
                                                                    </div>
                                                                </div>
                                                                <div class="cfg-locksystem-parts-items">
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item5" data-lockitems="cfg-lock-item5" data-price="9700" data-image="" data-order="1" class="cfg-locksystem<?= (isset($_GET['lockitems']) and $_GET['lockitems'] == 'cfg-lock-item5') ? ' active' : '' ?>" id="cfg-lock-item5" onclick="lockItems('cfg-lock-item5')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Kale суввальд. + Kale суввальд.</div>
                                                                            <div class="cfg-locksystem-info-cost">9700 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-turkey">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">3 класс защиты</div>
                                                                            <div class="button-standart item">разнесенные</div>
                                                                            <div class="button-standart item">Сувальдный</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item6" data-lockitems="cfg-lock-item6" data-price="13500" data-image="" data-order="1" class="cfg-locksystem<?= (isset($_GET['lockitems']) and $_GET['lockitems'] == 'cfg-lock-item6') ? ' active' : '' ?>" id="cfg-lock-item6" onclick="lockItems('cfg-lock-item6')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Securemme сувальд. + Securemme сувальд.</div>
                                                                            <div class="cfg-locksystem-info-cost">13 500 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-italy">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">4 класс защиты</div>
                                                                            <div class="button-standart item">разнесенные</div>
                                                                            <div class="button-standart item">Сувальдный</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item7" data-lockitems="cfg-lock-item7" data-price="19600" data-image="" data-order="1" class="cfg-locksystem<?= (isset($_GET['lockitems']) and $_GET['lockitems'] == 'cfg-lock-item7') ? ' active' : '' ?>" id="cfg-lock-item7" onclick="lockItems('cfg-lock-item7')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Securemme цилинд. + Securemme суввальд.</div>
                                                                            <div class="cfg-locksystem-info-cost">19 600 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-italy">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">4 класс ащиты</div>
                                                                            <div class="button-standart item">двусистемный</div>
                                                                            <div class="button-standart item">Циллиндровый</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item8" data-lockitems="cfg-lock-item8" data-price="13700" data-image="" data-order="1" class="cfg-locksystem<?= (isset($_GET['lockitems']) and $_GET['lockitems'] == 'cfg-lock-item8') ? ' active' : '' ?>" id="cfg-lock-item8" onclick="lockItems('cfg-lock-item8')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Securemme двухсистемный замок</div>
                                                                            <div class="cfg-locksystem-info-cost">13 700 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-italy">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">4 класс защиты</div>
                                                                            <div class="button-standart item">разнесенные</div>
                                                                            <div class="button-standart item">Циллиндровый</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-4step-handle-type">
                            <button type="button" class="btn accordion-header" id='close-button-4step-2' onclick="closeblock('aria-step4-handle-type', 'close-button-4step-2', 'checkbox-4step-handle-type')">
                                <span class="accordion-head">Ручка</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step4-handle-type">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group">
                                            <div class="tabs-group-item tabs-2">
                                                <div class="tab active tab-2" id="btn-handler-1" onclick="handlerType1()">Cтандартные ручки</div>
                                                <div class=" tab tab-2" id="btn-handler-2" onclick="handlerType2()">Дизайнерские ручки</div>
                                            </div>

                                            <hr>

                                            <div class="tabs-group-body">
                                                <div>

                                                    <div class="furniture-group handler-type-1 active">
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-1" data-furnituretype="furn-item-1" data-price="0" data-image="" data-order="3" class="furniture-item furniture-item--big<?= (isset($_GET['furnituretype']) and $_GET['furnituretype'] == 'furn-item-1') ? ' active' : '' ?>" id="furn-item-1" onclick="furnitureType('furn-item-1')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country it"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-1" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-1/col-1.webp);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Arena</div>
                                                            <div class="furniture-item-title">Базовое</div>
                                                        </div>
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-2" data-furnituretype="furn-item-2" data-price="6900" data-image="" data-order="3" class="furniture-item furniture-item--big<?= (isset($_GET['furnituretype']) and $_GET['furnituretype'] == 'furn-item-2') ? ' active' : '' ?>" id="furn-item-2" onclick="furnitureType('furn-item-2')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country it"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-2" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-2/col-1.webp);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Pyramide Sircle</div>
                                                            <div class="furniture-item-title">6900 ₽</div>
                                                        </div>
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-3" data-furnituretype="furn-item-3" data-price="10200" data-image="" data-order="3" class="furniture-item furniture-item--big<?= (isset($_GET['furnituretype']) and $_GET['furnituretype'] == 'furn-item-3') ? ' active' : '' ?>" id="furn-item-3" onclick="furnitureType('furn-item-3')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country it"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-3" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-3/col-1.webp);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Pyramide Quadro</div>
                                                            <div class="furniture-item-title">10 200 ₽</div>
                                                        </div>
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-4" data-furnituretype="furn-item-4" data-price="10200" data-image="" data-order="3" class="furniture-item furniture-item--big<?= (isset($_GET['furnituretype']) and $_GET['furnituretype'] == 'furn-item-4') ? ' active' : '' ?>" id="furn-item-4" onclick="furnitureType('furn-item-4')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country de"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-4" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-4/col-1.webp);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Vitoria</div>
                                                            <div class="furniture-item-title">10 200 ₽</div>
                                                        </div>
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-5" data-furnituretype="furn-item-5" data-price="10200" data-image="" data-order="3" class="furniture-item furniture-item--big<?= (isset($_GET['furnituretype']) and $_GET['furnituretype'] == 'furn-item-5') ? ' active' : '' ?>" id="furn-item-5" onclick="furnitureType('furn-item-5')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country de"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-5" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-5/col-1.webp);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Dallas</div>
                                                            <div class="furniture-item-title">10 200 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="furniture-group handler-type-2" style="display: none;">
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-6" data-furnituretype="furn-item-6" data-price="10000" data-image="" data-order="3" class="furniture-item furniture-item--big<?= (isset($_GET['furnituretype']) and $_GET['furnituretype'] == 'furn-item-6') ? ' active' : '' ?>" id="furn-item-6" onclick="furnitureType('furn-item-6')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country it"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-6" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-6/col-1.webp);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Rania</div>
                                                            <div class="furniture-item-title">10 000 ₽</div>
                                                        </div>
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-7" data-furnituretype="furn-item-7" data-price="6900" data-image="" data-order="3" class="furniture-item furniture-item--big<?= (isset($_GET['furnituretype']) and $_GET['furnituretype'] == 'furn-item-7') ? ' active' : '' ?>" id="furn-item-7" onclick="furnitureType('furn-item-7')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country it"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-7" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-7/col-1.webp);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">SKS (100см)</div>
                                                            <div class="furniture-item-title">6900 ₽</div>
                                                        </div>
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-8" data-furnituretype="furn-item-8" data-price="6900" data-image="" data-order="3" class="furniture-item furniture-item--big<?= (isset($_GET['furnituretype']) and $_GET['furnituretype'] == 'furn-item-8') ? ' active' : '' ?>" id="furn-item-8" onclick="furnitureType('furn-item-8')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country it"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-8" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-8/col-1.webp);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">SKS (50см)</div>
                                                            <div class="furniture-item-title">6900 ₽</div>
                                                        </div>
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-9" data-furnituretype="furn-item-9" data-price="10200" data-image="" data-order="3" class="furniture-item furniture-item--big<?= (isset($_GET['furnituretype']) and $_GET['furnituretype'] == 'furn-item-9') ? ' active' : '' ?>" id="furn-item-9" onclick="furnitureType('furn-item-9')" style="display: none">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country it"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-9" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-9/col-1.webp);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">SPS (100см)</div>
                                                            <div class="furniture-item-title">10 200 ₽</div>
                                                        </div>
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-10" data-furnituretype="furn-item-10" data-price="10200" data-image="" data-order="3" class="furniture-item furniture-item--big<?= (isset($_GET['furnituretype']) and $_GET['furnituretype'] == 'furn-item-10') ? ' active' : '' ?>" id="furn-item-10" onclick="furnitureType('furn-item-10')" style="display: none">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country it"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-10" style="background-image: url(https://portamia.ru/wp-content/themes/mercato/assets/img/cnfg/handler/type-10/col-1.webp);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">SPS (50см)</div>
                                                            <div class="furniture-item-title">10 200 ₽</div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="step" id="step__6" btn="">
                        <div class="step-header">
                            <div class="step-header-title">
                                <div class="title">
                                    Другие опции
                                </div>
                            </div> <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-call" href="javascript:;">
                                <span>Помощь менеджера</span>
                            </button>
                        </div>

                        <div data-variable-name="furniture_spec_check" data-variable-value="1" data-active="false" data-furniture_spec_check="1" data-price="0" data-image="" data-order="1" class="checkbox-accordion accordion accordion--with-plus" id="checkbox-6step-specifications">
                            <button type="button" class="btn accordion-header" id="close-button-6step-3" onclick="closeblock('aria-step6-specifications', 'close-button-6step-3', 'checkbox-6step-specifications')">
                                <span class="accordion-head">
                                    Технические характеристики
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>

                            <div style="" id="aria-step6-specifications">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-option-group" items="">
                                            <div class="cfg-option-changer-wrapper">
                                                <div class="cfg-option-changer-title">
                                                    Размер двери по коробу
                                                </div>
                                            </div>
                                            <div class="cfg-btn-group-wrapper size-items size-items">
                                                <button data-variable-name="furnitem_size" data-variable-value="size-item1-step_6" data-furnitem_size="size-item1-step_6" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?= (isset($_GET['furnitem_size']) and $_GET['furnitem_size'] == 'size-item1-step_6') ? ' active' : '' ?>" id="size-item1" onclick="furnItem('size-item1', '#step__6 .size-items .btn-gradient-primary')" data-fancybox data-src="#popup__get-call" href="javascript:;">
                                                    <span>
                                                        <em>Не знаю</em>
                                                    </span>
                                                </button>
                                                <button data-variable-name="furnitem_size" data-variable-value="size-item2-step_6" data-furnitem_size="size-item2-step_6" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?= (isset($_GET['furnitem_size']) and $_GET['furnitem_size'] == 'size-item2-step_6') ? ' active' : '' ?>" id="size-item2" onclick="furnItem('size-item2', '#step__6 .size-items .btn-gradient-primary')">
                                                    <span>
                                                        <em>960 х 2050 мм</em>
                                                    </span>
                                                </button>
                                                <button data-variable-name="furnitem_size" data-variable-value="size-item3-step_6" data-furnitem_size="size-item3-step_6" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?= (isset($_GET['furnitem_size']) and $_GET['furnitem_size'] == 'size-item3-step_6') ? ' active' : '' ?>" id="size-item3" onclick="furnItem('size-item3', '#step__6 .size-items .btn-gradient-primary')">
                                                    <span>
                                                        <em>860 х 2050 мм</em>
                                                    </span>
                                                </button>
                                                <button data-variable-name="furnitem_size" data-variable-value="size-item4-step_6" data-furnitem_size="size-item4-step_6" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?= (isset($_GET['furnitem_size']) and $_GET['furnitem_size'] == 'size-item4-step_6') ? ' active' : '' ?>" id="size-item4" onclick="furnItem('size-item4', '#step__6 .size-items .btn-gradient-primary')" data-fancybox data-src="#popup__size" href="javascript:;">
                                                    <span>
                                                        <em>Свой размер, мм</em>
                                                    </span>
                                                </button>
                                            </div>

                                            <hr>

                                            <div class="cfg-option-changer-wrapper">
                                                <div class="cfg-option-changer-title">
                                                    Сторона открывания
                                                </div>
                                            </div>
                                            <div class="cfg-btn-group-wrapper side-items">
                                                <button data-variable-name="furnitem_side" data-variable-value="side-item1-step_6" data-furnitem_side="side-item1-step_6" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?= (isset($_GET['furnitem_side']) and $_GET['furnitem_side'] == 'side-item1-step_6') ? ' active' : '' ?>" id="side-item1" onclick="furnItem('side-item1', '#step__6 .side-items .btn-gradient-primary')">
                                                    <span>
                                                        <em>Правая</em>
                                                    </span>
                                                </button>
                                                <button data-variable-name="furnitem_side" data-variable-value="side-item2-step_6" data-furnitem_side="side-item2-step_6" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?= (isset($_GET['furnitem_side']) and $_GET['furnitem_side'] == 'side-item2-step_6') ? ' active' : '' ?>" id="side-item2" onclick="furnItem('side-item2', '#step__6 .side-items .btn-gradient-primary')">
                                                    <span>
                                                        <em>Левая</em>
                                                    </span>
                                                </button>
                                            </div>

                                            <hr>

                                            <div class="cfg-option-changer-wrapper">
                                                <div class="cfg-option-changer-title">
                                                    Металл двери
                                                </div>
                                            </div>
                                            <div class="cfg-btn-group-wrapper met-items">
                                                <button data-variable-name="furnitem_met" data-variable-value="met-item1-step_6" data-furnitem_met="met-item1-step_6" data-price="0" data-image="" data-order="1" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?= (isset($_GET['furnitem_met']) and $_GET['furnitem_met'] == 'met-item1-step_6') ? ' active' : '' ?>" id="met-item1" onclick="furnItem('met-item1', '#step__6 .met-items .btn-gradient-primary')">
                                                    <span>
                                                        <em>Холоднокатаная сталь
                                                            <span class="cfg-btn-cost"></span>
                                                        </em>
                                                    </span>
                                                </button>
                                                <button data-variable-name="furnitem_met" data-variable-value="met-item2-step_6" data-furnitem_met="met-item2-step_6" data-price="107900" data-image="" data-order="1" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?= (isset($_GET['furnitem_met']) and $_GET['furnitem_met'] == 'met-item2-step_6') ? ' active' : '' ?>" id="met-item2" onclick="furnItem('met-item2', '#step__6 .met-items .btn-gradient-primary')">
                                                    <span>
                                                        <em>Нержавеющая сталь (<span class="cfg-btn-cost">107 900 ₽</span>)</em>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step cfg-door-complete" id="step__7">
                        <div class="step-header">
                            <div class="step-header-title">
                                <div class="title"> Ваша дверь готова!</div>
                            </div>
                            <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-order" href="javascript:;">
                                <span>Оформить заказ</span>
                            </button>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-7step-consult">
                            <button type="button" class="btn accordion-header" id='close-button-7step-1' onclick="closeblock('aria-step7-consult', 'close-button-7step-1', 'checkbox-7step-consult')">
                                <span class="accordion-head">Консультация
                                    специалиста</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step7-consult">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-btn-group-wrapper">
                                            <button type="button" class="cfg-btn btn btn-normal btn-gradient-primary theme-accept active" data-fancybox data-src="#popup__get-order">
                                                <span>Оформить заказ</span>
                                            </button>
                                            <button type="button" class="cfg-btn btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-order">
                                                <span>Связаться с менеджером</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-7step-config">
                            <button type="button" class="btn accordion-header" id='close-button-7step-2' onclick="closeblock('aria-step7-config', 'close-button-7step-2', 'checkbox-7step-config')">
                                <span class="accordion-head">Получите конфигурацию двери</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step7-config">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-btn-group-wrapper size-items">
                                            <a href="#" id="door-cfg-download" class="cfg-btn btn btn-normal btn-primary cfg-btn-secondary">
                                                <span>Скачать в PDF формате</span>
                                            </a>
                                            <button type="button" class="cfg-btn btn btn-normal btn-primary cfg-btn-secondary" data-fancybox data-src="#popup__toemail">
                                                <span>Отправить на почту</span>
                                            </button>
                                            <a href="#" id="door-cfg-print" class="cfg-btn btn btn-normal btn-primary cfg-btn-secondary" target="_blank">
                                                <span>Распечатать</span>
                                            </a>
                                            <button type="button" class="cfg-btn btn btn-normal btn-primary cfg-btn-secondary" style="display:none" data-fancybox data-src="#popup__share">
                                                <span>Поделиться</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-7step-cheque">
                            <button type="button" class="btn accordion-header" id='close-button-7step-3' onclick="closelastblock('aria-step7-cheque', 'close-button-7step-3', 'cfg-hide', 'checkbox-7step-cheque')">
                                <span class="accordion-head">Чек двери</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div id="aria-step7-cheque"></div>
                        </div>
                        <div class="cfg-total-cost">
                            <div class="cfg-total-cost-gen">
                                <div class="cfg-total-cost-gen-title">Общая стоимость</div>
                                <div id="cfg-total-cost" class="cfg-total-cost-gen-value">--- ₽</div>
                            </div>
                            <div class="cfg-total-cost-error">Есть неизвестные параметры. Уточнитите цену у менеджера.</div>
                        </div>
                        <div class="cfg-question">
                            <div class="cfg-question-hide" id="cfg-hide" onclick="closearrowblock('aria-step7-cheque', 'cfg-hide')">Свернуть</div>
                            <div class="cfg-question-info">
                                <a href="tel:8(3532)97-24-24">
                                    <span>8 3532 97 24 24</span>
                                </a>
                                <p>Ответим на любые вопросы и поможем с выбором.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cfg-door">
                    <div class="cfg-preview big" hasblocks="">
                        <div class="cfg-preview-wrapper">
                            <div class="cfg-preview-content">
                                <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                                            <div class="container-door-preview">
                                                <div class="container-door-preview-placeholder">
                                                    <img src="/wp-content/themes/mercato/doors_parts/default/outdoor.png" class="door-preview-outdoor">
                                                    <img src="/wp-content/themes/mercato/doors_parts/default/indoor.png" class="door-preview-indoor">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cfg-price">
                            <div class="cfg-price-general">
                                <div class="cfg-price-group">
                                    <div class="cfg-price-group-cost action">
                                        <div id="cfg-price-group-cost-old" class="cfg-price-group-cost-old">--- ₽</div>
                                        <div id="cfg-price-group-cost-current" class="cfg-price-group-cost-current">--- ₽</div>
                                    </div>
                                    <div class="cfg-price-from-what">
                                        <span class="hi-me">Из чего складывается стоимость?</span>
                                        <button class="sh-me" data-fancybox data-src="#popup__cheque">Посмотреть чек двери</button>
                                    </div>
                                </div>
                                <div class="cfg-price-general-module">
                                    <div class="button-group">
                                        <a href="/?page_id=10" class="cfg-btn-service cfg-btn-close"></a>
                                        <a id="door-cfg-download-btn1" class="cfg-btn-service cfg-btn-pdf"></a>
                                        <a id="door-cfg-download-btn" style="display:none" class="cfg-btn-service cfg-btn-pdf"></a>
                                        <button class="cfg-btn-service cfg-btn-fullscreen" data-fancybox data-src="#popup__fullsize">
                                            <div class="swiper-lazy-preloader"></div>
                                        </button>
                                    </div>
                                    <div class="button-manufacture">
                                        <a href="" id="door-cfg-manufacture" data-fancybox data-src="#popup__manufacture" class="cfg-btn-service">отправить на производство</a>
                                    </div>
                                    <div style="display: none;">
                                        <div id="zoom-buttons-hidden">
                                            <div class="zoom-content"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cfg-banner-discount"></div>
                            <div class="cfg-notification">
                                По причине доработки конфигуратора оттенки цветов и стоимость дверей могут отличаться от представленных изображений и цен на сайте.
                            </div>
                        </div>
                        <div class="cfg-mobile-use">
                            <div class="cfg-swipe left">
                                Свайпните влево чтобы посмотреть другую сторону
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div id="popup__cheque" style="display: none">
        <div class="popup__share-title">Чек двери</div>
        <div class="accordion-content"></div>
    </div>

    <div id="popup__share" style="display: none">


        <div class="popup__share-title-main">
            Поделиться
        </div>
        <div class="popup__share-inner">
            <div class="popup__share-left">
                <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                            <div class="container-door-preview">
                                <div class="container-door-preview-placeholder">
                                    <img src="/wp-content/themes/mercato/doors_parts/default/outdoor.png" class="door-preview-outdoor">
                                    <img src="/wp-content/themes/mercato/doors_parts/default/indoor.png" class="door-preview-indoor">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" style="width: 267px; height: 414px">
                            <div class="container-door-preview">
                                <div class="container-door-preview-placeholder"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup__share-cost-old">96300 ₽</div>
                <div class="popup__share-cost-current">89900 ₽</div>
            </div>
            <div class="popup__share-right">
                <div class="popup__share-right">
                    <div class="popup__share-subtitle">Поделиться дверью</div>
                    <div class="popup__share-descr">Выберите соц. сеть или скопируйте ссылку, чтобы поделиться Вашей конфигурацией</div>
                    <div class="popup__share-btns">
                        <a href="#" id="vk-share" class="popup__share-btn" target="_blank">Вконтакте</a>
                        <a href="#" id="whatsapp-share" class="popup__share-btn" target="_blank">WhatsApp</a>
                        <a href="#" id="ok-share" class="popup__share-btn" target="_blank">Одноклассники</a>
                        <input type="text" name="download_link" id="popup__share-url" placeholder="Ссылка на скачивание">
                        <div class="popup__share-btn-copy default-btn" onclick="copyElementValue('popup__share-url')">Скопировать ссылку</div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div id="popup__contacts" style="display: none">
        <div class="popup__contacts-inner">
            <div class="popup__contact-title">
                Связаться с нами
            </div>
            <div class="popup__contacts-items">
                <div class="popup__contacts-item">
                    <div class="popup__contacts-phone">
                        <a id="popup__contacts-phone">+7 (353) 297-24-24</a>
                    </div>
                    <div class="popup__contacts-descr">
                        отдел продаж
                    </div>
                    <button class="popup__contacts-button default-btn for-copy-popup dontwork" id="popup__contacts-button" onclick="copyTextWithButton('popup__contacts-phone', 'popup__contacts-button')">копировать</button>
                </div>
                <div class="popup__contacts-item">
                    <div class="popup__contacts-phone">
                        <a href="#">+7 (965) 690-88-91</a>
                    </div>
                    <div class="popup__contacts-descr">
                        отдел снабжения
                    </div>
                    <button class="popup__contacts-button default-btn dontwork">копировать</button>
                </div>
                <div class="popup__contacts-item">
                    <div class="popup__contacts-phone">
                        <a href="#">+7 (961) 949-48-48</a>
                    </div>
                    <div class="popup__contacts-descr">
                        директор
                    </div>
                    <button class="popup__contacts-button default-btn dontwork">копировать</button>
                </div>
            </div>
        </div>
    </div>

    <div id="popup__fullsize" style="display: none">
        <div class="cfg-preview-wrapper">
            <div class="cfg-preview-content">
                <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                            <div class="container-door-preview">
                                <div class="container-door-preview-placeholder">
                                    <img src="/wp-content/themes/mercato/doors_parts/default/outdoor.png" class="door-preview-outdoor">
                                    <img src="/wp-content/themes/mercato/doors_parts/default/indoor.png" class="door-preview-indoor">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="popup__toemail" style="display: none">
        <div class="popup__share-inner">
            <div class="popup__share-left">
                <div class="popup__toemail-title">
                    Отправить на почту
                </div>

                <div class="popup__toemail-inner">
                    <div class="popup__toemail-left">
                        <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                                    <div class="container-door-preview">
                                        <div class="container-door-preview-placeholder">
                                            <img src="/wp-content/themes/mercato/doors_parts/default/outdoor.png" class="door-preview-outdoor">
                                            <img src="/wp-content/themes/mercato/doors_parts/default/indoor.png" class="door-preview-indoor">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup__share-cost-old">96300 ₽</div>
                        <div class="popup__share-cost-current">89900 ₽</div>
                    </div>
                    <div class="popup__toemail-right">
                        <div class="popup__toemail-subtitle">
                            Отправить спецификацию
                        </div>
                        <div class="popup__toemail-descr">
                            Введите вашу почту и мы отправим вам на e-mail полную спецификацию двери.
                        </div>
                        <div class="popup__share-btns">
                            <form>
                                <input id="mmls" type="text" name="door_cfg_email" placeholder="Электронная почта">
                                <input type="hidden" id="ems" value="" />
                                <label for="popup__toemail-checkbox" class="popup__share-checkbox">
                                    <input type="checkbox" name="door_cfg_privacy" id="popup__toemail-checkbox">
                                    Я согласен с условиями обработки персональных данных и соглашением о пользовании сайтом
                                </label>
                                <!-- <div class="popup__share-btn-copy default-btn">Получить HTML</div> -->
                                <input id="srtmail" type="submit" name="door_cfg_submit" value="Получить PDF" class="popup__share-btn-copy default-btn">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="popup__share-right">

            </div>
        </div>
    </div>


    <div id="popup__manufacture" style="display: none">
        <div class="popup__share-inner">
            <div class="popup__share-left">
                <div class="popup__manufacture-title">
                    Отправить на производство
                </div>

                <div class="popup__manufacture-inner">
                    <div class="popup__manufacture-left">
                        <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                                    <div class="container-door-preview">
                                        <div class="container-door-preview-placeholder">
                                            <img src="/wp-content/themes/mercato/doors_parts/default/outdoor.png" class="door-preview-outdoor">
                                            <img src="/wp-content/themes/mercato/doors_parts/default/indoor.png" class="door-preview-indoor">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup__share-cost-old">96300 ₽</div>
                        <div class="popup__share-cost-current">89900 ₽</div>
                    </div>
                    <div class="popup__manufacture-right">
                        <div class="popup__manufacture-subtitle">
                            Отправить спецификацию
                        </div>
                        <div class="popup__manufacture-descr">
                            Введите ваш номер телефона и мы отправим конфигурацию Вашей двери на производство, где Вы сможете заказать ее.
                        </div>
                        <div class="popup__share-btns">
                            <form>
                                <input type="text" id="pwt" name="door_cfg_phone" placeholder="Номер телефона">
                                <label for="popup__manufacture-checkbox" class="popup__share-checkbox">
                                    <input type="checkbox" name="door_cfg_privacy" id="popup__manufacture-checkbox">
                                    Я согласен с условиями обработки персональных данных и соглашением о пользовании сайтом
                                </label>
                                <!-- <div class="popup__share-btn-copy default-btn">Получить HTML</div> -->
                                <input type="hidden" id="fsit" value="" />
                                <input id="srtmail1" type="submit" name="door_cfg_submit" value="Отправить" class="popup__share-btn-copy default-btn">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="popup__share-right">

            </div>
        </div>
    </div>

    <div id="popup__size" style="display: none">
        <section class="size__section" id="size-section">
            <div class="container">
                <div class="size__inner">
                    <div class="size__block">
                        <div class="size__block-inner">
                            <div class="form__block-title">Оставить заявку</div>
                            <div class="form__block-descr">Заполните форму, и мы обязательно свяжемся с вами для уточнения данных по Вашим индивидуальным размерам двери!</div>
                            <div class="form__block-form" onclick="pickDate()">
                                <?php echo do_shortcode('[contact-form-7 id="923b1e2" title="Свой размер двери"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="popup__get-call" style="display: none">
        <section class="form__section" id="form-section">
            <div class="container">
                <div class="form__inner">
                    <div class="form__block">
                        <div class="form__block-inner">
                            <div class="form__block-title">Оставить заявку</div>
                            <div class="form__block-descr">Заполните форму, и мы обязательно свяжемся с вами!</div>
                            <div class="form__block-form" onclick="pickDate()">
                                <?php echo do_shortcode('[contact-form-7 id="52" title="Оставить заявку"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="popup__get-order" style="display: none">
        <div class="popup__call-inner">
            <div class="popup__call-title">
                Оформить заказ
            </div>
            <div class="popup__call-blocks">
                <div class="popup__call-time">
                    <div class="popup__call-time-top">
                        <div class="popup__call-time-title">Способ связи</div>
                        <div class="popup__call-time-btns">
                            <button class="later-btn popup__time-btn popup-btn-numbers active" onclick='popupGetNumbersOrder()'>
                                <div class="popup__time-btn-title ">позвонить нам</div>
                            </button>
                            <button class="later-btn popup__time-btn popup-btn-call" onclick='popupGetCallOrder()'>
                                <div class="popup__time-btn-title ">выбрать время</div>
                            </button>
                        </div>
                    </div>
                    <div class="popup__get-call-inner">
                        <div class="popup__get-call-left">
                            <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide-active">
                                        <div class="container-door-preview">
                                            <div class="container-door-preview-placeholder">
                                                <img src="/wp-content/themes/mercato/doors_parts/default/outdoor.png" class="door-preview-outdoor">
                                                <img src="/wp-content/themes/mercato/doors_parts/default/indoor.png" class="door-preview-indoor">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="popup__share-cost-old">96300 ₽</div>
                            <div class="popup__share-cost-current">89900 ₽</div>
                        </div>
                        <div class="popup__get-call-form">
                            <div class="popup__call-form">
                                <div class="popup__call-form-inner" style="display: none">
                                    <div class="popup__call-form-title">
                                        Заполните форму
                                    </div>
                                    <div class="popup__call-form-subtitle">
                                        Наш менеджер перезвонит вам в выбранное время, поможет выбрать дверь и ответит на любые вопросы.
                                    </div>
                                    <div class="popup__call-form-inputs">
                                        <form>
                                            <div class="popup__call-form-top">
                                                <div>
                                                    <label for="popup__name">Дата</label>
                                                    <select name="callback_date" id="popup__name">
                                                        <option value="today">сегодня</option>
                                                        <option value="tomorrow">завтра</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="popup__time">Время</label>
                                                    <select name="callback_time" id="popup__time">
                                                        <option value="1">11:00 - 11:30</option>
                                                        <option value="2">11:30 - 12:00</option>
                                                        <option value="3">12:00 - 12:30</option>
                                                        <option value="4">12:30 - 13:00</option>
                                                        <option value="5">13:00 - 13:30</option>
                                                        <option value="6">13:30 - 14:00</option>
                                                        <option value="7">14:00 - 14:30</option>
                                                        <option value="8">14:30 - 15:00</option>
                                                        <option value="9">15:00 - 15:30</option>
                                                        <option value="10">15:30 - 16:00</option>
                                                        <option value="11">16:00 - 16:30</option>
                                                        <option value="12">16:30 - 17:00</option>
                                                        <option value="13">17:00 - 17:30</option>
                                                        <option value="14">17:30 - 18:00</option>
                                                        <option value="15">18:00 - 18:30</option>
                                                        <option value="16">18:30 - 19:00</option>
                                                        <option value="17">19:00 - 19:30</option>
                                                        <option value="18">19:30 - 20:00</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="text" placeholder="Имя">
                                            <input type="number" placeholder="Телефон">
                                            <label for="popup__checkbox" class="popup__checkbox"><input type="checkbox" id="popup__checkbox">Я согласен с условиями обработки персональных данных и соглашением о пользовании сайтом</label>
                                            <input type="submit" name="callback_submit" value="заказать звонок" class="popup__call-form-submit popup__submit">
                                        </form>
                                    </div>
                                </div>
                                <div class="popup__call-form-inner-numbers">
                                    <div class="popup__call-form-title">
                                        Позвоните нам
                                    </div>
                                    <div class="popup__call-form-subtitle">
                                        И наш менеджер проконсультирует Вас по всем возникшим вопросам
                                    </div>
                                    <div class="vol-contacs contacts-num">
                                        <a href="tel:+7 (3532) 97-24-24">
                                            <span>+7 (3532) 97-24-24</span>
                                        </a>
                                        <div class="contacs-num-descr">(отдел продаж)</div>
                                    </div>
                                    <div class="vol-contacs contacts-num">
                                        <a href="tel:+7 (965) 690-88-91">
                                            <span>+7 (965) 690-88-91</span>
                                        </a>
                                        <div class="contacs-num-descr">(отдел снабжения)</div>
                                    </div>
                                    <div class="vol-contacs contacts-num">
                                        <a href="tel:+7 (961) 949-48-48">
                                            <span>+7 (961) 949-48-48 </span>
                                        </a>
                                        <div class="contacs-num-descr">(директор)</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#popup__get-call form, #popup__get-order form').on('submit', function(e) {

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    data: $(this).serialize(),
                    cache: false,
                    url: '/constructor-sendmail.php',
                    success: function(response) {

                        //alert(response);

                        let data = JSON.parse(response);

                        if (data.status == 1) {

                            alert(data.message);

                            $(this).find('input[name="callback_name"]').val('');
                            $(this).find('input[name="callback_phone"]').val('');

                        } else {

                            alert(data.message);

                        }

                    },
                    error: function() {

                        alert('Error!');

                    }

                });

            });

        });

        $(document).ready(function() {

            $('#popup__toemail form input[name="door_cfg_submit"]').on('click', function(e) {

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    data: {
                        door_cfg_email: $('#popup__toemail form input[name="door_cfg_email"]').val(),
                        door_cfg_privacy: $('#popup__toemail form input[name="door_cfg_privacy"]').is(':checked'),
                        door_cfg: localStorage.getItem('door_cfg')
                    },
                    cache: false,
                    url: '/constructor-send-door-cfg.php',
                    success: function(response) {

                        //alert(response);

                        let data = JSON.parse(response);

                        if (data.status == 1) {

                            alert(data.message);

                            $(this).find('input[name="door_cfg_email"]').val('');

                        } else {

                            alert(data.message);

                        }

                    },
                    error: function() {

                        alert('Error!');

                    }

                });

            });

        });
    </script>


    <?php get_footer(); ?>