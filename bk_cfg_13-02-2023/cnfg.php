<?php
/*
Template Name: Configurator

*/
?>

<?php

    if (isset($_GET['door_cfg'])) {

        //$door_cfg = json_decode($_GET['door_cfg'], true);
        
        $door_cfg = $_GET;

        print '<pre>';
        print_r($door_cfg);
        print '</pre>';

    }
    else {

        $door_cfg = array();

    }

?>

<?php get_header(); ?>

<body>
    <div class="page__title">Конфигуратор</div>
    <div class="width-wrapper height-wrapper configurator-styles without-padding cfg-container">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <div class="gridContainer content">
            <div class="cfg-body">
                <div class="cfg-door">
                    <div class="cfg-preview big" hasblocks="">
                        <div class="cfg-preview-wrapper">
                            <div class="cfg-preview-content">
                                <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                                            <div class="container-door-preview">
                                                <div class="container-door-preview-placeholder">
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII=" class="container-door-preview-img" style="background-image: url(https://img.portalle.ru/image/termo/o/1.85/0000000002w0002/i-small.png);">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" style="width: 267px; height: 414px">
                                            <div class="container-door-preview">
                                                <div class="container-door-preview-placeholder">
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII=" class="container-door-preview-img loaded" tyle="background-image: url(https://img.portalle.ru/image/termo/o/1.85/0000000002w0003/i-small.png);">
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
                                        <a id="door-cfg-download-btn1" style="display:none" class="cfg-btn-service cfg-btn-pdf"></a>
                                        <a id="door-cfg-download-btn" class="cfg-btn-service cfg-btn-pdf"></a>
                                        <button class="cfg-btn-service cfg-btn-fullscreen"  data-fancybox data-src="#popup__fullsize">
                                            <div class="swiper-lazy-preloader"></div>
                                        </button>
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
                                По причине доработки конфигуратора цены на сайте и в салонах могут отличаться
                            </div>
                        </div>
                        <div class="cfg-mobile-use">
                            <div class="cfg-swipe left">
                                Свайпните влево чтобы посмотреть другую сторону
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cfg-options" class="cfg-options">
                    <div class="step" id="step__0" btn="">
                        <h1 style="text-align: center;">Выберите модель двери</h1>
                        <div class="cfg-model-wrapper">
                            <div data-variable-name="model" data-variable-value="1" data-model="1" data-price="67800" class="cfg-model<?=((isset($_GET['model']) AND $_GET['model'] == '1') OR !isset($_GET['model'])) ? ' active' : ''?>" id="cfg-firstmodel" onclick='cfgDoorModel1()'>
                                <div class="cfg-model-inner" style="--before-bg:url(https\:\/\/portalle\.ru\/storage\/cfg-door-extend-models\/b05379a6698b5e134fb65c50eb5e3e49\.png);">
                                    <div class="cfg-model-name">
                                        <div class="cfg-model-naming">
                                            <p class="cfg-model-title">
                                                Termo
                                            </p>
                                            <span class="cfg-model-cost">
                                                от 67 800 ₽
                                            </span>
                                        </div>
                                        <div class="cfg-tooltip cfg-tooltip">
                                            металл/металл
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
                                                    72
                                                </span>
                                                <p class="info-title">
                                                    Рейтинг безоп-сти</p>
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
                                            <div class="info info-rating"><span class="info-value rating-great">Хороший
                                                </span>
                                                <p class="info-title">
                                                    — Рейтинг безоп-сти
                                                </p>
                                            </div>
                                            <div class="info info-lock"><span class="info-value">
                                                    Тур.
                                                </span>
                                                <p class="info-title">Замковая база</p>
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
                            <div data-variable-name="model" data-variable-value="2" data-model="2" data-price="79400" class="cfg-model<?=(isset($_GET['model']) AND $_GET['model'] == '2') ? ' active' : ''?>" id="cfg-secondmodel" onclick='cfgDoorModel2()'>
                                <div class="cfg-model-inner" style="--before-bg:url(https\:\/\/portalle\.ru\/storage\/cfg-door-extend-models\/cf6e9bb165ce71e9cd4f39f1be7bf3b5\.png);">
                                    <div class="cfg-model-name">
                                        <div class="cfg-model-naming">
                                            <p class="cfg-model-title">
                                                Termo Plus
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
                                            <div class="info info-lock"><span class="info-value"><span
                                                        class="country country-tr"></span></span>
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
                                            <div class="info info-rating"><span
                                                    class="info-value rating-perfect">Отличный
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
                        <div class="cfg-banner" id="cfg-banner-id">
                            <div class="cfg-banner-info">
                                <p class="cfg-banner-title">Не знаете какого размера нужна дверь?</p>
                                <p class="cfg-banner-subtitle">Ответим на любые вопросы.</p>
                            </div>
                            <div class="cfg-banner-btns">
                                <button type="button" class="btn btn-normal btn-primary btn-blur btn-inverse" data-fancybox
                            data-src="#popup__get-call" href="javascript:;">
                                    <span>Получить консультацию</span>
                                </button>
                                <button type="button" class="btn btn-normal btn-primary btn-blur btn-inverse"
                                    id='cfg-banner-button' onclick="closebanner('cfg-banner-id', 'cfg-banner-button')">
                                    <span>Закрыть</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="step" id="step__1" btn="">
                        <div class="step-header">
                            <div class="step-header-title">
                                <div class="step">Шаг <span>1</span>: </div>
                                <div class="title">Тип двери</div>
                            </div>
                            <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox
                            data-src="#popup__get-call" href="javascript:;">
                                <span>Помощь менеджера</span>
                            </button>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-1step-number-leaf">
                            <button type="button" class="btn accordion-header" id='close-button-1step-1'
                                onclick="closeblock('aria-step1-number-leaf', 'close-button-1step-1', 'checkbox-1step-number-leaf')">
                                <span class="accordion-head"><span class="step">1. </span>Тип</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded=" true" class="accordion-block" id='aria-step1-number-leaf'>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group" withoutscroll="true">
                                            <div class="tabs-group-item tabs-2">
                                                <div data-variable-name="leaf" data-variable-value="single" data-leaf="single" data-price="0" class="tab tab-2<?=((isset($_GET['leaf']) AND $_GET['leaf'] == 'single') OR !isset($_GET['leaf'])) ? ' active' : ''?>" id="singleleafdoorbutton"
                                                    onclick="singleleaf()">
                                                    Одностворчатая
                                                </div>
                                                <div data-variable-name="leaf" data-variable-value="double" data-leaf="double" data-price="0" class="tab tab-2<?=(isset($_GET['leaf']) AND $_GET['leaf'] == 'double') ? ' active' : ''?>" id="doubleleafdoorbutton" onclick="doubleleaf()">
                                                    Двустворчатая
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="tabs-group-body">
                                                <div>
                                                    <div class="furniture-group construction-body single-leaf" id="singleleafdoor" <?=((isset($_GET['leaf']) AND $_GET['leaf'] == 'single') OR !isset($_GET['leaf'])) ? '' : 'style="display: none;"'?>>
                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem1" data-leafdooritems_single="slditem1" data-price="0" class="furniture-item furniture-item--big<?=((isset($_GET['leafdooritems_single']) AND $_GET['leafdooritems_single'] == 'slditem1') OR !isset($_GET['leafdooritems_single'])) ? ' active' : ''?>" id="slditem1" onclick="leafdooritems('slditem1')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-constructs/dba6b1a0681769a1bc8c3b0fbf3d0d10.png);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Тип I</div>
                                                            <div class="furniture-item-title">Базовое</div>
                                                        </div>
                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem2" data-leafdooritems_single="slditem2" data-price="0" class="furniture-item furniture-item--big<?=(isset($_GET['leafdooritems_single']) AND $_GET['leafdooritems_single'] == 'slditem2') ? ' active' : ''?>" id="slditem2" onclick="leafdooritems('slditem2')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-constructs/733eec5f6e3494472781e9d8bce83e6d.png);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Тип II</div>
                                                            <div class="furniture-item-title">С фрамугой</div>
                                                        </div>
                                                        <div data-variable-name="leafdooritems_single" data-variable-value="slditem3" data-leafdooritems_single="slditem3" data-price="0" class="furniture-item furniture-item--big<?=(isset($_GET['leafdooritems_single']) AND $_GET['leafdooritems_single'] == 'slditem3') ? ' active' : ''?>" id="slditem3" onclick="leafdooritems('slditem3')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-constructs/a536729b3f4cb9ca84548fe1de45356e.png)">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Тип III</div>
                                                            <div class="furniture-item-title">Арочная</div>
                                                        </div>
                                                    </div>
                                                    <div class="furniture-group construction-body double-leaf" id="doubleleafdoor" <?=(isset($_GET['leaf']) AND $_GET['leaf'] == 'double') ? '' : 'style="display: none;"'?>>
                                                        <div data-variable-name="leafdooritems_double" data-variable-value="dlditem1" data-leafdooritems_double="dlditem1" data-price="0" class="furniture-item furniture-item--big<?=((isset($_GET['leafdooritems_double']) AND $_GET['leafdooritems_double'] == 'dlditem1') OR (!isset($_GET['leafdooritems_double']))) ? ' active' : ''?>" id="dlditem1" onclick="leafdooritems('dlditem1')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-constructs/343ba830d85ef96d6906054578432adf.svg);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Тип I</div>
                                                            <div class="furniture-item-title">Базовое</div>
                                                        </div>
                                                        <div data-variable-name="leafdooritems_double" data-variable-value="dlditem2" data-leafdooritems_double="dlditem2" data-price="0" class="furniture-item furniture-item--big<?=(isset($_GET['leafdooritems_double']) AND $_GET['leafdooritems_double'] == 'dlditem2') ? ' active' : ''?>" id="dlditem2" onclick="leafdooritems('dlditem2')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-constructs/6bb08739bd932f0e430104985ec6a7d8.svg);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Тип II</div>
                                                            <div class="furniture-item-title">Базовое</div>
                                                        </div>
                                                        <div data-variable-name="leafdooritems_double" data-variable-value="dlditem3" data-leafdooritems="dlditem3" data-price="0" class="furniture-item furniture-item--big<?=(isset($_GET['leafdooritems_double']) AND $_GET['leafdooritems_double'] == 'dlditem3') ? ' active' : ''?>" id="dlditem3" onclick="leafdooritems('dlditem3')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country"></span>
                                                                <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-constructs/8058b51d1a6bc2d5f60a3aedc14d8bc4.png);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Тип III</div>
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
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-1step-glass-col" <?=((isset($_GET['leafdooritems_single']) AND ($_GET['leafdooritems_single'] == 'slditem2' OR $_GET['leafdooritems_single'] == 'slditem3')) OR (isset($_GET['leafdooritems_double']) AND ($_GET['leafdooritems_double'] == 'dlditem2' OR $_GET['leafdooritems_double'] == 'dlditem3'))) ? '' : 'style="display: none;"'?>>
                            <button type="button" class="btn accordion-header" id="close-button-1step-2" onclick="closeblock('aria-step1-glass-color', 'close-button-1step-2', 'checkbox-1step-glass-col')">
                                <span class="accordion-head">
                                    <span class="step">2. </span>
                                    Цвет стекла
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step1-glass-color">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div>
                                            <span class="swipe-info">
                                                Свайпайте чтобы <br> посмотреть все цвета
                                            </span>
                                            <div class="texture-group glass-frame-col">
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item1" data-frameglasscol="glass-frame-col-item1" data-price="0" class="texture-item<?=((isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item1') OR !isset($_GET['frameglasscol'])) ? ' active' : ''?>" id="glass-frame-col-item1" onclick="chooseFrameGlassCol('glass-frame-col-item1')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image transparent property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Прозрачное</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item2" data-frameglasscol="glass-frame-col-item2" data-price="0" class="texture-item<?=(isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item2') ? ' active' : ''?>" id="glass-frame-col-item2" onclick="chooseFrameGlassCol('glass-frame-col-item2')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image matt property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Матовое</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item3" data-frameglasscol="glass-frame-col-item3" data-price="0" class="texture-item<?=(isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item3') ? ' active' : ''?>" id="glass-frame-col-item3" onclick="chooseFrameGlassCol('glass-frame-col-item3')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image charcoal property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div> 
                                                    </div>
                                                    <div class="texture-title">Угольное</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item4" data-frameglasscol="glass-frame-col-item4" data-price="0" class="texture-item<?=(isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item4') ? ' active' : ''?>" id="glass-frame-col-item4" onclick="chooseFrameGlassCol('glass-frame-col-item4')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image silver property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Серебряное</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item5" data-active="false" data-frameglasscol="glass-frame-col-item5" data-price="0" class="texture-item<?=(isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item5') ? ' active' : ''?>" id="glass-frame-col-item5" onclick="chooseFrameGlassCol('glass-frame-col-item5')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image silver_matt property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Серебряное матовое</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item6" data-frameglasscol="glass-frame-col-item6" data-price="0" class="texture-item<?=(isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item6') ? ' active' : ''?>" id="glass-frame-col-item6" onclick="chooseFrameGlassCol('glass-frame-col-item6')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image stripes property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                        
                                                    </div>
                                                    <div class="texture-title">Полосатое</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item7" data-frameglasscol="glass-frame-col-item7" data-price="0" class="texture-item<?=(isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item7') ? ' active' : ''?>" id="glass-frame-col-item7" onclick="chooseFrameGlassCol('glass-frame-col-item7')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image white_matt property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                        
                                                    </div>
                                                    <div class="texture-title">Белое матовое</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item8" data-frameglasscol="glass-frame-col-item8" data-price="0" class="texture-item<?=(isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item8') ? ' active' : ''?>" id="glass-frame-col-item8" onclick="chooseFrameGlassCol('glass-frame-col-item8')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image blue property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                        
                                                    </div>
                                                    <div class="texture-title">Голубое</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item9" data-frameglasscol="glass-frame-col-item9" data-price="0" class="texture-item<?=(isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item9') ? ' active' : ''?>" id="glass-frame-col-item9" onclick="chooseFrameGlassCol('glass-frame-col-item9')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image bronze property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                        
                                                    </div>
                                                    <div class="texture-title">Бронзовое</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item10" data-frameglasscol="glass-frame-col-item10" data-price="0" class="texture-item<?=(isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item10') ? ' active' : ''?>" id="glass-frame-col-item10" onclick="chooseFrameGlassCol('glass-frame-col-item10')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image bronze_matt property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Бронзовое матовое</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item11" data-frameglasscol="glass-frame-col-item11" data-price="0"  class="texture-item<?=(isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item11') ? ' active' : ''?>" id="glass-frame-col-item11" onclick="chooseFrameGlassCol('glass-frame-col-item11')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image green property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Зеленое</div>
                                                </div>
                                                <div data-variable-name="frameglasscol" data-variable-value="glass-frame-col-item12" data-frameglasscol="glass-frame-col-item12" data-price="0"  class="texture-item<?=(isset($_GET['frameglasscol']) AND $_GET['frameglasscol'] == 'glass-frame-col-item12') ? ' active' : ''?>" id="glass-frame-col-item12" onclick="chooseFrameGlassCol('glass-frame-col-item12')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image gold property-texture section inset glazing">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Золотое</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-variable-name="furniture_extra-grid1_check" data-variable-value="1" data-furniture_extra-grid1_check="1" data-price="0" class="checkbox-accordion accordion accordion--with-plus colored<?=((isset($_GET['leafdooritems_single']) AND ($_GET['leafdooritems_single'] == 'slditem2' OR $_GET['leafdooritems_single'] == 'slditem3')) OR (isset($_GET['leafdooritems_double']) AND ($_GET['leafdooritems_double'] == 'dlditem2' OR $_GET['leafdooritems_double'] == 'dlditem3'))) ? ' active' : ''?>" id="checkbox-1step-extra-grid" <?=((isset($_GET['leafdooritems_single']) AND ($_GET['leafdooritems_single'] == 'slditem2' OR $_GET['leafdooritems_single'] == 'slditem3')) OR (isset($_GET['leafdooritems_double']) AND ($_GET['leafdooritems_double'] == 'dlditem2' OR $_GET['leafdooritems_double'] == 'dlditem3'))) ? '' : 'style="display: none;"'?>>
                            <div class="checkbox-accordion-header" id="close-button-1step-4" onclick="togglerGridStep1()">
                                <div class="title">
                                    <div class="step">3. </div>
                                    <span>Декоративная решетка</span>
                                </div>
                                <div class="checkbox-accordion-toggler">
                                    <label class="toggler">
                                        <div class="checkbox-pseudo-input<?=(isset($_GET['furniture_extra-grid1_check'])) ? ' checked' : ''?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div aria-expanded="true" id="aria-step1-extra-grid" <?=(isset($_GET['furniture_extra-grid1_check'])) ? '' : 'style="display: none;"'?>>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="grille_glazing">
                                            <span class="swipe-info">
                                                Свайпайте чтобы <br> посмотреть все цвета
                                            </span>
                                            <div class="texture-group extra-grid">
                                                <div data-variable-name="furnitem_extra-grid1" data-variable-value="extra-grid-step1-item1-step__1" data-furnitem_extra-grid1="extra-grid-step1-item1-step__1" data-price="0" class="texture-item<?=((isset($_GET['furnitem_extra-grid1']) AND $_GET['furnitem_extra-grid1'] == 'extra-grid-step1-item1-step__1') OR !isset($_GET['furnitem_extra-grid1'])) ? ' active' : ''?>" id="extra-grid-step1-item1" onclick="furnItem('extra-grid-step1-item1', '#step__1 .extra-grid .texture-item')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image asia property-texture section_grille base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/2a02b2f050be7af42f671a9f675d2de6.jpeg);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Азия</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid1" data-variable-value="extra-grid-step1-item2-step__1" data-furnitem_extra-grid1="extra-grid-step1-item2-step__1" data-price="0" class="texture-item<?=(isset($_GET['furnitem_extra-grid1']) AND $_GET['furnitem_extra-grid1'] == 'extra-grid-step1-item2-step__1') ? ' active' : ''?>" id="extra-grid-step1-item2" onclick="furnItem('extra-grid-step1-item2', '#step__1 .extra-grid .texture-item')"><div class="texture-image-cover">
                                                        <div class="texture-image england property-texture section_grille base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/d6680533c18e1145788258c604f798ed.jpeg);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Англия</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid1" data-variable-value="extra-grid-step1-item3-step__1" data-furnitem_extra-grid1="extra-grid-step1-item3-step__1" data-price="0" class="texture-item<?=(isset($_GET['furnitem_extra-grid1']) AND $_GET['furnitem_extra-grid1'] == 'extra-grid-step1-item3-step__1') ? ' active' : ''?>" id="extra-grid-step1-item3" onclick="furnItem('extra-grid-step1-item3', '#step__1 .extra-grid .texture-item')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_1 property-texture section_grille base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/655b13eafe598df1ed34028470d1269c.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Тип 1</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid1" data-variable-value="extra-grid-step1-item4-step__1" data-furnitem_extra-grid1="extra-grid-step1-item4-step__1" data-price="0" class="texture-item<?=(isset($_GET['furnitem_extra-grid1']) AND $_GET['furnitem_extra-grid1'] == 'extra-grid-step1-item4-step__1') ? ' active' : ''?>" id="extra-grid-step1-item4" onclick="furnItem('extra-grid-step1-item4', '#step__1 .extra-grid .texture-item')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_2 property-texture section_grille base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/acb9a32b56c773a32d527d171a42f284.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Тип 2</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid1" data-variable-value="extra-grid-step1-item5-step__1" data-furnitem_extra-grid1="extra-grid-step1-item5-step__1" data-price="0" class="texture-item<?=(isset($_GET['furnitem_extra-grid1']) AND $_GET['furnitem_extra-grid1'] == 'extra-grid-step1-item2-step__5') ? ' active' : ''?>" id="extra-grid-step1-item5" onclick="furnItem('extra-grid-step1-item5', '#step__1 .extra-grid .texture-item')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_3 property-texture section_grille base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/0cc0761f5d32d5fdd04fb7d6e4cd6bc1.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Тип 3</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid1" data-variable-value="extra-grid-step1-item6-step__1" data-furnitem_extra-grid1="extra-grid-step1-item6-step__1" data-price="0" class="texture-item<?=(isset($_GET['furnitem_extra-grid1']) AND $_GET['furnitem_extra-grid1'] == 'extra-grid-step1-item6-step__1') ? ' active' : ''?>" id="extra-grid-step1-item6" onclick="furnItem('extra-grid-step1-item6', '#step__1 .extra-grid .texture-item')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_4 property-texture section_grille base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/731f200dff89bed3dbced8277b515ae5.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Тип 4</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid1" data-variable-value="extra-grid-step1-item7-step__1" data-furnitem_extra-grid1="extra-grid-step1-item7-step__1" data-price="0" class="texture-item<?=(isset($_GET['furnitem_extra-grid1']) AND $_GET['furnitem_extra-grid1'] == 'extra-grid-step1-item7-step__1') ? ' active' : ''?>" id="extra-grid-step1-item7" onclick="furnItem('extra-grid-step1-item7', '#step__1 .extra-grid .texture-item')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_5 property-texture section_grille base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/7760fd51469a47f6336e1e5c8411bfbe.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Тип 5</div>
                                                </div>
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
                                <div class="step">Шаг <span>2</span>: </div>
                                <div class="title">Внешняя сторона</div>
                            </div>
                            <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox
                            data-src="#popup__get-call" href="javascript:;">
                                <span>Помощь менеджера</span>
                            </button>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-2step-style">
                            <button type="button" class="btn accordion-header" id='close-button-2step-1'
                                onclick="closeblock('aria-step2-style', 'close-button-2step-1', 'checkbox-2step-style')">
                                <span class="accordion-head"><span class="step">1. </span>Стиль</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id='aria-step2-style'>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-btn-group-wrapper">
                                            <button data-variable-name="outdoorstyles" data-variable-value="classic" data-outdoorstyles="classic" data-price="0" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?=((isset($_GET['outdoorstyles']) AND $_GET['outdoorstyles'] == 'classic') OR !isset($_GET['outdoorstyles'])) ? ' active' : ''?>" id="btn2step1" onclick="outdoorStylesClassic()">
                                                <span>
                                                    <em>Классика</em>
                                                    <em>Metal</em>
                                                </span>
                                            </button>
                                            <button data-variable-name="outdoorstyles" data-variable-value="baguette" data-outdoorstyles="baguette" data-price="0" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?=(isset($_GET['outdoorstyles']) AND $_GET['outdoorstyles'] == 'baguette') ? ' active' : ''?>" id="btn2step2" onclick="outdoorStylesBaguette()">
                                                <span>
                                                    <em>С багетом</em>
                                                    <em>Metal</em>
                                                </span>
                                            </button>
                                            <button data-variable-name="outdoorstyles" data-variable-value="glazed" data-outdoorstyles="glazed" data-price="0" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?=(isset($_GET['outdoorstyles']) AND $_GET['outdoorstyles'] == 'glazed') ? ' active' : ''?>" id="btn2step3" onclick="outdoorStylesGlazed()">
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
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-2step-baguette" <?=(isset($_GET['outdoorstyles']) AND $_GET['outdoorstyles'] == 'baguette') ? '' : 'style="display: none;"'?>>
                            <button type="button" class="btn accordion-header" id="close-button-2step-3" onclick="closeblock('aria-step2-baguette', 'close-button-2step-3', 'checkbox-2step-baguette')">
                                <span class="accordion-head"><span class="step">2. </span>
                                    Вид багета
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id='aria-step2-baguette'>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="milling-group">
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item1-step__2" data-furnitem_baguette="baguette-item1-step__2" data-price="0" class="milling-item<?=((isset($_GET['furnitem_baguette']) AND $_GET['furnitem_baguette'] == 'baguette-item1-step__2') OR !isset($_GET['furnitem_baguette'])) ? ' active' : ''?>" id="baguette-item1" onclick="furnItem('baguette-item1', '#step__2 .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/8a86220b47b837760e67bc8542d92cde.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">F 001</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item2-step__2" data-furnitem_baguette="baguette-item2-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_baguette']) AND $_GET['furnitem_baguette'] == 'baguette-item2-step__2') ? ' active' : ''?>" id="baguette-item2" onclick="furnItem('baguette-item2', '#step__2 .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/a00c5736d510c995d3fa51d962775ec4.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">F 002</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item3-step__2" data-furnitem_baguette="baguette-item3-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_baguette']) AND $_GET['furnitem_baguette'] == 'baguette-item3-step__2') ? ' active' : ''?>" id="baguette-item3" onclick="furnItem('baguette-item3', '#step__2 .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/58416d661f209043f1fae185aa7cfda4.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">F 005</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item4-step__2" data-furnitem_baguette="baguette-item4-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_baguette']) AND $_GET['furnitem_baguette'] == 'baguette-item4-step__2') ? ' active' : ''?>" id="baguette-item4" onclick="furnItem('baguette-item4', '#step__2 .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/1f007b049eabf63fd6738695557f043a.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">F 007</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item5-step__2" data-furnitem_baguette="baguette-item5-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_baguette']) AND $_GET['furnitem_baguette'] == 'baguette-item5-step__2') ? ' active' : ''?>" id="baguette-item5" onclick="furnItem('baguette-item5', '#step__2 .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/1489472c25a76cf7b9a444f48d7e2989.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">F 008</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item6-step__2" data-furnitem_baguette="baguette-item6-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_baguette']) AND $_GET['furnitem_baguette'] == 'baguette-item6-step__2') ? ' active' : ''?>" id="baguette-item6"
                                                    onclick="furnItem('baguette-item6', '#step__2 .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/e3312cdb70e467bb197cb01202b06f45.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">F 010</div>
                                                </div>  
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item7-step__2" data-furnitem_baguette="baguette-item7-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_baguette']) AND $_GET['furnitem_baguette'] == 'baguette-item7-step__2') ? ' active' : ''?>" id="baguette-item7" onclick="furnItem('baguette-item7', '#step__2 .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/9c8ae1349511b7d6cc9e61ee622ad8c3.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">F 011</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item8-step__2" data-furnitem_baguette="baguette-item8-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_baguette']) AND $_GET['furnitem_baguette'] == 'baguette-item8-step__2') ? ' active' : ''?>" id="baguette-item8" onclick="furnItem('baguette-item8', '#step__2 .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/8a4eb35523f8e4e9034b069509cac9cf.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">I</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item9-step__2" data-furnitem_baguette="baguette-item9-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_baguette']) AND $_GET['furnitem_baguette'] == 'baguette-item9-step__2') ? ' active' : ''?>" id="baguette-item9" onclick="furnItem('baguette-item9', '#step__2 .milling-item')">
                                                    <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/b4abb334c23e2bd82e16fe828b017f30.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">II</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div data-variable-name="furnitem_baguette" data-variable-value="baguette-item10-step__2" data-furnitem_baguette="baguette-item10-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_baguette']) AND $_GET['furnitem_baguette'] == 'baguette-item10-step__2') ? ' active' : ''?>" id="baguette-item10" onclick="furnItem('baguette-item10', '#step__2 .milling-item')">
                                                <div class="milling-image-cover">
                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/35f527910d2c93a2046cd77b630fcbe1.svg);">
                                                        </div>
                                                    </div>
                                                    <div class="milling-title">III</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-2step-glass-type" <?=(isset($_GET['outdoorstyles']) AND $_GET['outdoorstyles'] == 'glazed') ? '' : 'style="display: none;"'?>>
                            <button type="button" class="btn accordion-header" id="close-button-2step4" onclick="closeblock('aria-step2-glass-type', 'close-button-2step4', 'checkbox-2step-glass-type')">
                                <span class="accordion-head">
                                    <span class="step">2. </span>
                                    Вид остекления
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step2-glass-type">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div>
                                            <div class="milling-group">
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item1-step__2" data-furnitem_glass-type="glass-type-item1-step__2" data-price="0" class="milling-item<?=((isset($_GET['furnitem_glass-type']) AND $_GET['furnitem_glass-type'] == 'glass-type-item1-step__2') OR !isset($_GET['furnitem_glass-type'])) ? ' active' : ''?>" id="glass-type-item1" onclick="furnItem('glass-type-item1', '#step__2 .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-glazings/big-nm/cef416a23aa8d3ddde52f657d3e55ef3.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">V 001</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item2-step__2" data-furnitem_glass-type="glass-type-item2-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_glass-type']) AND $_GET['furnitem_glass-type'] == 'glass-type-item2-step__2') ? ' active' : ''?>" id="glass-type-item2" onclick="furnItem('glass-type-item2', '#step__2 .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-glazings/big-nm/0c152efc88b8ea5d68d2a1532bcdc71f.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">V 002</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item3-step__2" data-furnitem_glass-type="glass-type-item3-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_glass-type']) AND $_GET['furnitem_glass-type'] == 'glass-type-item3-step__2') ? ' active' : ''?>" id="glass-type-item3" onclick="furnItem('glass-type-item3', '#step__2 .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-glazings/big-nm/09d3caf7b3fa00527fb8e6518f89ad41.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">V 003</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item4-step__2" data-furnitem_glass-type="glass-type-item4-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_glass-type']) AND $_GET['furnitem_glass-type'] == 'glass-type-item4-step__2') ? ' active' : ''?>" id="glass-type-item4" onclick="furnItem('glass-type-item4', '#step__2 .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-glazings/big-nm/45700a092622b7cc117f0697cf085f4b.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">V 004</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item5-step__2" data-furnitem_glass-type="glass-type-item5-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_glass-type']) AND $_GET['furnitem_glass-type'] == 'glass-type-item5-step__2') ? ' active' : ''?>" id="glass-type-item5" onclick="furnItem('glass-type-item5', '#step__2 .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-glazings/big-nm/e13087b614403085271e2c039c7e7a1e.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">V 005</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item6-step__2" data-furnitem_glass-type="glass-type-item6-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_glass-type']) AND $_GET['furnitem_glass-type'] == 'glass-type-item6-step__2') ? ' active' : ''?>" id="glass-type-item6" onclick="furnItem('glass-type-item6', '#step__2 .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-glazings/big-nm/dfc471604a498bcbedcf70d02395e894.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">V 009</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item7-step__2" data-furnitem_glass-type="glass-type-item7-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_glass-type']) AND $_GET['furnitem_glass-type'] == 'glass-type-item7-step__2') ? ' active' : ''?>" id="glass-type-item7" onclick="furnItem('glass-type-item7', '#step__2 .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-glazings/big-nm/0403731a83c5b6b2882a7291d2fcd44a.svg);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">V 010</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item8-step__2" data-furnitem_glass-type="glass-type-item8-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_glass-type']) AND $_GET['furnitem_glass-type'] == 'glass-type-item8-step__2') ? ' active' : ''?>" id="glass-type-item8" onclick="furnItem('glass-type-item8', '#step__2 .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-glazings/big-nm/04ff8f839e824b03dec2a744b90f8b97.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">V 011</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item9-step__2" data-furnitem_glass-type="glass-type-item9-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_glass-type']) AND $_GET['furnitem_glass-type'] == 'glass-type-item9-step__2') ? ' active' : ''?>" id="glass-type-item9" onclick="furnItem('glass-type-item9', '#step__2 .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-glazings/big-nm/1459a6b4d22fab9d1164d95bc3d02a77.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">V 012</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item10-step__2" data-furnitem_glass-type="glass-type-item10-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_glass-type']) AND $_GET['furnitem_glass-type'] == 'glass-type-item10-step__2') ? ' active' : ''?>" id="glass-type-item10" onclick="furnItem('glass-type-item10', '#step__2 .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-glazings/big-nm/0d22dcee2b3b93d59b35f4249bdffd1c.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">V 013</div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div data-variable-name="furnitem_glass-type" data-variable-value="glass-type-item11-step__2" data-furnitem_glass-type="glass-type-item11-step__2" data-price="0" class="milling-item<?=(isset($_GET['furnitem_glass-type']) AND $_GET['furnitem_glass-type'] == 'glass-type-item11-step__2') ? ' active' : ''?>" id="glass-type-item11" onclick="furnItem('glass-type-item11', '#step__2 .milling-item')">
                                                        <div class="milling-image-cover">
                                                            <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-glazings/big-nm/2083f28a216868d4a9c6a37c79e2f7c9.png);">
                                                            </div>
                                                        </div>
                                                        <div class="milling-title">V 014</div>
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
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item1" data-glasscol="glass-col-item1" data-price="25400" class="texture-item<?=((isset($_GET['glasscol']) AND $_GET['glasscol'] == 'glass-col-item1') OR !isset($_GET['glasscol'])) ? ' active' : ''?>" id="glass-col-item1" onclick="chooseGlassCol('glass-col-item1')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image transparent property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">25 400 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Прозрачное</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item2" data-glasscol="glass-col-item3" data-price="34600" class="texture-item<?=(isset($_GET['glasscol']) AND $_GET['glasscol'] == 'glass-col-item2') ? ' active' : ''?>" id="glass-col-item2" onclick="chooseGlassCol('glass-col-item2')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image charcoal property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Угольное</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item3" data-active="false" data-glasscol="glass-col-item3" data-price="34600" class="texture-item<?=(isset($_GET['glasscol']) AND $_GET['glasscol'] == 'glass-col-item3') ? ' active' : ''?>" id="glass-col-item3" onclick="chooseGlassCol('glass-col-item3')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image silver property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Серебряное</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item4" data-active="false" data-glasscol="glass-col-item4" data-price="34600" class="texture-item<?=(isset($_GET['glasscol']) AND $_GET['glasscol'] == 'glass-col-item4') ? ' active' : ''?>" id="glass-col-item4" onclick="chooseGlassCol('glass-col-item4')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image silver_matt property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Серебряное матовое</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item5" data-active="false" data-glasscol="glass-col-item5" data-price="34600" class="texture-item<?=(isset($_GET['glasscol']) AND $_GET['glasscol'] == 'glass-col-item5') ? ' active' : ''?>" id="glass-col-item5" onclick="chooseGlassCol('glass-col-item5')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image stripes property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Полосатое</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item6" data-active="false" data-glasscol="glass-col-item6" data-price="34600" class="texture-item<?=(isset($_GET['glasscol']) AND $_GET['glasscol'] == 'glass-col-item6') ? ' active' : ''?>" id="glass-col-item6" onclick="chooseGlassCol('glass-col-item6')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image white_matt property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Белое матовое</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item7" data-active="false" data-glasscol="glass-col-item7" data-price="34600" class="texture-item<?=(isset($_GET['glasscol']) AND $_GET['glasscol'] == 'glass-col-item7') ? ' active' : ''?>" id="glass-col-item7" onclick="chooseGlassCol('glass-col-item7')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image blue property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Голубое</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item8" data-active="false" data-glasscol="glass-col-item8" data-price="34600" class="texture-item<?=(isset($_GET['glasscol']) AND $_GET['glasscol'] == 'glass-col-item8') ? ' active' : ''?>" id="glass-col-item8" onclick="chooseGlassCol('glass-col-item8')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image bronze property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Бронзовое</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item9" data-active="false" data-glasscol="glass-col-item9" data-price="34600" class="texture-item<?=(isset($_GET['glasscol']) AND $_GET['glasscol'] == 'glass-col-item9') ? ' active' : ''?>" id="glass-col-item9" onclick="chooseGlassCol('glass-col-item9')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image bronze_matt property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Бронзовое матовое</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item10" data-active="false" data-glasscol="glass-col-item10" data-price="34600" class="texture-item<?=(isset($_GET['glasscol']) AND $_GET['glasscol'] == 'glass-col-item10') ? ' active' : ''?>" id="glass-col-item10" onclick="chooseGlassCol('glass-col-item10')">
                                                        <div class="texture-image-cover">
                                                            <div class="texture-image gold property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Золотое</div>
                                                    </div>
                                                    <div data-variable-name="glasscol" data-variable-value="glass-col-item11" data-active="false" data-glasscol="glass-col-item11" data-price="34600" class="texture-item<?=(isset($_GET['glasscol']) AND $_GET['glasscol'] == 'glass-col-item11') ? ' active' : ''?>" id="glass-col-item11" onclick="chooseGlassCol('glass-col-item11')">
                                                        <div class="texture-image-cover">
                                                            <div
                                                                class="texture-image green property-texture inset inset v001">
                                                                <div class="image"></div>
                                                            </div>
                                                            <div class="texture-price">34 600 ₽</div>
                                                        </div>
                                                        <div class="texture-title">Зеленое</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-2step-metcol">
                            <button type="button" class="btn accordion-header" id='close-button-2step-2' onclick="closeblock('aria-step2-metcol', 'close-button-2step-2', 'checkbox-2step-metcol')">
                                <span class="accordion-head"><span class="step">2. </span>Цвет металла</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step2-metcol">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group">
                                            <div class="tabs-group-item tabs-2">
                                                <div class="tab active tab-2">Полимерное покрытие</div>
                                            </div>

                                            <hr>

                                            <div class="tabs-group-body">
                                                <div>
                                                    <div class="cfg-image-banner" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-banners/dff5be3b0bdd905f75ec51ae92b4ed08.jpeg); background-size: cover;">
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
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol1" data-metalcolin="btncol1" data-price="0" class="texture-item<?=((isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol1') OR !isset($_GET['metalcolin'])) ? ' active' : ''?>" id="btncol1" onclick="metalColIn('btncol1')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image bronze property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">Базовое</div>
                                                                </div>
                                                                <div class="texture-title">Bronze</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol2" data-metalcolin="btncol2" data-price="5400" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol2') ? ' active' : ''?>" id="btncol2" onclick="metalColIn('btncol2')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image silver property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">5400 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Silver</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol3" data-metalcolin="btncol3" data-price="5400" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol3') ? ' active' : ''?>" id="btncol3" onclick="metalColIn('btncol3')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image vesuvio property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">5400 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Vesuvio</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol4" data-metalcolin="btncol4" data-price="5400" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol4') ? ' active' : ''?>" id="btncol4" onclick="metalColIn('btncol4')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image tobacco property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">5400 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Tobacco</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol5" data-metalcolin="btncol5" data-price="15000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol5') ? ' active' : ''?>" id="btncol5" onclick="metalColIn('btncol5')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_9003 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">15 000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 9003</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol6" data-metalcolin="btncol6" data-price="5400" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol6') ? ' active' : ''?>" id="btncol6" onclick="metalColIn('btncol6')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image patina property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">5400 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Patina</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol7" data-metalcolin="btncol7" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol7') ? ' active' : ''?>" id="btncol7" onclick="metalColIn('btncol7')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_8017 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 8017</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol8" data-metalcolin="btncol8" data-price="5400" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol8') ? ' active' : ''?>" id="btncol8" onclick="metalColIn('btncol8')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image delmare property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">5400 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Del Mare</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol9" data-metalcolin="btncol9" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol9') ? ' active' : ''?>" id="btncol9" onclick="metalColIn('btncol9')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_9005 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 9005</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol10" data-metalcolin="btncol10" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol10') ? ' active' : ''?>" id="btncol10" onclick="metalColIn('btncol10')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_7043 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 7043</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol11" data-metalcolin="btncol11" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol11') ? ' active' : ''?>" id="btncol11" onclick="metalColIn('btncol11')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_7009 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 7009</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol12" data-metalcolin="btncol12" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol12') ? ' active' : ''?>" id="btncol12" onclick="metalColIn('btncol12')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_6005 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 6005</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol13" data-metalcolin="btncol13" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol13') ? ' active' : ''?>" id="btncol13" onclick="metalColIn('btncol13')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_6028 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 6028</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol14" data-metalcolin="btncol14" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol14') ? ' active' : ''?>" id="btncol14" onclick="metalColIn('btncol14')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_8025 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 8025</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol15" data-metalcolin="btncol15" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol15') ? ' active' : ''?>" id="btncol15" onclick="metalColIn('btncol15')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_7006 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 7006</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol16" data-metalcolin="btncol16" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol16') ? ' active' : ''?>" id="btncol16" onclick="metalColIn('btncol16')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_1019 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 1019</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol17" data-metalcolin="btncol17" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol17') ? ' active' : ''?>" id="btncol17" onclick="metalColIn('btncol17')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_3005 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 3005</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol18" data-metalcolin="btncol18" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol18') ? ' active' : ''?>" id="btncol18" onclick="metalColIn('btncol18')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_3031 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 3031</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol19" data-metalcolin="btncol19" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol19') ? ' active' : ''?>" id="btncol19" onclick="metalColIn('btncol19')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_5005 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 5005</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol20" data-active="false" data-metalcolin="btncol20" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol20') ? ' active' : ''?>" id="btncol20" onclick="metalColIn('btncol20')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_7004 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 7004</div>
                                                            </div>
                                                            <div data-variable-name="metalcolin" data-variable-value="btncol21" data-metalcolin="btncol21" data-price="6000" class="texture-item<?=(isset($_GET['metalcolin']) AND $_GET['metalcolin'] == 'btncol21') ? ' active' : ''?>" id="btncol21" onclick="metalColIn('btncol21')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_7024 property-texture color_out  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 7024</div>
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
                        <div data-variable-name="furniture_extra-grid2_check" data-variable-value="1" data-furniture_extra-grid2_check="1" data-price="0" class="checkbox-accordion accordion accordion--with-plus colored" id="checkbox-2step-extra-grid" <?=(isset($_GET['outdoorstyles']) AND $_GET['outdoorstyles'] == 'glazed') ? '' : 'style="display: none;"'?>>
                            <div class="checkbox-accordion-header" id="close-button-2step-3" onclick="togglerGridStep2()">
                                <div class="title">
                                    <div class="step">4. </div> <span>Декоративная решетка</span>
                                </div>
                                <div class="checkbox-accordion-toggler"><label class="toggler">
                                        <div class="checkbox-pseudo-input<?=(isset($_GET['furniture_extra-grid2_check'])) ? ' checked' : ''?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div aria-expanded="true" id="aria-step2-extra-grid" <?=(isset($_GET['furniture_extra-grid2_check'])) ? '' : 'style="display: none;"'?>>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="grille_glazing"><span class="swipe-info">
                                                Свайпайте чтобы <br> посмотреть все цвета
                                            </span>
                                            <div data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item1" data-furnitem_extra-grid2="extra-grid-item1" data-price="23600" class="texture-group extra-grid">
                                                <div class="texture-item<?=((isset($_GET['furnitem_extra-grid2']) AND $_GET['furnitem_extra-grid2'] == 'extra-grid-item1') OR !isset($_GET['furnitem_extra-grid2'])) ? ' active' : ''?>" id="extra-grid-item1" onclick="chooseExtraGrid('extra-grid-item1')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image asia property-texture grille_glazing base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/2a02b2f050be7af42f671a9f675d2de6.jpeg);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">23 600 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Азия</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item2" data-furnitem_extra-grid2="extra-grid-item2" data-price="23600" class="texture-item<?=(isset($_GET['furnitem_extra-grid2']) AND $_GET['furnitem_extra-grid2'] == 'extra-grid-item1') ? ' active' : ''?>" id="extra-grid-item2" onclick="chooseExtraGrid('extra-grid-item2')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_1 property-texture grille_glazing base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/655b13eafe598df1ed34028470d1269c.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">23 600 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Тип 1</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item3" data-furnitem_extra-grid2="extra-grid-item3" data-price="23600" class="texture-item<?=(isset($_GET['furnitem_extra-grid2']) AND $_GET['furnitem_extra-grid2'] == 'extra-grid-item3') ? ' active' : ''?>" id="extra-grid-item3" onclick="chooseExtraGrid('extra-grid-item3')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_2 property-texture grille_glazing base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/acb9a32b56c773a32d527d171a42f284.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">23 600 ₽</div> 
                                                    </div>
                                                    <div class="texture-title">Тип 2</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item4" data-furnitem_extra-grid2="extra-grid-item4" data-price="23600" class="texture-item<?=(isset($_GET['furnitem_extra-grid2']) AND $_GET['furnitem_extra-grid2'] == 'extra-grid-item4') ? ' active' : ''?>" id="extra-grid-item4" onclick="chooseExtraGrid('extra-grid-item4')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_3 property-texture grille_glazing base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/0cc0761f5d32d5fdd04fb7d6e4cd6bc1.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">23 600 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Тип 3</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item5" data-furnitem_extra-grid2="extra-grid-item5" data-price="23600" class="texture-item<?=(isset($_GET['furnitem_extra-grid2']) AND $_GET['furnitem_extra-grid2'] == 'extra-grid-item5') ? ' active' : ''?>" id="extra-grid-item5" onclick="chooseExtraGrid('extra-grid-item5')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_4 property-texture grille_glazing base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/731f200dff89bed3dbced8277b515ae5.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">23 600 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Тип 4</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item6" data-furnitem_extra-grid2="extra-grid-item6" data-price="23600" class="texture-item<?=(isset($_GET['furnitem_extra-grid2']) AND $_GET['furnitem_extra-grid2'] == 'extra-grid-item6') ? ' active' : ''?>" id="extra-grid-item6" onclick="chooseExtraGrid('extra-grid-item6')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_5 property-texture grille_glazing base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/7760fd51469a47f6336e1e5c8411bfbe.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">23 600 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Тип 5</div>
                                                </div>
                                                <div data-variable-name="furnitem_extra-grid2" data-variable-value="extra-grid-item7" data-furnitem_extra-grid2="extra-grid-item7" data-price="23600" class="texture-item<?=(isset($_GET['furnitem_extra-grid2']) AND $_GET['furnitem_extra-grid2'] == 'extra-grid-item7') ? ' active' : ''?>" id="extra-grid-item7" onclick="chooseExtraGrid('extra-grid-item7')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image type_6 property-texture grille_glazing base" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-grille-glazings/da6518f5af6783eb8985d7cae8390891.png);">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">23 600 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Тип 6</div>
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
                                <div class="step">Шаг <span>3</span>: </div>
                                <div class="title">Внутренняя сторона</div>
                            </div>
                            <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-call" href="javascript:;">
                                <span>Помощь менеджера</span>
                            </button>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-style1" style='display: none;'>
                            <button type="button" class="btn accordion-header" id='close-button-3step-3' onclick='closeblock("aria-step3-style1", "close-button-3step-3", "checkbox-3step-style1" )'>
                                <span class="accordion-head">
                                    <span class="step">1. </span>
                                    Стиль
                                </span> 
                                <span class="accordion-head-tab"></span>
                            </button>  
                            <div aria-expanded="true" id="aria-step3-style1">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-btn-group-wrapper">
                                            <button data-variable-name="indoorstylesmilled" data-variable-value="1" data-indoorstylesmilled="1" data-price="0" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?=((isset($_GET['indoorstylesmilled']) AND $_GET['indoorstylesmilled'] == '1') OR (!isset($_GET['indoorstylesmilled']) AND !isset($_GET['indoorstylespanel']) AND !isset($_GET['indoorstylesmirror'])) AND ((isset($_GET['outdoorstyles']) AND ($_GET['outdoorstyles'] == 'classic' OR $_GET['outdoorstyles'] == 'baguette')))) ? ' active' : ''?>" id='btn3step1-1' onclick="indoorStylesMilled()">
                                                <span>
                                                    <em>Фрезерованная</em>
                                                    <em>Decoline, Collori, Woodline</em>
                                                </span>
                                            </button>
                                            <button data-variable-name="indoorstylespanel" data-variable-value="1" data-indoorstylespanel="1" data-price="0" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?=((isset($_GET['indoorstylespanel']) AND $_GET['indoorstylespanel'] == '1') AND ((isset($_GET['outdoorstyles']) AND ($_GET['outdoorstyles'] == 'classic' OR  $_GET['outdoorstyles'] == 'baguette')))) ? ' active' : ''?>" id='btn3step1-2' onclick="indoorStylesPanel()">
                                                <span>
                                                    <em>Панель гладкая</em>
                                                    <em>Все, кроме Metal</em>
                                                </span>
                                            </button>
                                            <button data-variable-name="indoorstylesmirror" data-variable-value="1" data-indoorstylespanel="1" data-price="0" type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?=(isset($_GET['indoorstylesmirror']) AND $_GET['indoorstylesmirror'] == '1') ? ' active' : ''?>" id='btn3step1-3' onclick="indoorStylesMirror()">
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
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-mirror" <?=(isset($_GET['indoorstylesmirror']) AND $_GET['indoorstylesmirror'] == '1') ? '' : 'style="display: none;"'?>>
                            <button type="button" class="btn accordion-header" id='close-button-3step-4' onclick='closeblock("aria-step3-mirror", "close-button-3step-4", "checkbox-3step-mirror")'>
                                <span class="accordion-head">
                                    <span class="step">2. </span>
                                    Вид зеркала
                                </span> 
                                <span class="accordion-head-tab"></span>
                            </button>
                            <!---->
                            <div aria-expanded="true" id="aria-step3-mirror">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div>
                                            <div class="tabs-group">
                                                <div class="tabs-group-item tabs-2">
                                                    <div data-variable-name="milledmirror" data-variable-value="1" data-milledmirror="1" data-price="0" class="tab tab-2<?=((isset($_GET['milledmirror']) AND $_GET['milledmirror'] == '1') OR (!isset($_GET['milledmirror']) AND !isset($_GET['panelmirror']))) ? ' active' : ''?>" id='milled-mirror-btn' onclick="milledmirror()">
                                                        Фрезерованная панель с зеркалом
                                                    </div>
                                                    <div data-variable-name="panelmirror" data-variable-value="1" data-panelmirror="1" data-price="0" class="tab tab-2<?=(isset($_GET['panelmirror']) AND $_GET['panelmirror'] == '1') ? ' active' : ''?>" id='panel-mirror-btn' onclick="panelmirror()">
                                                        Гладкая панель с зеркалом
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="tabs-group-body" id="milled-mirror-block" <?=((isset($_GET['milledmirror']) AND $_GET['milledmirror'] == '1') OR (!isset($_GET['milledmirror']) AND !isset($_GET['panelmirror']))) ? '' : 'style="display: none;"'?>>
                                                    <div>
                                                        <div class="milling-group">
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin1" data-typemirrorin="btn-mirrorin1" data-price="0" class="milling-item<?=((isset($_GET['typemirrorin']) AND $_GET['typemirrorin'] == 'btn-mirrorin9') OR (isset($_GET['milledmirror']))) ? ' active' : ''?>" id='btn-mirrorin1' onclick='typeMirrorIn("btn-mirrorin1")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-insets/big/4b47bc6891b50ab74009734786c944e6.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">Z 001</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin2" data-typemirrorin="btn-mirrorin2" data-price="0" class="milling-item<?=(isset($_GET['milledmirror']) AND $_GET['milledmirror'] == 'btn-mirrorin2') ? ' active' : ''?>" id='btn-mirrorin2' onclick='typeMirrorIn("btn-mirrorin2")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-insets/big/e239b46d2eff07188904a46eeb6262c3.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">Z 002</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin3" data-typemirrorin="btn-mirrorin3" data-price="0" class="milling-item<?=(isset($_GET['milledmirror']) AND $_GET['milledmirror'] == 'btn-mirrorin3') ? ' active' : ''?>" id='btn-mirrorin3' onclick='typeMirrorIn("btn-mirrorin3")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-insets/big/fd7320a527db0a90307072cb7c032569.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">Z 003</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin4" data-typemirrorin="btn-mirrorin4" data-price="0" class="milling-item<?=(isset($_GET['milledmirror']) AND $_GET['milledmirror'] == 'btn-mirrorin4') ? ' active' : ''?>" id='btn-mirrorin4' onclick='typeMirrorIn("btn-mirrorin4")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-insets/big/dc562d2aa99335b0ed774e20828c06d5.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">Z 004</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin5" data-typemirrorin="btn-mirrorin5" data-price="0" class="milling-item<?=(isset($_GET['milledmirror']) AND $_GET['milledmirror'] == 'btn-mirrorin5') ? ' active' : ''?>" id='btn-mirrorin5' onclick='typeMirrorIn("btn-mirrorin5")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-insets/big/4b939e81b7ea4e060e9a7f13b88b0d69.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">Z 005</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin6" data-typemirrorin="btn-mirrorin6" data-price="0" class="milling-item<?=(isset($_GET['milledmirror']) AND $_GET['milledmirror'] == 'btn-mirrorin6') ? ' active' : ''?>" id='btn-mirrorin6' onclick='typeMirrorIn("btn-mirrorin6")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-insets/big/1be39b2d6c036b8a457bbb1a9062662b.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">Z 006</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin7" data-typemirrorin="btn-mirrorin7" data-price="0" class="milling-item<?=(isset($_GET['milledmirror']) AND $_GET['milledmirror'] == 'btn-mirrorin7') ? ' active' : ''?>" id='btn-mirrorin7' onclick='typeMirrorIn("btn-mirrorin7")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-insets/big/66a2737f56ea08dd44ebe82dca19d99f.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">Z 007</div>
                                                                </div>
                                                                <!---->
                                                            </div>
                                                            <div>
                                                                <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin8" data-typemirrorin="btn-mirrorin8" data-price="0" class="milling-item<?=(isset($_GET['milledmirror']) AND $_GET['milledmirror'] == 'btn-mirrorin8') ? ' active' : ''?>" id='btn-mirrorin8' onclick='typeMirrorIn("btn-mirrorin8")'>
                                                                    <!---->
                                                                    <div class="milling-image-cover">
                                                                        <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-insets/big/bff17e59a4fb3c26e44260eeaed6593e.svg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="milling-title">Z 008</div>
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
                                                                <div data-variable-name="typemirrorcolIn" data-variable-value="btn-mirrorcolin1" data-typemirrorcolIn="btn-mirrorcolin1" data-price="9200" class="texture-item<?=((isset($_GET['typemirrorcolIn']) AND $_GET['typemirrorcolIn'] == 'btn-mirrorcolin1') OR (!isset($_GET['typemirrorcolIn'])) OR (!isset($_GET['milledmirror']) AND !isset($_GET['panelmirror']))) ? ' active' : ''?>" id='btn-mirrorcolin1' onclick='typeMirrorColIn("btn-mirrorcolin1")'>
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
                                                                <div data-variable-name="typemirrorcolIn" data-variable-value="btn-mirrorcolin2" data-typemirrorcolIn="btn-mirrorcolin2" data-price="11800"  class="texture-item<?=(isset($_GET['typemirrorcolIn']) AND $_GET['typemirrorcolIn'] == 'btn-mirrorcolin2') ? ' active' : ''?>" id='btn-mirrorcolin2' onclick='typeMirrorColIn("btn-mirrorcolin2")'>
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
                                                                <div data-variable-name="typemirrorcolIn" data-variable-value="btn-mirrorcolin3" data-typemirrorcolIn="btn-mirrorcolin3" data-price="13800" class="texture-item<?=(isset($_GET['typemirrorcolIn']) AND $_GET['typemirrorcolIn'] == 'btn-mirrorcolin3') ? ' active' : ''?>" id='btn-mirrorcolin3' onclick='typeMirrorColIn("btn-mirrorcolin3")'>
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
                                                <div class="tabs-group-body" id="panel-mirror-block" <?=(isset($_GET['panelmirror']) AND $_GET['panelmirror'] == '1') ? '' : 'style="display: none;"'?>>
                                                <div>
                                                    <div class="milling-group">
                                                        <div>
                                                            <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin9" data-typemirrorin="btn-mirrorin9" data-price="0" class="milling-item<?=((isset($_GET['typemirrorin']) AND $_GET['typemirrorin'] == 'btn-mirrorin9') OR (isset($_GET['panelmirror']))) ? ' active' : ''?>" id='btn-mirrorin9' onclick='typeMirrorIn("btn-mirrorin9")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-insets/big/bd56f0f5c8d70e71d938bd0a55774912.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">Z 009</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemirrorin" data-variable-value="btn-mirrorin10" data-typemirrorin="btn-mirrorin10" data-price="0" class="milling-item<?=(isset($_GET['typemirrorcolIn']) AND $_GET['typemirrorcolIn'] == 'btn-mirrorin10') ? ' active' : ''?>" id='btn-mirrorin10' onclick='typeMirrorIn("btn-mirrorin10")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-insets/big/b2640f166b2637f79bde616c39763d19.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">Z 010</div>
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
                                                            <div data-variable-name="typemirrorcolin" data-variable-value="btn-mirrorcolin4" data-typemirrorcolin="btn-mirrorcolin4" data-price="9200" class="texture-item<?=((isset($_GET['typemirrorcolin']) AND $_GET['typemirrorcolIn'] == 'btn-mirrorcolin4') OR (!isset($_GET['typemirrorcolIn']) AND isset($_GET['panelmirror']))) ? ' active' : ''?>" id='btn-mirrorcolin4' onclick='typeMirrorColIn("btn-mirrorcolin4")'>
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
                                                            <div data-variable-name="typemirrorcolin" data-variable-value="btn-mirrorcolin5" data-active="false" data-typemirrorcolin="btn-mirrorcolin5" data-price="11800" class="texture-item<?=(isset($_GET['typemirrorcolin']) AND $_GET['typemirrorcolIn'] == 'btn-mirrorcolin5') ? ' active' : ''?>" id='btn-mirrorcolin5' onclick='typeMirrorColIn("btn-mirrorcolin5")'>
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
                                                            <div data-variable-name="typemirrorcolin" data-variable-value="btn-mirrorcolin6" data-active="false" data-typemirrorcolin="btn-mirrorcolin6" data-price="13800" class="texture-item<?=(isset($_GET['typemirrorcolin']) AND $_GET['typemirrorcolIn'] == 'btn-mirrorcolin6') ? ' active' : ''?>" id='btn-mirrorcolin6' onclick='typeMirrorColIn("btn-mirrorcolin6")'>
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
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-milled" <?=(isset($_GET['indoorstylesmilled']) AND $_GET['indoorstylesmilled'] == '1') ? '' : 'style="display: none;"'?>>
                            <button type="button" class="btn accordion-header" id='close-button-3step-5' onclick='closeblock("aria-step3-milled", "close-button-3step-5", "checkbox-3step-milled" )'>
                                <span class="accordion-head">
                                    <span class="step">2. </span>
                                    Фрезеровка
                                </span> 
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id='aria-step3-milled'>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group" withoutscroll="true">
                                            <div class="tabs-group-item tabs-2">
                                                <div data-variable-name="classicmilled" data-variable-value="1" data-classicmilled="1" data-price="0" class="tab tab-2<?=((isset($_GET['classicmilled']) AND $_GET['classicmilled'] == '1') OR !isset($_GET['classicmilled'])) ? ' active' : ''?>" id="classicmilled-btn" onclick="classicmilled()">
                                                    Классический стиль
                                                </div>
                                                <div data-variable-name="modernmilled" data-variable-value="1" data-modernmilled="1" data-price="0" class="tab tab-2<?=(isset($_GET['modernmilled']) AND $_GET['modernmilled'] == '1') ? ' active' : ''?>" id="modernmilled-btn" onclick="modernmilled()">
                                                    Современный стиль
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="tabs-group-body" id="classicmilled-block" <?=((isset($_GET['classicmilled']) AND $_GET['classicmilled'] == '1') OR (!isset($_GET['classicmilled']) OR !isset($_GET['modernmilled']))) ? '' : 'style="display: none;"'?>>
                                                <div>
                                                    <div class="milling-group">
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic1" data-typemilledoutclassic="btn-milled-classic1" data-price="0" class="milling-item<?=((isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic1') OR (!isset($_GET['typemilledoutclassic'])) OR !isset($_GET['typemilledoutmodern'])) ? ' active' : ''?>" id='btn-milled-classic1' onclick='typeMilledOutClassic("btn-milled-classic1")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/9e1a8ef10fadcb38f79574e2034f26c8.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic2" data-typemilledoutclassic="btn-milled-classic2" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic2') ? ' active' : ''?>" id='btn-milled-classic2' onclick='typeMilledOutClassic("btn-milled-classic2")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/1ec9222549295d046e86309a15e1f150.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 003</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic3" data-typemilledoutclassic="btn-milled-classic3" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic3') ? ' active' : ''?>" id='btn-milled-classic3' onclick='typeMilledOutClassic("btn-milled-classic3")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/d459715918dc0660d17a16d2d04d8926.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 004</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic4" data-typemilledoutclassic="btn-milled-classic4" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic4') ? ' active' : ''?>" id='btn-milled-classic4' onclick='typeMilledOutClassic("btn-milled-classic4")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/937f156dab0be58b8a2cd0028eb8b50c.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 006</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic5" data-typemilledoutclassic="btn-milled-classic5" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic5') ? ' active' : ''?>" id='btn-milled-classic5' onclick='typeMilledOutClassic("btn-milled-classic5")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/0580972afc750b234dd12b41c937aaca.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 010</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic6" data-typemilledoutclassic="btn-milled-classic6" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic6') ? ' active' : ''?>" id='btn-milled-classic6' onclick='typeMilledOutClassic("btn-milled-classic6")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/3c78ad0ec01070621505c79b47a5a608.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 012</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic7" data-typemilledoutclassic="btn-milled-classic7" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic7') ? ' active' : ''?>" id='btn-milled-classic7' onclick='typeMilledOutClassic("btn-milled-classic7")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/6d30206ae3afe46092ef62ad2ba6bee8.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">C 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic8" data-typemilledoutclassic="btn-milled-classic8" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic8') ? ' active' : ''?>" id='btn-milled-classic8' onclick='typeMilledOutClassic("btn-milled-classic8")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/2a64d8bb4f64d9634a809e174e8812e3.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">C 003</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic9" data-typemilledoutclassic="btn-milled-classic9" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic9') ? ' active' : ''?>" id='btn-milled-classic9' onclick='typeMilledOutClassic("btn-milled-classic9")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/3fe770dfa7c75ae85cafc7b9ea62e03c.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">B 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic10" data-typemilledoutclassic="btn-milled-classic10" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic10') ? ' active' : ''?>" id='btn-milled-classic10' onclick='typeMilledOutClassic("btn-milled-classic10")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/313df17ef4189d9bb3a1aefbe606eb93.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">B 003</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic11" data-typemilledoutclassic="btn-milled-classic11" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic11') ? ' active' : ''?>" id='btn-milled-classic11' onclick='typeMilledOutClassic("btn-milled-classic11")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/e7d45cd5c3a4fe7faad1579a8aa90faf.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">Англия</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic12" data-typemilledoutclassic="btn-milled-classic12" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic12') ? ' active' : ''?>" id='btn-milled-classic12' onclick='typeMilledOutClassic("btn-milled-classic12")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/9152fa6470fb2f00e4042eb64cbf887c.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">Азия</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic13" data-typemilledoutclassic="btn-milled-classic13" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic13') ? ' active' : ''?>" id='btn-milled-classic13' onclick='typeMilledOutClassic("btn-milled-classic13")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/bdcab50184091e421d84f38cf63a7027.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic14" data-typemilledoutclassic="btn-milled-classic14" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic14') ? ' active' : ''?>" id='btn-milled-classic14' onclick='typeMilledOutClassic("btn-milled-classic14")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/b03694f7bcd8148098b813b0137c0d56.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 005</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic15" data-typemilledoutclassic="btn-milled-classic15" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic15') ? ' active' : ''?>" id='btn-milled-classic15' onclick='typeMilledOutClassic("btn-milled-classic15")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/87519d94886dceeb497df40e912684ee.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 007</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic16" data-typemilledoutclassic="btn-milled-classic16" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic16') ? ' active' : ''?>" id='btn-milled-classic16' onclick='typeMilledOutClassic("btn-milled-classic16")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/0796f03b14236e078accad28cc69bc5a.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 008</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic17" data-typemilledoutclassic="btn-milled-classic17" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic17') ? ' active' : ''?>" id='btn-milled-classic17' onclick='typeMilledOutClassic("btn-milled-classic17")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/b8d488e307d87d8921eada2173169f20.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 009</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic18" data-typemilledoutclassic="btn-milled-classic18" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic18') ? ' active' : ''?>" id='btn-milled-classic18' onclick='typeMilledOutClassic("btn-milled-classic18")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/4577550d0604610d6d2048fb5e672050.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 011</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic19" data-typemilledoutclassic="btn-milled-classic19" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic19') ? ' active' : ''?>" id='btn-milled-classic19' onclick='typeMilledOutClassic("btn-milled-classic19")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/bedcdc1edfc8d91809ad530dbbdd8ef1.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 015</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic20" data-typemilledoutclassic="btn-milled-classic20" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic20') ? ' active' : ''?>" id='btn-milled-classic20' onclick='typeMilledOutClassic("btn-milled-classic20")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/6d09520c5944c86b46c7f5a27f86c3b6.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 016</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic21" data-typemilledoutclassic="btn-milled-classic21" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic21') ? ' active' : ''?>" id='btn-milled-classic21' onclick='typeMilledOutClassic("btn-milled-classic21")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/c94c96007163e03fb5486bc759e6bae7.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 017</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic22" data-typemilledoutclassic="btn-milled-classic22" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic22') ? ' active' : ''?>" id='btn-milled-classic22' onclick='typeMilledOutClassic("btn-milled-classic22")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/7324622c20699d07d1c610ebef9bab0e.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 018</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic23" data-typemilledoutclassic="btn-milled-classic23" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic23') ? ' active' : ''?>" id='btn-milled-classic23' onclick='typeMilledOutClassic("btn-milled-classic23")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/6f1270ee96cc3172d0165533a54211e8.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 019</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic24" data-typemilledoutclassic="btn-milled-classic24" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic24') ? ' active' : ''?>" id='btn-milled-classic24' onclick='typeMilledOutClassic("btn-milled-classic24")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/5dea1e989ea4dcf5d2a845457241eee4.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 020</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic25" data-typemilledoutclassic="btn-milled-classic25" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic25') ? ' active' : ''?>" id='btn-milled-classic25' onclick='typeMilledOutClassic("btn-milled-classic25")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/f530fe8eb888a5db39167f03f9c5fef3.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 022</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic26" data-typemilledoutclassic="btn-milled-classic26" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic26') ? ' active' : ''?>" id='btn-milled-classic26' onclick='typeMilledOutClassic("btn-milled-classic26")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/83a70bdd842e6d77164122271ccfa29d.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 023</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic27" data-typemilledoutclassic="btn-milled-classic27" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic27') ? ' active' : ''?>" id='btn-milled-classic27' onclick='typeMilledOutClassic("btn-milled-classic27")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/38d53d3c42e4a39afdd09c9f737dd8b1.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 024</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic28" data-typemilledoutclassic="btn-milled-classic28" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic28') ? ' active' : ''?>" id='btn-milled-classic28' onclick='typeMilledOutClassic("btn-milled-classic28")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/0f28e5c17f696743e4266859aeb5774a.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">B 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic29" data-typemilledoutclassic="btn-milled-classic29" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic29') ? ' active' : ''?>" id='btn-milled-classic29' onclick='typeMilledOutClassic("btn-milled-classic29")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/6767f1229704e2470fc1bd4b9d13b029.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">B 004</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic30" data-typemilledoutclassic="btn-milled-classic30" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic30') ? ' active' : ''?>" id='btn-milled-classic30' onclick='typeMilledOutClassic("btn-milled-classic30")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/1212a067616b32fb0b725fe2cb26977e.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">C 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic31" data-typemilledoutclassic="btn-milled-classic31" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic31') ? ' active' : ''?>" id='btn-milled-classic31' onclick='typeMilledOutClassic("btn-milled-classic31")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/2d7b699c96b454d5196401367b19ef04.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">C 004</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic32" data-typemilledoutclassic="btn-milled-classic32" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic32') ? ' active' : ''?>" id='btn-milled-classic32' onclick='typeMilledOutClassic("btn-milled-classic32")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/cbf58bd41a0baa1c73efce8c2f4b9415.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">C 005</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic33" data-typemilledoutclassic="btn-milled-classic33" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic33') ? ' active' : ''?>" id='btn-milled-classic33' onclick='typeMilledOutClassic("btn-milled-classic33")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/4b63abfe798a0c2f371ccd612cc4a63c.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">C 006</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic34" data-typemilledoutclassic="btn-milled-classic34" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic34') ? ' active' : ''?>" id='btn-milled-classic34' onclick='typeMilledOutClassic("btn-milled-classic34")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/707e6c0449cecb405b643be89e8858b8.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">C 007</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic35" data-typemilledoutclassic="btn-milled-classic35" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic35') ? ' active' : ''?>" id='btn-milled-classic35' onclick='typeMilledOutClassic("btn-milled-classic35")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/1659421cb2e1a66e20118f4c7dbcf19b.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">C 008</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic36" data-typemilledoutclassic="btn-milled-classic36" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic36') ? ' active' : ''?>" id='btn-milled-classic36' onclick='typeMilledOutClassic("btn-milled-classic36")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/cb7266a1b9abeb4b1a0b2cc9d3c1fb19.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">C 009</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic37" data-typemilledoutclassic="btn-milled-classic37" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic37') ? ' active' : ''?>" id='btn-milled-classic37' onclick='typeMilledOutClassic("btn-milled-classic37")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/7806a27dec9de59cb87f8d439b7d7785.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">C 010</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic38" data-typemilledoutclassic="btn-milled-classic38" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic38') ? ' active' : ''?>" id='btn-milled-classic38' onclick='typeMilledOutClassic("btn-milled-classic38")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/2f570f17973da9e3de0b3f58f64d4448.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">C 011</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutclassic" data-variable-value="btn-milled-classic39" data-typemilledoutclassic="btn-milled-classic39" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutclassic']) AND $_GET['typemilledoutclassic'] == 'btn-milled-classic39') ? ' active' : ''?>" id='btn-milled-classic39' onclick='typeMilledOutClassic("btn-milled-classic39")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/ec0366d040b8514edf235c32454fa9db.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">R 006</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tabs-group-body" id="modernmilled-block" <?=(isset($_GET['modernmilled']) AND $_GET['modernmilled'] == '1') ? '' : 'style="display: none;"'?>>
                                                <div>
                                                    <div class="milling-group">
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern1" data-typemilledoutmodern="btn-milled-modern1" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern1') ? ' active' : ''?>" id='btn-milled-modern1' onclick='typeMilledOutModern("btn-milled-modern1")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/d8bdc6d0fe17af7750cf55eb318cdef6.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">BE 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern2" data-typemilledoutmodern="btn-milled-modern2" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern2') ? ' active' : ''?>" id='btn-milled-modern2' onclick='typeMilledOutModern("btn-milled-modern2")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/e9e322fb99d460216b3b8ebbc935dd89.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">BE 005</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern3" data-typemilledoutmodern="btn-milled-modern3" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern3') ? ' active' : ''?>" id='btn-milled-modern3' onclick='typeMilledOutModern("btn-milled-modern3")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/3ef99c51eec7188edd9a7f6b5046c934.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">E 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern4" data-typemilledoutmodern="btn-milled-modern4" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern4') ? ' active' : ''?>" id='btn-milled-modern4' onclick='typeMilledOutModern("btn-milled-modern4")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/94a17826daa17f2191f91cff6df5b9a0.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">L 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern5" data-typemilledoutmodern="btn-milled-modern5" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern5') ? ' active' : ''?>" id='btn-milled-modern5' onclick='typeMilledOutModern("btn-milled-modern5")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/d66c6d8c90f9f024ef7a93bfeaf18d34.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">L 004</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern6" data-typemilledoutmodern="btn-milled-modern6" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern6') ? ' active' : ''?>" id='btn-milled-modern6' onclick='typeMilledOutModern("btn-milled-modern6")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/6c151d9280e7e06da924b56f45bea317.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">L 005</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern7" data-typemilledoutmodern="btn-milled-modern7" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern7') ? ' active' : ''?>" id='btn-milled-modern7' onclick='typeMilledOutModern("btn-milled-modern7")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/44d82b8dca7d41693082a26e8a2624e4.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">R 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern8" data-typemilledoutmodern="btn-milled-modern8" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern8') ? ' active' : ''?>" id='btn-milled-modern8' onclick='typeMilledOutModern("btn-milled-modern8")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/a16a4e3851d077e233c43e774b6f24f3.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">R 003</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern9" data-typemilledoutmodern="btn-milled-modern9" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern9') ? ' active' : ''?>" id='btn-milled-modern9' onclick='typeMilledOutModern("btn-milled-modern9")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/afb27b7c514cb491c2c08f04b8166af5.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">R 005</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern10" data-typemilledoutmodern="btn-milled-modern10" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern10') ? ' active' : ''?>" id='btn-milled-modern10' onclick='typeMilledOutModern("btn-milled-modern10")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/995ece4e864be2128376efccc006d683.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">D 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern11" data-typemilledoutmodern="btn-milled-modern11" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern11') ? ' active' : ''?>" id='btn-milled-modern11' onclick='typeMilledOutModern("btn-milled-modern11")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/5dc9d7f162ff798ebdb31c7d69cdeaae.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">D 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern12" data-typemilledoutmodern="btn-milled-modern12" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern12') ? ' active' : ''?>" id='btn-milled-modern12' onclick='typeMilledOutModern("btn-milled-modern12")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/189a00fceb0f583e1e649525be2edb31.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">D 003</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern13" data-typemilledoutmodern="btn-milled-modern13" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern13') ? ' active' : ''?>" id='btn-milled-modern13' onclick='typeMilledOutModern("btn-milled-modern13")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/a4d273765e40fb93ee2a6e6ffcc30a3e.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">D 004</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern14" data-typemilledoutmodern="btn-milled-modern14" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern14') ? ' active' : ''?>" id='btn-milled-modern14' onclick='typeMilledOutModern("btn-milled-modern14")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/5ff96de45b4800a7774f21b3ac5e49c6.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">D 005</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern15" data-typemilledoutmodern="btn-milled-modern15" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern15') ? ' active' : ''?>" id='btn-milled-modern15' onclick='typeMilledOutModern("btn-milled-modern15")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/8c12bd5f3f5f69df04dec887b5ff06d2.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">D 006</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern16" data-typemilledoutmodern="btn-milled-modern16" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern16') ? ' active' : ''?>" id='btn-milled-modern16' onclick='typeMilledOutModern("btn-milled-modern16")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/1133b768d741610aeeb41bef8842e45d.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">L 001</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern17" data-typemilledoutmodern="btn-milled-modern17" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern17') ? ' active' : ''?>" id='btn-milled-modern17' onclick='typeMilledOutModern("btn-milled-modern17")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/e2058a39d5f18d7abe8667195a6f59b0.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">L 003</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern18" data-typemilledoutmodern="btn-milled-modern18" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern18') ? ' active' : ''?>" id='btn-milled-modern18' onclick='typeMilledOutModern("btn-milled-modern18")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/4515804646b47ec2b9fc9821ce61c071.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 013</div>
                                                            </div>
                                                            <div style="display: none;">
                                                                <div id="milling-preview-popup-f013">
                                                                    <div class="zoom-cutting-header">
                                                                        <p class="title">Обратите внимание!</p> <span class="subtitle">Так выглядит эскиз панели с
                                                                            фрезеровкой F 013 (вид с верху)</span>
                                                                    </div>
                                                                    <div class="zoom-cutting-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/5f4b08a087cabf15bfa53f0193e7072e.png);">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern19" data-typemilledoutmodern="btn-milled-modern19" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern19') ? ' active' : ''?>" id='btn-milled-modern19' onclick='typeMilledOutModern("btn-milled-modern19")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/92603f837711373378b040af46f53676.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 014</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern20" data-typemilledoutmodern="btn-milled-modern20" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern20') ? ' active' : ''?>" id='btn-milled-modern20' onclick='typeMilledOutModern("btn-milled-modern20")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/1d72abb7cb006e882abc38dea808ad29.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">F 021</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern21" data-typemilledoutmodern="btn-milled-modern21" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern21') ? ' active' : ''?>" id='btn-milled-modern21' onclick='typeMilledOutModern("btn-milled-modern21")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/d074efb03127b390c57f5a19def30f63.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">BE 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern22" data-typemilledoutmodern="btn-milled-modern22" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern22') ? ' active' : ''?>" id='btn-milled-modern22' onclick='typeMilledOutModern("btn-milled-modern22")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/b4789eb9ab07bbeb50fa8339de6ef118.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">BE 004</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern23" data-typemilledoutmodern="btn-milled-modern23" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern23') ? ' active' : ''?>" id='btn-milled-modern23' onclick='typeMilledOutModern("btn-milled-modern23")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/3654fbf82a04f387578223469a2cbfa8.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">R 004</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern24" data-typemilledoutmodern="btn-milled-modern24" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern24') ? ' active' : ''?>" id='btn-milled-modern24' onclick='typeMilledOutModern("btn-milled-modern24")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/45134626007d1a36be5e92135d095ddf.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">R 002</div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div>
                                                            <div data-variable-name="typemilledoutmodern" data-variable-value="btn-milled-modern25" data-typemilledoutmodern="btn-milled-modern25" data-price="0" class="milling-item<?=(isset($_GET['typemilledoutmodern']) AND $_GET['typemilledoutmodern'] == 'btn-milled-modern25') ? ' active' : ''?>" id='btn-milled-modern25' onclick='typeMilledOutModern("btn-milled-modern25")'>
                                                                <!---->
                                                                <div class="milling-image-cover">
                                                                    <div class="milling-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-millings/big/423becb1fbf8d690344af644a7451325.svg);">
                                                                    </div>
                                                                </div>
                                                                <div class="milling-title">R 007</div>
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
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-glazed" <?=(isset($_GET['outdoorstyles']) AND $_GET['outdoorstyles'] == 'glazed') ? '' : 'style="display: none;"'?>>
                            <button type="button" class="btn accordion-header" id='close-button-3step-6' onclick='closeblock("aria-step3-glazed", "close-button-3step-6", "checkbox-3step-glazed" )'>
                                <span class="accordion-head">
                                    <span class="step">1. </span>
                                    Стиль
                                </span> 
                                <span class="accordion-head-tab"></span>
                            </button>
                            <!---->
                            <div aria-expanded="true" id="aria-step3-glazed">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-btn-group-wrapper"><button type="button" class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary<?=(isset($_GET['outdoorstyles']) AND $_GET['outdoorstyles'] == 'glazed') ? ' active' : ''?>">
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
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-tree-color" <?=((isset($_GET['outdoorstyles']) AND ($_GET['outdoorstyles'] == 'baguette' OR $_GET['outdoorstyles'] == 'glazed')) AND (isset($_GET['model']) AND $_GET['model'] == '2')) ? '' : 'style="display: none;"'?>>
                            <button type="button" class="btn accordion-header" id='close-button-3step-7' onclick='closeblock("aria-step3-tree-color", "close-button-3step-7", "checkbox-3step-tree-color" )'>
                                <span class="accordion-head">
                                    <span class="step">3. </span>
                                    Цвет и текстура
                                </span> 
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step3-tree-color">
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
                                                    <div class="cfg-image-banner" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-banners/49b37fe49bd4a58fe0dd03ff6aca3fdd.jpeg); background-size: cover;">
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
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout1" data-doorcolout="btndoorcolout1" data-price="0" class="texture-item<?=((isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout1') OR !isset($_GET['doorcolout'])) ? ' active' : ''?>" id='btndoorcolout1' onclick='doorColOut("btndoorcolout1")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image wenge_light property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">Базовое</div>
                                                                </div>
                                                                <div class="texture-title">Венге</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout2" data-doorcolout="btndoorcolout2" data-price="0" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout2') ? ' active' : ''?>" id='btndoorcolout2' onclick='doorColOut("btndoorcolout2")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image milk_light property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">Базовое</div>
                                                                </div>
                                                                <div class="texture-title">Белое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout3" data-doorcolout="btndoorcolout3" data-price="12500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout3') ? ' active' : ''?>" id='btndoorcolout3' onclick='doorColOut("btndoorcolout3")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image koniak_dub property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Коньячный дуб</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout4" data-doorcolout="btndoorcolout4" data-price="12500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout4') ? ' active' : ''?>" id='btndoorcolout4' onclick='doorColOut("btndoorcolout4")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image vanil_dub property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Ванильный дуб</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout5" data-doorcolout="btndoorcolout5" data-price="12500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout5') ? ' active' : ''?>" id='btndoorcolout5' onclick='doorColOut("btndoorcolout5")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image milk property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Милк</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout6" data-doorcolout="btndoorcolout6" data-price="12500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout6') ? ' active' : ''?>" id='btndoorcolout6' onclick='doorColOut("btndoorcolout6")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image coffee_three property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">12 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Кофейное дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout7" data-doorcolout="btndoorcolout7" data-price="16500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout7') ? ' active' : ''?>" id='btndoorcolout7' onclick='doorColOut("btndoorcolout7")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image grey_matt property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Серый матовый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout8" data-doorcolout="btndoorcolout8" data-price="16500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout8') ? ' active' : ''?>" id='btndoorcolout8' onclick='doorColOut("btndoorcolout8")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image soft_black property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Черный матовый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout9" data-doorcolout="btndoorcolout9" data-price="16500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout9') ? ' active' : ''?>" id='btndoorcolout9' onclick='doorColOut("btndoorcolout9")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image deco_grafit property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Графитовое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout10" data-doorcolout="btndoorcolout10" data-price="16500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout10') ? ' active' : ''?>" id='btndoorcolout10' onclick='doorColOut("btndoorcolout10")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image smoky_wood property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Дымчатое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout11" data-doorcolout="btndoorcolout11" data-price="16500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout11') ? ' active' : ''?>" id='btndoorcolout11' onclick='doorColOut("btndoorcolout11")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image satin property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Сатиновое дерево</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout12" data-doorcolout="btndoorcolout12" data-price="16500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout12') ? ' active' : ''?>" id='btndoorcolout12' onclick='doorColOut("btndoorcolout12")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image grab property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Граб белый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout13" data-doorcolout="btndoorcolout13" data-price="16500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout13') ? ' active' : ''?>" id='btndoorcolout13' onclick='doorColOut("btndoorcolout13")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image bonobo property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Венге бонобо</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout14" data-doorcolout="btndoorcolout14" data-price="19600" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout14') ? ' active' : ''?>" id='btndoorcolout14' onclick='doorColOut("btndoorcolout14")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image arctic_birch property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Арктическая береза</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout15" data-doorcolout="btndoorcolout15" data-price="19600" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout15') ? ' active' : ''?>" id='btndoorcolout15' onclick='doorColOut("btndoorcolout15")'>
                                                                <div class="texture-image-cover">
                                                                    <div
                                                                        class="texture-image chicago_concrete_2sc property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Бетон темный</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout16" data-doorcolout="btndoorcolout16" data-price="0" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout16') ? ' active' : ''?>" id='btndoorcolout16' onclick='doorColOut("btndoorcolout16")'>
                                                                <div class="texture-image-cover">
                                                                    <div
                                                                        class="texture-image chicago_concrete_1sc property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Бетон светлый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout17" data-doorcolout="btndoorcolout17" data-price="19600" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout17') ? ' active' : ''?>" id='btndoorcolout17' onclick='doorColOut("btndoorcolout17")'>
                                                                <div class="texture-image-cover">
                                                                    <div
                                                                        class="texture-image votan_eiche_natur property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Греческий платан</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout18" data-doorcolout="btndoorcolout18" data-price="19600" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout18') ? ' active' : ''?>" id='btndoorcolout18' onclick='doorColOut("btndoorcolout18")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image jute property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Джут</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout19" data-doorcolout="btndoorcolout19" data-price="19600" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout19') ? ' active' : ''?>" id='btndoorcolout19' onclick='doorColOut("btndoorcolout19")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image jute_white property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">19 600 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Джут белый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout20" data-doorcolout="btndoorcolout20" data-price="17000" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout20') ? ' active' : ''?>" id='btndoorcolout20' onclick='doorColOut("btndoorcolout20")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image soft_white property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">17 000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Белый</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout21" data-doorcolout="btndoorcolout21" data-price="16500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout21') ? ' active' : ''?>" id='btndoorcolout21' onclick='doorColOut("btndoorcolout21")'>
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image brandy_oak property-texture panel_in decoline">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">16 500 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Дуб бренди</div>
                                                            </div>
                                                            <div data-variable-name="doorcolout" data-variable-value="btndoorcolout22" data-doorcolout="btndoorcolout22" data-price="16500" class="texture-item<?=(isset($_GET['doorcolout']) AND $_GET['doorcolout'] == 'btndoorcolout22') ? ' active' : ''?>" id='btndoorcolout22' onclick='doorColOut("btndoorcolout22")'>
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
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-style-default" <?=((isset($_GET['outdoorstyles']) AND $_GET['outdoorstyles'] == 'classic') AND (isset($_GET['model']) AND $_GET['model'] == '1')) ? '' : 'style="display: none;"'?>>
                            <button type="button" class="btn accordion-header" id='close-button-3step-1' onclick="closeblock('aria-step3-style-default', 'close-button-3step-1', 'checkbox-3step-style-default')">
                                <span class="accordion-head"><span class="step">1. </span>Стиль</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step3-style-default">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-btn-group-wrapper">
                                            <button type="button"
                                                class="cfg-btn cfg-btn-group btn btn-normal btn-gradient-primary active">
                                                <span><em>Металл гладкий</em> <em>Metal</em></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-3step-metcol">
                            <button type="button" class="btn accordion-header" id='close-button-3step-2' onclick="closeblock('aria-step3-metcol', 'close-button-3step-2', 'checkbox-3step-metcol')">
                                <span class="accordion-head"><span class="step">2. </span>Цвет металла</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step3-metcol">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group">
                                            <div class="tabs-group-item tabs-2">
                                                <div class="tab tab-2 active">Полимерное покрытие</div>
                                            </div>

                                            <hr>

                                            <div class="tabs-group-body">
                                                <div>
                                                    <div class="cfg-image-banner" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-banners/dff5be3b0bdd905f75ec51ae92b4ed08.jpeg); background-size: cover;">
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
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout1" data-metalcolout="btncolout1" data-price="0" class="texture-item<?=((isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout1') OR !isset($_GET['metalcolout'])) ? ' active' : ''?>" id="btncolout1" onclick="metalColOut('btncolout1')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image bronze property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">Базовое</div>
                                                                </div>
                                                                <div class="texture-title">Bronze</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout2" data-metalcolout="btncolout2" data-price="5400" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout2') ? ' active' : ''?>" id="btncolout2" onclick="metalColOut('btncolout2')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image silver property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">5400 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Silver</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout3" data-metalcolout="btncolout3" data-price="5400" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout3') ? ' active' : ''?>" id="btncolout3" onclick="metalColOut('btncolout3')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image vesuvio property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">5400 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Vesuvio</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout4" data-metalcolout="btncolout4" data-price="5400" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout4') ? ' active' : ''?>" id="btncolout4" onclick="metalColOut('btncolout4')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image tobacco property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">5400 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Tobacco</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout5" data-metalcolout="btncolout5" data-price="15000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout5') ? ' active' : ''?>" id="btncolout5" onclick="metalColOut('btncolout5')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_9003 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">15 000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 9003</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout6" data-metalcolout="btncolout6" data-price="5400" class="texture-item" id="btncolout6<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout6') ? ' active' : ''?>" onclick="metalColOut('btncolout6')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image patina property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">5400 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Patina</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout7" data-metalcolout="btncolout7" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout7') ? ' active' : ''?>" id="btncolout7" onclick="metalColOut('btncolout7')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_8017 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 8017</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout8" data-metalcolout="btncolout8" data-price="5400" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout8') ? ' active' : ''?>" id="btncolout8" onclick="metalColOut('btncolout8')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image delmare property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">5400 ₽</div>
                                                                </div>
                                                                <div class="texture-title">Del Mare</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout9" data-metalcolout="btncolout9" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout9') ? ' active' : ''?>" id="btncolout9" onclick="metalColOut('btncolout9')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_9005 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 9005</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout10" data-metalcolout="btncolout10" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout10') ? ' active' : ''?>" id="btncolout10" onclick="metalColOut('btncolout10')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_7043 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 7043</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout11" data-metalcolout="btncolout11" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout11') ? ' active' : ''?>" id="btncolout11" onclick="metalColOut('btncolout11')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_7009 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 7009</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout12" data-metalcolout="btncolout12" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout12') ? ' active' : ''?>" id="btncolout12" onclick="metalColOut('btncolout12')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_6005 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 6005</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout13" data-metalcolout="btncolout13" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout13') ? ' active' : ''?>" id="btncolout13" onclick="metalColOut('btncolout13')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_6028 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 6028</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout14" data-metalcolout="btncolout14" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout14') ? ' active' : ''?>" id="btncolout14" onclick="metalColOut('btncolout14')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_8025 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 8025</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout15" data-metalcolout="btncolout15" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout15') ? ' active' : ''?>" id="btncolout15" onclick="metalColOut('btncolout15')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_7006 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 7006</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout16" data-active="false" data-metalcolout="btncolout16" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout16') ? ' active' : ''?>" id="btncolout16" onclick="metalColOut('btncolout16')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_1019 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 1019</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout17" data-active="false" data-metalcolout="btncolout17" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout17') ? ' active' : ''?>" id="btncolout17" onclick="metalColOut('btncolout17')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_3005 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 3005</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout18" data-metalcolout="btncolout18" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout18') ? ' active' : ''?>" id="btncolout18" onclick="metalColOut('btncolout18')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_3031 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 3031</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout19" data-metalcolout="btncolout19" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout19') ? ' active' : ''?>" id="btncolout19" onclick="metalColOut('btncolout19')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_5005 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 5005</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout20" data-metalcolout="btncolout20" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout20') ? ' active' : ''?>" id="btncolout20" onclick="metalColOut('btncolout20')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_7004 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 7004</div>
                                                            </div>
                                                            <div data-variable-name="metalcolout" data-variable-value="btncolout21" data-metalcolout="btncolout21" data-price="6000" class="texture-item<?=(isset($_GET['metalcolout']) AND $_GET['metalcolout'] == 'btncolout21') ? ' active' : ''?>" id="btncolout21" onclick="metalColOut('btncolout21')">
                                                                <div class="texture-image-cover">
                                                                    <div class="texture-image ral_7024 property-texture color_in  base">
                                                                        <div class="image"></div>
                                                                    </div>
                                                                    <div class="texture-price">6000 ₽</div>
                                                                </div>
                                                                <div class="texture-title">RAL 7024</div>
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
                                <div class="step">Шаг <span>4</span>: </div>
                                <div class="title">Фурнитура</div>
                            </div>
                            <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-call" href="javascript:;">
                                <span>Помощь менеджера</span>
                            </button>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus lock-system" id="checkbox-4step-lock-system">
                            <button type="button" class="btn accordion-header" id='close-button-5step-1'
                                onclick="closeblock('aria-step4-lock-system', 'close-button-5step-1', 'checkbox-4step-lock-system')">
                                <span class="accordion-head">
                                    <span class="step">1. </span>Замковая система</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step4-lock-system">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div>
                                            <div class="tabs-group" withoutscroll="true">
                                                <div class="tabs-group-item tabs-2">
                                                    <div data-variable-name="locknumber" data-variable-value="lockbtn1" data-locknumber="lockbtn1" data-price="0" class="tab tab-2<?=((isset($_GET['locknumber']) AND $_GET['locknumber'] == 'lockbtn1') OR !isset($_GET['locknumber'])) ? ' active' : ''?>" id="lockbtn1" onclick="lockNumber('lockbtn1')">1 замок</div>
                                                    <div data-variable-name="locknumber" data-variable-value="lockbtn2" data-locknumber="lockbtn2" data-price="0" class="tab tab-2<?=(isset($_GET['locknumber']) AND $_GET['locknumber'] == 'lockbtn2') ? ' active' : ''?>" id="lockbtn2" onclick="lockNumber('lockbtn2')">2 замка</div>
                                                </div>

                                                <hr>

                                                <div class="tabs-group-body" id="lock-group-body1" <?=((isset($_GET['locknumber']) AND $_GET['locknumber'] == 'lockbtn1') OR !isset($_GET['locknumber'])) ? '' : 'style="display: none"'?>>
                                                    <div>
                                                        <div class="lock-group">
                                                            <div class="cfg-locksystem-parts">
                                                                <div class="cfg-locksystem-parts-pictures">
                                                                    <div class="cfg-locksystem-parts-pictures-item">
                                                                        <img src="https://portalle.ru/storage/cfg-door-extend-locks/ea8116a199873c4a698620afd79c9c1e.png" alt="" class="cfg-locksystem-parts-pictures-item-img">
                                                                    </div>
                                                                    <div class="cfg-locksystem-parts-pictures-item">
                                                                        <img src="https://portalle.ru/assets/img/design/configurator/lock/key_suvald.png" alt="" class="cfg-locksystem-parts-pictures-item-img">
                                                                        <div class="cfg-locksystem-parts-pictures-item-text">Сувальдный ключ</div>
                                                                    </div>
                                                                </div>
                                                                <div class="cfg-locksystem-parts-items">
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item1" data-lockitems="cfg-lock-item1" data-price="0" class="cfg-locksystem<?=((isset($_GET['lockitems']) AND $_GET['lockitems'] == 'cfg-lock-item1') OR !isset($_GET['lockitems'])) ? ' active' : ''?>" id="cfg-lock-item1" onclick="lockItems('cfg-lock-item1')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Guardian сувальдный</div>
                                                                            <div class="cfg-locksystem-info-cost">0 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-russian">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">2 класс защиты</div>
                                                                            <div class="button-standart item">односистемный</div>
                                                                            <div class="button-standart item">Сувальдный</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item2" data-lockitems="cfg-lock-item2" data-price="8300" class="cfg-locksystem<?=(isset($_GET['lockitems']) AND $_GET['lockitems'] == 'cfg-lock-item2') ? ' active' : ''?>" id="cfg-lock-item2" onclick="lockItems('cfg-lock-item2')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Kale сувальдный</div>
                                                                            <div class="cfg-locksystem-info-cost">8300 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-turkey">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">2 класс защиты</div>
                                                                            <div class="button-standart item">односистемный</div>
                                                                            <div class="button-standart item">Сувальдный</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item3" data-lockitems="cfg-lock-item3" data-price="9700" class="cfg-locksystem<?=(isset($_GET['lockitems']) AND $_GET['lockitems'] == 'cfg-lock-item3') ? ' active' : ''?>" id="cfg-lock-item3" onclick="lockItems('cfg-lock-item3')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Securemmem сувальдный</div>
                                                                            <div class="cfg-locksystem-info-cost">9700 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-italy">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">4 класс защиты
                                                                            </div>
                                                                            <div class="button-standart item">односистемный</div>
                                                                            <div class="button-standart item">Сувальдный</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item4" data-lockitems="cfg-lock-item4" data-price="12000" class="cfg-locksystem<?=(isset($_GET['lockitems']) AND $_GET['lockitems'] == 'cfg-lock-item4') ? ' active' : ''?>" id="cfg-lock-item4" onclick="lockItems('cfg-lock-item4')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Kale цилиндровый</div>
                                                                            <div class="cfg-locksystem-info-cost">12 000 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-turkey">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">3 класс защиты
                                                                            </div>
                                                                            <div class="button-standart item">односистемный</div>
                                                                            <div class="button-standart item">Цилиндрический</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item5" data-lockitems="cfg-lock-item5" data-price="23300" class="cfg-locksystem<?=(isset($_GET['lockitems']) AND $_GET['lockitems'] == 'cfg-lock-item5') ? ' active' : ''?>" id="cfg-lock-item5" click="lockItems('cfg-lock-item5')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title"> Guardian, электро-механический</div>
                                                                            <div class="cfg-locksystem-info-cost">23 300 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-russian">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">3 класс защиты</div>
                                                                            <div class="button-standart item">односистемный</div>
                                                                            <div class="button-standart item">Цилиндрический</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item6" data-lockitems="cfg-lock-item6" data-price="128200" class="cfg-locksystem<?=(isset($_GET['lockitems']) AND $_GET['lockitems'] == 'cfg-lock-item6') ? ' active' : ''?>" id="cfg-lock-item6"
                                                                        onclick="lockItems('cfg-lock-item6')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Biocode</div>
                                                                            <div class="cfg-locksystem-info-cost">128 200 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-russian">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">3 класс защиты</div>
                                                                            <div class="button-standart item">Односистемный</div>
                                                                            <div class="button-standart item">Цилиндрический</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tabs-group-body" id="lock-group-body2" <?=(isset($_GET['locknumber']) AND $_GET['locknumber'] == 'lockbtn2') ? '' : 'style="display: none"'?>>
                                                    <div>
                                                        <div class="lock-group">
                                                            <div class="cfg-locksystem-parts">
                                                                <div class="cfg-locksystem-parts-pictures">
                                                                    <div class="cfg-locksystem-parts-pictures-item"><img alt="" class="cfg-locksystem-parts-pictures-item-img" src="https://portalle.ru/storage/cfg-door-extend-locks/499a51c8f3dca536879a458f8bc0b2f7.png">
                                                                    </div>
                                                                    <div class="cfg-locksystem-parts-pictures-item"><img src="https://portalle.ru/assets/img/design/configurator/lock/key_suvald.png" alt="" class="cfg-locksystem-parts-pictures-item-img">
                                                                        <div class="cfg-locksystem-parts-pictures-item-text">Сувальдный ключ</div>
                                                                    </div>
                                                                </div>
                                                                <div class="cfg-locksystem-parts-items">
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item7" data-lockitems="cfg-lock-item7" data-price="9700" class="cfg-locksystem<?=(isset($_GET['lockitems']) AND $_GET['lockitems'] == 'cfg-lock-item7') ? ' active' : ''?>" id="cfg-lock-item7" onclick="lockItems('cfg-lock-item7')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Kale сувальдные</div>
                                                                            <div class="cfg-locksystem-info-cost">9700 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-turkey">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">2 класс защиты</div>
                                                                            <div class="button-standart item">разнесенные</div>
                                                                            <div class="button-standart item">Сувальдный</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item8" data-lockitems="cfg-lock-item8" data-price="13500" class="cfg-locksystem<?=(isset($_GET['lockitems']) AND $_GET['lockitems'] == 'cfg-lock-item8') ? ' active' : ''?>" id="cfg-lock-item8" onclick="lockItems('cfg-lock-item8')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Kale цилинд. и сувальд.</div>
                                                                            <div class="cfg-locksystem-info-cost">13 500 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-turkey">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">3 класс защиты</div>
                                                                            <div class="button-standart item">разнесенные</div>
                                                                            <div class="button-standart item">Цилиндрический</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item9" data-lockitems="cfg-lock-item9" data-price="19600" class="cfg-locksystem<?=(isset($_GET['lockitems']) AND $_GET['lockitems'] == 'cfg-lock-item9') ? ' active' : ''?>" id="cfg-lock-item9" onclick="lockItems('cfg-lock-item9')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Guardian Revolution</div>
                                                                            <div class="cfg-locksystem-info-cost">19 600 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-russian">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">4 класс ащиты</div>
                                                                            <div class="button-standart item">двусистемный</div>
                                                                            <div class="button-standart item">Цилиндрический</div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item10" data-lockitems="cfg-lock-item10" data-price="13700" class="cfg-locksystem<?=(isset($_GET['lockitems']) AND $_GET['lockitems'] == 'cfg-lock-item10') ? ' active' : ''?>" id="cfg-lock-item10" onclick="lockItems('cfg-lock-item10')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">Securemme сувальдные</div>
                                                                            <div class="cfg-locksystem-info-cost">13 700 ₽</div>
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
                                                                    <div data-variable-name="lockitems" data-variable-value="cfg-lock-item11" data-lockitems="cfg-lock-item11" data-price="36900" class="cfg-locksystem<?=(isset($_GET['lockitems']) AND $_GET['lockitems'] == 'cfg-lock-item11') ? ' active' : ''?>" id="cfg-lock-item11" onclick="lockItems('cfg-lock-item11')">
                                                                        <div class="cfg-locksystem-info">
                                                                            <div class="cfg-locksystem-info-title">CISA Revolution</div>
                                                                            <div class="cfg-locksystem-info-cost">36 900 ₽</div>
                                                                        </div>
                                                                        <div class="cfg-locksystem-group">
                                                                            <div class="button-flag item flag-italy">
                                                                                <div class="flag-icon"></div>
                                                                            </div>
                                                                            <div class="button-standart item">4 класс защиты</div>
                                                                            <div class="button-standart item">двусистемный</div>
                                                                            <div class="button-standart item">Цилиндрический</div>
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
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-4step-handle-color">
                            <button type="button" class="btn accordion-header" id='close-button-4step-1' onclick="closeblock('aria-step4-handle-color', 'close-button-4step-1', 'checkbox-4step-handle-color')">
                                <span class="accordion-head"><span class="step">2. </span>Цвет</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step4-handle-color">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-color furniture-color-circle">
                                            <span class="swipe-info">Свайпайте чтобы
                                                посмотреть все цвета</span>
                                            <div class="texture-group">
                                                <div data-variable-name="furniturecol" data-variable-value="furn-col-1" data-furniturecol="furn-col-1" data-price="0" class="texture-item<?=((isset($_GET['furniturecol']) AND $_GET['furniturecol'] == 'furn-col-1') OR !isset($_GET['furniturecol'])) ? ' active' : ''?>" id="furn-col-1" onclick="furnitureCol('furn-col-1')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image chrome property-texture furniture_color base">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">Базовое</div>
                                                    </div>
                                                    <div class="texture-title">Хром</div>
                                                </div>
                                                <div data-variable-name="furniturecol" data-variable-value="furn-col-2" data-furniturecol="furn-col-2" data-price="7500" class="texture-item<?=(isset($_GET['furniturecol']) AND $_GET['furniturecol'] == 'furn-col-2') ? ' active' : ''?>" id="furn-col-2" onclick="furnitureCol('furn-col-2')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image chrome_mat property-texture furniture_color  base">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">7500 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Хром матовый</div>
                                                </div>
                                                <div data-variable-name="furniturecol" data-variable-value="furn-col-3" data-active="false" data-furniturecol="furn-col-3" data-price="9200" class="texture-item<?=(isset($_GET['furniturecol']) AND $_GET['furniturecol'] == 'furn-col-3') ? ' active' : ''?>" id="furn-col-3" onclick="furnitureCol('furn-col-3')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image bronze property-texture furniture_color  base">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">9200 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Бронза</div>
                                                </div>
                                                <div data-variable-name="furniturecol" data-variable-value="furn-col-4" data-active="false" data-furniturecol="furn-col-4" data-price="7500" class="texture-item<?=(isset($_GET['furniturecol']) AND $_GET['furniturecol'] == 'furn-col-4') ? ' active' : ''?>" id="furn-col-4" onclick="furnitureCol('furn-col-4')">
                                                    <div class="texture-image-cover">
                                                        <div class="texture-image gold property-texture furniture_color  base">
                                                            <div class="image"></div>
                                                        </div>
                                                        <div class="texture-price">7500 ₽</div>
                                                    </div>
                                                    <div class="texture-title">Золото</div>
                                                </div>
                                                <div data-variable-name="furniturecol" data-variable-value="furn-col-5" data-active="false" data-furniturecol="furn-col-5" data-price="11500" class="texture-item<?=(isset($_GET['furniturecol']) AND $_GET['furniturecol'] == 'furn-col-5') ? ' active' : ''?>" id="furn-col-5" onclick="furnitureCol('furn-col-5')">
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
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-4step-handle-type">
                            <button type="button" class="btn accordion-header" id='close-button-4step-2' onclick="closeblock('aria-step4-handle-type', 'close-button-4step-2', 'checkbox-4step-handle-type')">
                                <span class="accordion-head"><span class="step">3. </span>Ручка</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step4-handle-type">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="tabs-group">
                                            <div class="tabs-group-item tabs-2">
                                                <div class="tab active tab-2">Cтандартные ручки</div>
                                            </div>

                                            <hr>

                                            <div class="tabs-group-body">
                                                <div>
                                                    <div class="option-changer-wrapper"></div>
                                                    <div class="furniture-group furn-type">
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-1" data-furnituretype="furn-item-1" data-price="0" class="furniture-item furniture-item--big<?=((isset($_GET['furnituretype']) AND $_GET['furnituretype'] == 'furn-item-1') OR !isset($_GET['furnituretype'])) ? ' active' : ''?>" id="furn-item-1" onclick="furnitureType('furn-item-1')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country ru"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-1" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/405f0c310183529e5a0ee21d62ad41a0.jpeg);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Venera</div>
                                                            <div class="furniture-item-title">Базовое</div>
                                                        </div>
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-2" data-furnituretype="furn-item-2" data-price="6900" class="furniture-item furniture-item--big<?=(isset($_GET['furnituretype']) AND $_GET['furnituretype'] == 'furn-item-2') ? ' active' : ''?>" id="furn-item-2" onclick="furnitureType('furn-item-2')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country it"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-2" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/0c67eacfbb1d0f3b533d8df147f7122f.jpeg);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Garda</div>
                                                            <div class="furniture-item-title">6900 ₽</div>
                                                        </div>
                                                        <div data-variable-name="furnituretype" data-variable-value="furn-item-3" data-furnituretype="furn-item-3" data-price="10200" class="furniture-item furniture-item--big<?=(isset($_GET['furnituretype']) AND $_GET['furnituretype'] == 'furn-item-3') ? ' active' : ''?>" id="furn-item-3" onclick="furnitureType('furn-item-3')">
                                                            <div class="furniture-item-image-cover">
                                                                <span class="furniture-item-image-country it"></span>
                                                                <div class="furniture-item-image" id="furn-item-img-3" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/c7481eb76c5db94ed8ce063be475be46.jpeg);">
                                                                </div>
                                                            </div>
                                                            <div class="furniture-item-title">Trendy</div>
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
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-4step-loops-type">
                            <button type="button" class="btn accordion-header" id='close-button-4step-3' onclick="closeblock('aria-step4-loops-type', 'close-button-4step-3', 'checkbox-4step-loops-type')">
                                <span class="accordion-head"><span class="step">4. </span>Тип петель</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step4-loops-type">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group door-hinges">
                                            <div data-variable-name="hinges" data-variable-value="furn-hinges-item1" data-hinges="furn-hinges-item1" data-price="0" class="furniture-item furniture-item--big<?=((isset($_GET['hinges']) AND $_GET['hinges'] == 'furn-hinges-item1') OR !isset($_GET['hinges'])) ? ' active' : ''?>" id="furn-hinges-item1" onclick="chooseHinges('furn-hinges-item1')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/92bf621f3b8054c5fb0e94e35fd8db2e.jpeg);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Стандартный</div>
                                                <div class="furniture-item-title">Базовое</div>
                                            </div>
                                            <div data-variable-name="hinges" data-variable-value="furn-hinges-item2" data-hinges="furn-hinges-item2" data-price="26600" class="furniture-item furniture-item--big<?=(isset($_GET['hinges']) AND $_GET['hinges'] == 'furn-hinges-item2') ? ' active' : ''?>" id="furn-hinges-item2" onclick="chooseHinges('furn-hinges-item2')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country it"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/0d1fa0c0414d11039fe35726cfce44b0.jpeg);">
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
                        <div data-variable-name="furniture_listtype_check" data-variable-value="1" data-furniture_listtype_check="1" data-price="0" class="checkbox-accordion accordion accordion--with-plus accordion-closed colored" id="checkbox-4step-plate">
                            <div class="checkbox-accordion-header" id="close-button-4step-5" onclick="togglerListStep4()">
                                <div class="title">
                                    <div class="step">5. </div>
                                    <span>Защитная пластина</span>
                                </div>
                                <div class="checkbox-accordion-toggler">
                                    <label class="toggler">
                                        <div class="checkbox-pseudo-input<?=(isset($_GET['furniture_listtype_check'])) ? ' checked' : ''?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div aria-expanded="true" id="aria-step4-plate" <?=(isset($_GET['furniture_listtype_check'])) ? '' : 'style="display: none;"'?>>
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group list-type">
                                            <div data-variable-name="furniturelisttype" data-variable-value="furn-list-item-1" data-furniturelisttype="furn-list-item-1" data-price="0" class="furniture-item furniture-item--big<?=((isset($_GET['furniturelisttype']) AND $_GET['furniturelisttype'] == 'furn-list-item-1') OR !isset($_GET['furniturelisttype'])) ? ' active' : ''?>" id="furn-list-item-1" onclick="furnitureListType('furn-list-item-1')">
                                                <div class="furniture-item-image-cover"><span lass="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/ed067e08dfaf847264413f1d123967d1.jpeg);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Sparta серебро</div>
                                                <div class="furniture-item-title">14 800 ₽</div>
                                            </div>
                                            <div data-variable-name="furniturelisttype" data-variable-value="furn-list-item-2" data-furniturelisttype="furn-list-item-2" data-price="25300" class="furniture-item furniture-item--big<?=(isset($_GET['furniturelisttype']) AND $_GET['furniturelisttype'] == 'furn-list-item-2') ? ' active' : ''?>" id="furn-list-item-2" onclick="furnitureListType('furn-list-item-2')">
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/f81d6f5523f0acbf905539d64f23fd0f.jpeg);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Vizantia золото</div>
                                                <div class="furniture-item-title">25 300 ₽</div>
                                            </div>
                                            <div data-variable-name="furniturelisttype" data-variable-value="furn-list-item-3" data-furniturelisttype="furn-list-item-3" data-price="15000" class="furniture-item furniture-item--big<?=(isset($_GET['furniturelisttype']) AND $_GET['furniturelisttype'] == 'furn-list-item-3') ? ' active' : ''?>" id="furn-list-item-3" onclick="furnitureListType('furn-list-item-3')">
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image"
                                                        style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/9046425eeef037dd2a00cc341f9a6ebe.jpeg);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Vizantia бронза</div>
                                                <div class="furniture-item-title">15 000 ₽</div>
                                            </div>
                                            <div data-variable-name="furniturelisttype" data-variable-value="furn-list-item-4" data-furniturelisttype="furn-list-item-4" data-price="15000" class="furniture-item furniture-item--big<?=(isset($_GET['furniturelisttype']) AND $_GET['furniturelisttype'] == 'furn-list-item-4') ? ' active' : ''?>" id="furn-list-item-4" onclick="furnitureListType('furn-list-item-4')">
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/a6b6a85c8844e1b899a65e4dd279a843.jpeg);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Черная</div>
                                                <div class="furniture-item-title">15 000 ₽</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-4step-doorstep">
                            <button type="button" class="btn accordion-header" id='close-button-4step-6' onclick="closeblock('aria-step4-doorstep', 'close-button-4step-6', 'checkbox-4step-doorstep')">
                                <span class="accordion-head"><span class="step">6. </span>Порог</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step4-doorstep">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group furn-doorstep">
                                            <div data-variable-name="furnituredoorsteptype" data-variable-value="doorstep-item1" data-furnituredoorsteptype="doorstep-item1" data-price="0" class="furniture-item furniture-item--big<?=((isset($_GET['furnituredoorsteptype']) AND $_GET['furnituredoorsteptype'] == 'doorstep-item1') OR !isset($_GET['furnituredoorsteptype'])) ? ' active' : ''?>" id="doorstep-item1" onclick="furnitureDoorStepType('doorstep-item1')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/79e1a387b569fceb1e655ccad7e1433e.jpeg);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Стандартный</div>
                                                <div class="furniture-item-title">Базовое</div>
                                            </div>
                                            <div data-variable-name="furnituredoorsteptype" data-variable-value="doorstep-item2" data-furnituredoorsteptype="doorstep-item2" data-price="10200" class="furniture-item furniture-item--big<?=(isset($_GET['furnituredoorsteptype']) AND $_GET['furnituredoorsteptype'] == 'doorstep-item2') ? ' active' : ''?>" id="doorstep-item2" onclick="furnitureDoorStepType('doorstep-item2')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/0d0010506fb686d917043bf2445dfe88.jpeg);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Накладной порог Sparta Хром</div>
                                                <div class="furniture-item-title">10 200 ₽</div>
                                            </div>
                                            <div data-variable-name="furnituredoorsteptype" data-variable-value="doorstep-item3" data-furnituredoorsteptype="doorstep-item3" data-price="12800" class="furniture-item furniture-item--big<?=(isset($_GET['furnituredoorsteptype']) AND $_GET['furnituredoorsteptype'] == 'doorstep-item3') ? ' active' : ''?>" id="doorstep-item3"
                                                onclick="furnitureDoorStepType('doorstep-item3')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/efb969d2f49cab7e127b3eb1e593d203.jpeg);">
                                                    </div>
                                                </div>
                                                <div class="furniture-item-title">Накладной порог Vizantia Золото</div>
                                                <div class="furniture-item-title">12 800 ₽</div>
                                            </div>
                                            <div data-variable-name="furnituredoorsteptype" data-variable-value="doorstep-item4" data-furnituredoorsteptype="doorstep-item4" data-price="21600" class="furniture-item furniture-item--big<?=(isset($_GET['furnituredoorsteptype']) AND $_GET['furnituredoorsteptype'] == 'doorstep-item4') ? ' active' : ''?>" id="doorstep-item4" onclick="furnitureDoorStepType('doorstep-item4')">
                                                <div class="furniture-item-image-cover">
                                                    <span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/1133feda8c125866496cd8837cdc4e7d.jpeg);">
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
                    </div>
                    <div class="step" id="step__6" btn="">
                        <div class="step-header">
                            <div class="step-header-title">
                                <div class="step">
                                    Шаг <span>6</span>: 
                                </div>
                                <div class="title">
                                    Другие опции
                                </div>
                            </div> <button type="button"
                                class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-call" href="javascript:;">
                                <span>Помощь менеджера</span>
                            </button>
                        </div>
                        <div data-variable-name="furniture_closer_check" data-variable-value="1" data-furniture_closer_check="1" data-price="0" class="checkbox-accordion accordion accordion--with-plus colored" id="checkbox-6step-closer">
                            <!---->
                            <div class="checkbox-accordion-header" onclick="togglerCloserStep6()">
                                <div class="title">
                                    <div class="step">1. </div>
                                    <span>Тип доводчика</span>
                                </div>
                                <div class="checkbox-accordion-toggler">
                                    <label class="toggler">
                                        <div class="checkbox-pseudo-input<?=(isset($_GET['furniture_closer_check'])) ? ' checked' : ''?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div aria-expanded="true" id="aria-step4-closer" <?=(isset($_GET['furniture_closer_check'])) ? '' : 'style="display: none;"'?> class="closing">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group closer-items">
                                            <div data-variable-name="furnitem_closer" data-variable-value="closer-item1-step_6" data-furnitem_closerm="closer-item1-step_6" data-price="8700" class="furniture-item furniture-item--big<?=((isset($_GET['furnitem_closer']) AND $_GET['furnitem_closer'] == 'closer-item1-step_6') OR !isset($_GET['furnitem_closer'])) ? ' active' : ''?>" id="closer-item1" onclick="furnItem('closer-item1', '#step__6 .closer-items .furniture-item')">
                                                <!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/8b77712d56d04897a1ebe82a88ef0649.jpeg);">
                                                    </div>
                                                    <!---->
                                                </div>
                                                <div class="furniture-item-title">Черный (внешний)</div>
                                                <div class="furniture-item-title">8700 ₽</div>
                                            </div>
                                            <div data-variable-name="furnitem_closer" data-variable-value="closer-item2-step_6" data-furnitem_closer="closer-item2-step_6" data-price="8700" class="furniture-item furniture-item--big<?=(isset($_GET['furnitem_closer']) AND $_GET['furnitem_closer'] == 'closer-item2-step_6') ? ' active' : ''?>" id="closer-item2" onclick="furnItem('closer-item2', '#step__6 .closer-items .furniture-item')">
                                                <!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/45890d2c84d6db168fcaf85d686a6120.jpeg);">
                                                    </div>
                                                    <!---->
                                                </div>
                                                <div class="furniture-item-title">Коричневый (внешний)</div>
                                                <div class="furniture-item-title">8700 ₽</div>
                                            </div>
                                            <div data-variable-name="furnitem_closer" data-variable-value="closer-item3-step_6" data-furnitem_closer="closer-item3-step_6" data-price="8700" class="furniture-item furniture-item--big<?=(isset($_GET['furnitem_closer']) AND $_GET['furnitem_closer'] == 'closer-item3-step_6') ? ' active' : ''?>" id="closer-item3" onclick="furnItem('closer-item3', '#step__6 .closer-items .furniture-item')">
                                                <!---->
                                                <div class="furniture-item-image-cover"><span class="furniture-item-image-country empty"></span>
                                                    <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/6b7a255c8ce55f07e3c93c136d2bb995.jpeg);">
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
                        <div data-variable-name="furniture_vent_check" data-variable-value="1" data-furniture_vent_check="1" data-price="0" class="checkbox-accordion accordion accordion--with-plus accordion-closed colored" id="checkbox-6step-ventil-grate">
                            <div class="checkbox-accordion-header" onclick="togglerGridStep6()">
                                <div class="title">
                                    <div class="step">2. </div> <span>Вентиляционная решетка</span>
                                </div>
                                <div class="checkbox-accordion-toggler">
                                    <label class="toggler">
                                        <div class="checkbox-pseudo-input<?=(isset($_GET['furniture_vent_check'])) ? ' checked' : ''?>">
                                            <span class="toggler-switch">
                                                <span class="toggler-icon"></span>
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div aria-expanded="true" id="aria-step6-ventil-grate" <?=(isset($_GET['furniture_vent_check'])) ? '' : 'style="display: none;"'?> class="">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="furniture-group">
                                            <div data-variable-name="furnitem_vent" data-variable-value="vent-item1-step_7" data-furnitem_vent="vent-item1-step_6" data-price="10500" class="furniture-item furniture-item--big<?=((isset($_GET['furnitem_vent']) AND $_GET['furnitem_vent'] == 'vent-item1-step_7') OR !isset($_GET['furnitem_vent'])) ? ' active' : ''?>"><!----> 
                                            <div class="furniture-item-image-cover">
                                                <span class="furniture-item-image-country empty"></span> 
                                                <div class="furniture-item-image" style="background-image: url(https://portalle.ru/storage/cfg-door-extend-furniture/70fa3395b7b28f90f2d7ed7a3ae343c0.png);"></div> <!---->
                                            </div> 
                                            <div class="furniture-item-title">Вентиляционная решетка</div> 
                                            <div class="furniture-item-title">10 500 ₽</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-variable-name="furniture_spec_check" data-variable-value="1" data-active="false" data-furniture_spec_check="1" data-price="0" class="checkbox-accordion accordion accordion--with-plus" id="checkbox-6step-specifications">
                            <button type="button" class="btn accordion-header" id="close-button-6step-3" onclick="closeblock('aria-step6-specifications', 'close-button-6step-3', 'checkbox-6step-specifications')">
                                <span class="accordion-head">
                                    <span class="step">3. 
                                    </span>
                                    Технические характеристики
                                </span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            
                            <div style="" aria-expanded="true" id="aria-step6-specifications">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-option-group" items="">
                                            <div class="cfg-option-changer-wrapper">
                                                <div class="cfg-option-changer-title">
                                                    Размер двери по коробу
                                                </div>
                                            </div>
                                            <div class="cfg-btn-group-wrapper size-items size-items">
                                                <button data-variable-name="furnitem_size" data-variable-value="size-item1-step_6" data-furnitem_size="size-item1-step_6" data-price="0" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?=(isset($_GET['furnitem_size']) AND $_GET['furnitem_size'] == 'size-item1-step_6') ? ' active' : ''?>" id="size-item1" onclick="furnItem('size-item1', '#step__6 .size-items .btn-gradient-primary')" data-fancybox data-src="#popup__get-call" href="javascript:;">
                                                    <span>
                                                        <em>Не знаю</em>
                                                    </span>
                                                </button>
                                                <button data-variable-name="furnitem_size" data-variable-value="size-item2-step_6" data-furnitem_size="size-item2-step_6" data-price="0" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?=(isset($_GET['furnitem_size']) AND $_GET['furnitem_size'] == 'size-item2-step_6') ? ' active' : ''?>" id="size-item2" onclick="furnItem('size-item2', '#step__6 .size-items .btn-gradient-primary')">
                                                    <span>
                                                        <em>960 х 2050 мм</em>
                                                    </span>
                                                </button>
                                                <button data-variable-name="furnitem_size" data-variable-value="size-item3-step_6" data-furnitem_size="size-item3-step_6" data-price="0" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?=((isset($_GET['furnitem_size']) AND $_GET['furnitem_size'] == 'size-item3-step_6') OR !isset($_GET['furnitem_size'])) ? ' active' : ''?>" id="size-item3" onclick="furnItem('size-item3', '#step__6 .size-items .btn-gradient-primary')">
                                                    <span>
                                                        <em>860 х 2050 мм</em>
                                                    </span>
                                                </button>
                                                <button data-variable-name="furnitem_size" data-variable-value="size-item4-step_6" data-furnitem_size="size-item4-step_6" data-price="0" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?=(isset($_GET['furnitem_size']) AND $_GET['furnitem_size'] == 'size-item4-step_6') ? ' active' : ''?>" id="size-item4" onclick="furnItem('size-item4', '#step__6 .size-items .btn-gradient-primary')" data-fancybox data-src="#popup__get-call" href="javascript:;">
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
                                                <button data-variable-name="furnitem_side" data-variable-value="side-item1-step_6" data-furnitem_side="side-item1-step_6" data-price="0" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?=((isset($_GET['furnitem_side']) AND $_GET['furnitem_side'] == 'side-item1-step_6') OR !isset($_GET['furnitem_side'])) ? ' active' : ''?>" id="side-item1" onclick="furnItem('side-item1', '#step__6 .side-items .btn-gradient-primary')">
                                                    <span>
                                                        <em>Правая</em>
                                                    </span>
                                                </button>
                                                <button data-variable-name="furnitem_side" data-variable-value="side-item2-step_6" data-furnitem_side="side-item2-step_6" data-price="0" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?=(isset($_GET['furnitem_side']) AND $_GET['furnitem_side'] == 'side-item2-step_6') ? ' active' : ''?>" id="side-item2" onclick="furnItem('side-item2', '#step__6 .side-items .btn-gradient-primary')">
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
                                                <button data-variable-name="furnitem_met" data-variable-value="met-item1-step_6" data-furnitem_met="met-item1-step_6" data-price="0" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?=((isset($_GET['furnitem_met']) AND $_GET['furnitem_met'] == 'met-item1-step_6') OR !isset($_GET['furnitem_met'])) ? ' active' : ''?>" id="met-item1" onclick="furnItem('met-item1', '#step__6 .met-items .btn-gradient-primary')">
                                                    <span>
                                                        <em>Холоднокатаная сталь
                                                            <span class="cfg-btn-cost"></span>
                                                        </em>
                                                    </span>
                                                </button>
                                                <button data-variable-name="furnitem_met" data-variable-value="met-item2-step_6" data-furnitem_met="met-item2-step_6" data-price="107900" type="button" class="cfg-btn btn btn-normal btn-gradient-primary<?=(isset($_GET['furnitem_met']) AND $_GET['furnitem_met'] == 'met-item2-step_6') ? ' active' : ''?>" id="met-item2" onclick="furnItem('met-item2', '#step__6 .met-items .btn-gradient-primary')">
                                                    <span>
                                                        <em>Нержавеющая сталь
                                                            <span class="cfg-btn-cost">(107 900 ₽)</span>
                                                        </em>
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
                                <div class="step"> Шаг <span>7</span>: </div>
                                <div class="title"> Ваша дверь готова!</div>
                            </div>
                            <button type="button" class="theme-apartment btn btn-normal btn-gradient-primary" data-fancybox data-src="#popup__get-order" href="javascript:;">
                                <span>Оформить заказ</span>
                            </button>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-7step-consult">
                            <button type="button" class="btn accordion-header" id='close-button-7step-1' onclick="closeblock('aria-step7-consult', 'close-button-7step-1', 'checkbox-7step-consult')">
                                <span class="accordion-head"><span class="step">1. </span>Консультация
                                    специалиста</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step7-consult">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-btn-group-wrapper">
                                            <button type="button"
                                                class="cfg-btn btn btn-normal btn-gradient-primary theme-accept active" data-fancybox data-src="#popup__get-order">
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
                                <span class="accordion-head"><span class="step">2. </span>Получите конфигурацию
                                    двери</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step7-config">
                                <div class="accordion-body">
                                    <div class="accordion-content">
                                        <div class="cfg-btn-group-wrapper size-items">
                                            <a href="#" id="door-cfg-download" class="cfg-btn btn btn-normal btn-primary cfg-btn-secondary">
                                                <span>Скачать в HTML формате</span>
                                            </a>                                            
                                            <button type="button" class="cfg-btn btn btn-normal btn-primary cfg-btn-secondary" data-fancybox data-src="#popup__toemail">
                                                <span>Отправить на почту</span>
                                            </button>
                                            <a href="#" id="door-cfg-print" class="cfg-btn btn btn-normal btn-primary cfg-btn-secondary" target="_blank">
                                                <span>Распечатать</span>
                                            </a>
                                            <button type="button" class="cfg-btn btn btn-normal btn-primary cfg-btn-secondary" data-fancybox data-src="#popup__share">
                                                <span>Поделиться</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox-accordion accordion accordion--with-plus" id="checkbox-7step-cheque">
                            <button type="button" class="btn accordion-header" id='close-button-7step-3' onclick="closelastblock('aria-step7-cheque', 'close-button-7step-3', 'cfg-hide', 'checkbox-7step-cheque')">
                                <span class="accordion-head"><span class="step">3. </span>Чек двери</span>
                                <span class="accordion-head-tab"></span>
                            </button>
                            <div aria-expanded="true" id="aria-step7-cheque"></div>
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
                                <a href="tel:88007751346">
                                    <span>8 800 775 13 46</span>
                                </a>
                                <p>Ответим на любые вопросы и поможем с выбором.
                                </p>
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
    <div class="popup__share-inner">
        <div class="popup__share-left">
            <div class="popup__share-title">
                Termo
            </div>
            <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                    <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                        <div class="container-door-preview">
                            <div class="container-door-preview-placeholder">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                    class="container-door-preview-img"
                                    style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0002/i-small.png&quot;);">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" style="width: 267px; height: 414px">
                        <div class="container-door-preview">
                            <div class="container-door-preview-placeholder">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                    class="container-door-preview-img loaded"
                                    style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0003/i-small.png&quot;);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup__share-cost-old">96300 ₽</div>
            <div class="popup__share-cost-current">89900 ₽</div>
        </div>
        <div class="popup__share-right">
            <div class="popup__share-title">Поделиться дверью</div>
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
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                    class="container-door-preview-img"
                                    style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0002/i-small.png&quot;);">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" style="width: 267px; height: 414px">
                        <div class="container-door-preview">
                            <div class="container-door-preview-placeholder">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                    class="container-door-preview-img loaded"
                                    style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0003/i-small.png&quot;);">
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
            <div class="popup__share-title">
                Termo
            </div>
            <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                    <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                        <div class="container-door-preview">
                            <div class="container-door-preview-placeholder">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                    class="container-door-preview-img"
                                    style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0002/i-small.png&quot;);">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" style="width: 267px; height: 414px">
                        <div class="container-door-preview">
                            <div class="container-door-preview-placeholder">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                    class="container-door-preview-img loaded"
                                    style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0003/i-small.png&quot;);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup__share-cost-old">96300 ₽</div>
            <div class="popup__share-cost-current">89900 ₽</div>
        </div>
        <div class="popup__share-right">
            <div class="popup__share-title">Скачать чек двери</div>
            <div class="popup__share-btns">
                <form>
                    <div class="popup__share-descr">Мы отправим вам на e-mail полную спецификацию двери.</div>
                    <input type="text" name="door_cfg_email" placeholder="Электронная почта">
                    <label for="popup__toemail-checkbox" class="popup__share-checkbox">
                        <input type="checkbox" name="door_cfg_privacy" id="popup__toemail-checkbox">
                        Я согласен с условиями обработки персональных данных и соглашением о пользовании сайтом
                    </label>
                    <!-- <div class="popup__share-btn-copy default-btn">Получить HTML</div> -->
                    <input type="submit" name="door_cfg_submit" value="Получить HTML" class="popup__share-btn-copy default-btn">
                </form>
            </div>
        </div>
    </div>
