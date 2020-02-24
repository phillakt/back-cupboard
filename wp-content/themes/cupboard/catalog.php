<?php
/*
Template Name: Шаблон "Каталог"
*/
?>
<?php get_header(); ?>
<!-- ############# Menu-sticky  ############### -->

<section class="menu-sticky menu-sticky-view">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="menu fjc-sb fai-c pl-30 pr-30 pt-20 pb-20">

                    <div class="sticky-search fjc-s fai-c">
                        <div class="mr-30">
                            <a href="#!" class="icon-search">
                                <img src="<?= get_template_directory_uri() ?>/img/menu/white/ico_search.svg" alt="ico_search">
                            </a>
                        </div>
                        <a href="#!" class="fjc-sb link link__default">
                            <div class="mr-20">
                                <img src="<?= get_template_directory_uri() ?>/img/menu/white/ico_phone.svg" alt="ico_search">
                            </div>
                            <div class="link link__default link__default_w pt-5 fs-14">
                                +7 (000) 000 0000
                            </div>
                        </a>
                        <!-- Search form start -->
                        <div class="box-search display-none">
                            <label class="search-ico" for="menu-search-sticky">
                                <img src="<?= get_template_directory_uri() ?>/img/menu/search.svg" alt="search"></label>
                            <input id="menu-search-sticky" class="menu-search pl-50 pr-10 pt-5 pb-5 "
                                   type="text" placeholder="Поиск">
                            <span class="search-close">×</span>
                        </div>
                        <!-- Search form end -->
                    </div>

                    <div class="sticky-logo fjc-c">
                        <a href="#!">
                            <img src="<?= get_template_directory_uri() ?>/img/logo-white.svg" alt="logo-white">
                        </a>
                    </div>

                    <div class="sticky-drop-hamburger menu-drop-hamburger fjc-e">
                                <span class="c-white">
                                    Меню
                                </span>
                                <span class="pl-10 c-white">
                                    <i class="fas fa-bars"></i>
                                </span>
                    </div>


                    <div class="menu-drop pl-30 pr-30 pt-30 pb-30">
                        <ul class="fai-s">
                            <li class="mr-40">
                                <a href="#!" class="link link-menu">Гланая</a>
                            </li>
                            <li class="menu-dropdown mr-40">
                                <a href="#!" class="link link-menu link-menu__drop">Каталог</a>

                                <ul class="submenu">
                                    <li>
                                        <a href="#!" class="fjc-s c-white fs-14 pt-10 pb-10 pl-20">Кухни</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="fjc-s c-white fs-14 pt-10 pb-10 pl-20">Межкомнатные
                                            перегородки</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="fjc-s c-white fs-14 pt-10 pb-10 pl-20">Гардеробные
                                            комнаты</a>
                                    </li>
                                </ul>

                            </li>
                            <li class="mr-40">
                                <a href="#!" class="link link-menu">О нас</a>
                            </li>
                            <li class="mr-40">
                                <a href="#!" class="link link-menu">Акции</a>
                            </li>
                        </ul>
                    </div>

                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ############# Menu-sticky end ############### -->

<section class="catalog catalog-all mt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title title__h1 c-red mt-60 mb-30">Каталог товаров</h1>
            </div>

            <div class="col-lg-12 mb-60">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <ul class="breadcrumbs fjc-s fai-c mt-20 mb-20">
                            <li class="fjc-s fai-c"><a href="#!"
                                                       class="fs-14 fw-700 link link__default link__default_b">Главная</a></li>
                            <li class="fjc-s fai-c"><span class="fjc-c fai-c pl-10 pr-10">—</span> <a href="#!"
                                                                                                      class="fs-14 fw-700 link link__default link__default_b">Каталог</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3">

                        <form class="form-cost" id="form-cost__catalog-all">
                            <div class="ui-select">

                                <button type="button"
                                        class="ui-select__head pt-10 pb-10 pl-10 pr-10 fjc-s br-1-black">Тип
                                    изделия</button>

                                <div class="ui-select__container">
                                    <div class="ui-select__option">
                                        <label for="ui-select__option_11"
                                               class="ui-select__item pt-10 pb-10 pl-10 fjc-s c-white">Lorem ipsum
                                            - 1</label>
                                        <input type="radio" name="ui-select-cost" id="ui-select__option_11"
                                               value="1">
                                    </div>
                                    <div class="ui-select__option">
                                        <label for="ui-select__option_22"
                                               class="ui-select__item pt-10 pb-10 pl-10 fjc-s c-white">Lorem ipsum
                                            - 2</label>
                                        <input type="radio" name="ui-select-cost" id="ui-select__option_22"
                                               value="2">
                                    </div>
                                    <div class="ui-select__option">
                                        <label for="ui-select__option_33"
                                               class="ui-select__item pt-10 pb-10 pl-10 fjc-s c-white">Lorem ipsum
                                            - 3</label>
                                        <input type="radio" name="ui-select-cost" id="ui-select__option_33"
                                               value="3">
                                    </div>
                                    <div class="ui-select__option">
                                        <label for="ui-select__option_44"
                                               class="ui-select__item pt-10 pb-10 pl-10 fjc-s c-white">Lorem ipsum
                                            - 4</label>
                                        <input type="radio" name="ui-select-cost" id="ui-select__option_44"
                                               value="4">
                                    </div>
                                    <div class="ui-select__option">
                                        <label for="ui-select__option_55"
                                               class="ui-select__item pt-10 pb-10 pl-10 fjc-s c-white">Lorem ipsum
                                            - 5</label>
                                        <input type="radio" name="ui-select-cost" id="ui-select__option_55"
                                               value="5">
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>



            <div class="col-lg-12">
                <div class="row bg-line">

                    <!-- 1 Left -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_1/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Шкафы-купе</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_1/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_1/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2 Right -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Прихожие</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_2/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_2/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_2/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3 Left -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_3/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Комоды</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_3/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_3/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4 Right -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Кухни</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_4/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_4/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_4/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 5 Left -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_5/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Межкомнатные перегородки</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_5/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_5/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 6 Right -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Гардеробные комнаты</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_6/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_6/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_6/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 7 Left -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_7/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Шкафы распашные</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_7/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_7/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 8 Right -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Домашнее рабочее место</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_8/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_8/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_8/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 9 Left -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_9/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Детские</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_9/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_9/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 10 Right -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Гостиные</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_10/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_10/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_10/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 11 Left -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_11/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Библиотеки</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_11/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_11/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 12 Right -->
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="fjc-s mb-30">
                                    <h2 class="title title__h2 c-black fw-700">Реализованные проекты</h2>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_12/1.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-8 offset-lg-4">
                                        <div class="mb-30">
                                            <div class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                                Подробнее
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__200 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_12/2.png) no-repeat;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="box-height-overflow-h">
                                    <div class="box-height box-height__350 ffd-column fjc-sb "
                                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/full-catalog/section_12/3.png) no-repeat;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php get_footer(); ?>