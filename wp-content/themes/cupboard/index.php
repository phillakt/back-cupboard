<?php get_header(); ?>


<!-- ############# Menu-sticky ############### -->

<section class="menu-sticky home-page-menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="menu fjc-sb fai-c pl-30 pr-30 pt-20 pb-20">

                    <div class="sticky-search fjc-s fai-c">
                        <div class="mr-30">
                            <a href="#!" class="icon-search">
                                <img src="<?= get_template_directory_uri() ?>/img/menu/white/ico_search.svg"
                                     alt="ico_search">
                            </a>
                        </div>
                        <a href="#!" class="fjc-sb link link__default">
                            <div class="mr-20">
                                <img src="<?= get_template_directory_uri() ?>/img/menu/white/ico_phone.svg"
                                     alt="ico_search">
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

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="fjc-c pt-20 pb-20">
                    <img src="<?= get_template_directory_uri() ?>/img/logo/logo.svg" alt="logo">
                </div>
            </div>
        </div>
    </div>
</header>

<section class="main-slider">
    <div id="main-slider" class="owl-carousel owl-theme">
        <div class="item">
            <div class="item__h500"
                 style="background: url(<?= get_template_directory_uri() ?>/img/main-slider/items/item-1.png) no-repeat;">
            </div>
        </div>
        <div class="item">
            <div class="item__h500"
                 style="background: url(<?= get_template_directory_uri() ?>/img/main-slider/items/item-1.png) no-repeat;">
            </div>
        </div>
        <div class="item">
            <div class="item__h500"
                 style="background: url(<?= get_template_directory_uri() ?>/img/main-slider/items/item-1.png) no-repeat;">
            </div>
        </div>
    </div>
</section>

<section class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="menu fjc-sb fai-c pl-30 pr-30 pt-20 pb-20">

                    <div class="fjc-sb fai-c">
                        <div class="mr-30">
                            <a href="#!" class="icon-search">
                                <img src="<?= get_template_directory_uri() ?>/img/menu/white/ico_search.svg"
                                     alt="ico_search">
                            </a>
                        </div>
                        <a href="#!" class="fjc-sb link link__default">
                            <div class="mr-20">
                                <img src="<?= get_template_directory_uri() ?>/img/menu/white/ico_phone.svg"
                                     alt="ico_search">
                            </div>
                            <div class="link link__default link__default_w pt-5 fs-14">
                                +7 (000) 000 0000
                            </div>
                        </a>
                    </div>

                    <!-- Search form start -->
                    <div class="box-search display-none">
                        <label class="search-ico" for="menu-search">
                            <img src="<?= get_template_directory_uri() ?>/img/menu/search.svg" alt="search"></label>
                        <input id="menu-search" class="menu-search pl-50 pr-10 pt-5 pb-5 " type="text"
                               placeholder="Поиск">
                        <span class="search-close">×</span>
                    </div>
                    <!-- Search form end -->


                    <div class="menu-drop-hamburger">
                                <span class="c-white">
                                    Меню
                                </span>
                                <span class="pl-10 c-white">
                                    <i class="fas fa-bars"></i>
                                </span>
                    </div>

                    <div class="menu-drop pl-30 pr-30 pt-20 pb-20">
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
                </div>
            </div>
        </div>
    </div>
</section>

<section class="catalog">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mt-40">
                            <div class="fjc-sb fai-c pt-30 pb-30 pl-20"
                                 style="background: linear-gradient(90deg, #D74339 1.11%, #E27E36 98.52%);">
                                <h2 class="title title__h2 c-white">
                                    <a href="#!" class="link link__default link__default_w">Новинки</a>
                                </h2>
                                <div class="mr-20">
                                    <img src="<?= get_template_directory_uri() ?>/img/New_ico.svg" alt="New_ico">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-40">
                            <div class="fjc-sb fai-c pt-30 pb-30 pl-20" style="background: #373334">
                                <h2 class="title title__h2 c-white">
                                    <a href="#!" class="link link__default link__default_w">Реализованные
                                        проекты</a>
                                </h2>
                                <div class="mr-20">
                                    <img src="<?= get_template_directory_uri() ?>/img/Fire_ico.svg" alt="Fire_ico">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="title title__h1 c-red mt-60 mb-60">Каталог товаров</h1>
                    </div>

                    <div class="col-lg-3 offset-lg-3">
                        <div class="button button__red fjc-c fai-c pt-10 pb-10 mt-60 mb-60">
                            В каталог
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div class="box-height-overflow-h mb-30">
                    <div class="box-height box-height__500 ffd-column fjc-sb"
                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/1.png) no-repeat;">
                        <div class="catalog__header pt-30 pl-20">
                            <a href="#!" class="link link-catalog">Шкафы-купе</a>
                        </div>
                        <div class="catalog__footer pt-30 pl-30 pb-30">
                            <a href="#!" class="arrow">
                                <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                     alt="arrow">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/2.png ) no-repeat;">
                                <div class="catalog__header pt-30 pl-20">
                                    <a href="#!" class="link link-catalog">Шкафы-купе</a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="#!" class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/3.png ) no-repeat;">
                                <div class="catalog__header pt-30 pl-20">
                                    <a href="#!" class="link link-catalog">Шкафы-купе</a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="#!" class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/4.png ) no-repeat;">
                                <div class="catalog__header pt-30 pl-20">
                                    <a href="#!" class="link link-catalog">Шкафы-купе</a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="#!" class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 offset-lg-1">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/5.png ) no-repeat;">
                                <div class="catalog__header pt-30 pl-20">
                                    <a href="#!" class="link link-catalog">Шкафы-купе</a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="#!" class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/7.png ) no-repeat;">
                                <div class="catalog__header pt-30 pl-20">
                                    <a href="#!" class="link link-catalog">Шкафы-купе</a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="#!" class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/8.png ) no-repeat;">
                                <div class="catalog__header pt-30 pl-20">
                                    <a href="#!" class="link link-catalog">Шкафы-купе</a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="#!" class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-4">
                <div class="box-height-overflow-h mb-30">
                    <div class="box-height box-height__500 ffd-column fjc-sb"
                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/6.png ) no-repeat;">
                        <div class="catalog__header pt-30 pl-20">
                            <a href="#!" class="link link-catalog">Шкафы-купе</a>
                        </div>
                        <div class="catalog__footer pt-30 pl-30 pb-30">
                            <a href="#!" class="arrow">
                                <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                     alt="arrow">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div class="box-height-overflow-h mb-30">
                    <div class="box-height box-height__500 ffd-column fjc-sb"
                         style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/9.png) no-repeat;">
                        <div class="catalog__header pt-30 pl-20">
                            <a href="#!" class="link link-catalog">Шкафы-купе</a>
                        </div>
                        <div class="catalog__footer pt-30 pl-30 pb-30">
                            <a href="#!" class="arrow">
                                <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                     alt="arrow">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/10.png ) no-repeat;">
                                <div class="catalog__header pt-30 pl-20">
                                    <a href="#!" class="link link-catalog">Шкафы-купе</a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="#!" class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/11.png ) no-repeat;">
                                <div class="catalog__header pt-30 pl-20">
                                    <a href="#!" class="link link-catalog">Шкафы-купе</a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="#!" class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?= get_template_directory_uri() ?>/img/catalog/items/12.png ) no-repeat;">
                                <div class="catalog__header pt-30 pl-20">
                                    <a href="#!" class="link link-catalog">Шкафы-купе</a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="#!" class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
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