</div>

<div id="popup__get-order" style="display: none">
    <div class="popup__call-inner">
        <div class="popup__call-title">
            Оформить заказ
        </div>
        <div class="popup__call-blocks">
            <div class="popup__call-time">
                <div class="popup__call-time-top">
                    <div class="popup__call-time-title">Звонок</div>
                    <div class="popup__call-time-btns">
                        <button class="later-btn popup__time-btn popup-btn-numbers active" onclick='popupGetNumbersOrder()'>
                            <div class="popup__time-btn-title ">позвонить нам</div>
                        </button>
                        <button class="later-btn popup__time-btn popup-btn-call" onclick='popupGetCallOrder()'>
                            <div class="popup__time-btn-title ">выбрать время</div>
                        </button>
                    </div>
                </div>
                <div class="popup__share-left">
                    <div class="popup__share-title">
                        Termo
                    </div>
                    <div class="slider-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" style="width: 267px; margin-right: 5px;  height: 414px">
                                <div class="container-door-preview">
                                    <div class="container-door-preview-placeholder">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                            class="container-door-preview-img"
                                            style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0002/i-small.png&quot;);">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" style="width: 267px; height: 414px">
                                <div class="container-door-preview">
                                    <div class="container-door-preview-placeholder">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW0AAAHUCAQAAABbzbEUAAADwklEQVR42u3SMQ0AAAzDsJU/6VHoXdkQouRgUiTA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG6yNtSXA2mBtsDZYG3oPoKUB1TDn9VwAAAAASUVORK5CYII="
                                            class="container-door-preview-img loaded"
                                            style="background-image: url(&quot;https://img.portalle.ru/image/termo/o/1.85/0000000002w0003/i-small.png&quot;);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popup__share-cost-old">96300 ₽</div>
                    <div class="popup__share-cost-current">89900 ₽</div>
                </div>
                
            </div>
            <div class="popup__call-form">
                <div class="popup__call-form-inner" style="display: none">
                    <div class="popup__call-form-title">
                        Контактная форма
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
                        Свяжитесь с нами
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

<script type="text/javascript">

    $(document).ready(function(){
      
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

                    }
                    else {

                        alert(data.message);

                    }

                },
                error: function() {
                
                    alert('Error!');

                }

            });

        }); 

    });

    $(document).ready(function(){
      
        $('#popup__toemail form input[name="door_cfg_submit"]').on('click', function(e) {

            e.preventDefault();

            $.ajax({
                type: 'POST',
                data: { door_cfg_email : $('#popup__toemail form input[name="door_cfg_email"]').val(), door_cfg_privacy : $('#popup__toemail form input[name="door_cfg_privacy"]').is(':checked'), door_cfg : localStorage.getItem('door_cfg') },
                cache: false,
                url: '/constructor-send-door-cfg.php',
                success: function(response) {

                    //alert(response);

                    let data = JSON.parse(response);

                    if (data.status == 1) {

                        alert(data.message);

                        $(this).find('input[name="door_cfg_email"]').val('');

                    }
                    else {

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