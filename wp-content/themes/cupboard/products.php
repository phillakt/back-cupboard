<?php
/*
Template Name: Шаблон "Продукты"
*/
?>

<?php get_header(); ?>

<!-- ############# Menu-sticky ############### -->

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

<section class="products mt-90 mb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title title__h1 c-red mt-60 mb-30">Каталог товаров</h1>
            </div>

            <div class="col-lg-12 mb-60">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <ul class="breadcrumbs fjc-s fai-c mt-20 mb-20">
                            <li class="fjc-s fai-c">
                                <a href="#!" class="fs-14 fw-700 link link__default link__default_b">Главная</a>
                            </li>
                            <li class="fjc-s fai-c">
                                <span class="fjc-c fai-c pl-10 pr-10">—</span>
                                <a href="#!" class="fs-14 fw-700 link link__default link__default_b">Каталог</a>
                            </li>
                            <li class="fjc-s fai-c">
                                <span class="fjc-c fai-c pl-10 pr-10">—</span>
                                <a href="#!"
                                   class="fs-14 fw-700 link link__default link__default_b">Шкафы-купе</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-60">
            <div class="col-lg-6">
                <div class="products-card">
                    <div class="box-height-overflow-h">
                        <div class="box-height box-height__255 ffd-column fjc-sb "
                             style="background: url(<?= get_template_directory_uri() ?>/img/products/section_1/1.png) no-repeat;">
                        </div>
                    </div>
                    <div class="products-card__column fjc-sb fai-c mt-30 mb-30">
                        <h3 class="title title__h2">
                            <a href="#!" class="fs-24 fw-700 link link__default link__default_b">Название
                                товара</a>
                        </h3>
                        <span class="fs-24 fw-700 c-red">от 240 000 руб</span>
                    </div>
                </div>

                <div class="products-card">
                    <div class="box-height-overflow-h mt-100">
                        <div class="box-height box-height__255 ffd-column fjc-sb "
                             style="background: url(<?= get_template_directory_uri() ?>/img/products/section_1/1.png) no-repeat;">
                        </div>
                    </div>
                    <div class="products-card__column fjc-sb fai-c mt-30 mb-30">
                        <h3 class="title title__h2">
                            <a href="#!" class="fs-24 fw-700 link link__default link__default_b">Название
                                товара</a>
                        </h3>
                        <span class="fs-24 fw-700 c-red">от 240 000 руб</span>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="products-card">
                    <div class="box-height-overflow-h">
                        <div class="box-height box-height__675 ffd-column fjc-sb"
                             style="background: url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png) no-repeat;">
                        </div>
                    </div>
                    <div class="products-card__column fjc-sb fai-c mt-30 mb-30">
                        <h3 class="title title__h2">
                            <a href="#!" class="fs-24 fw-700 link link__default link__default_b">Название
                                товара</a>
                        </h3>
                        <span class="fs-24 fw-700 c-red">от 240 000 руб</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-60">
            <div class="col-lg-6">
                <div class="products-card">
                    <div class="box-height-overflow-h">
                        <div class="box-height box-height__675 ffd-column fjc-sb"
                             style="background: url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png) no-repeat;">
                        </div>
                    </div>
                    <div class="products-card__column fjc-sb fai-c mt-30 mb-30">
                        <h3 class="title title__h2">
                            <a href="#!" class="fs-24 fw-700 link link__default link__default_b">Название
                                товара</a>
                        </h3>
                        <span class="fs-24 fw-700 c-red">от 240 000 руб</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="products-card">
                    <div class="box-height-overflow-h">
                        <div class="box-height box-height__255 ffd-column fjc-sb "
                             style="background: url(<?= get_template_directory_uri() ?>/img/products/section_1/1.png) no-repeat;">
                        </div>
                    </div>
                    <div class="products-card__column fjc-sb fai-c mt-30 mb-30">
                        <h3 class="title title__h2">
                            <a href="#!" class="fs-24 fw-700 link link__default link__default_b">Название
                                товара</a>
                        </h3>
                        <span class="fs-24 fw-700 c-red">от 240 000 руб</span>
                    </div>
                </div>

                <div class="products-card">
                    <div class="box-height-overflow-h mt-100">
                        <div class="box-height box-height__255 ffd-column fjc-sb "
                             style="background: url(<?= get_template_directory_uri() ?>/img/products/section_1/1.png) no-repeat;">
                        </div>
                    </div>
                    <div class="products-card__column fjc-sb fai-c mt-30 mb-30">
                        <h3 class="title title__h2">
                            <a href="#!" class="fs-24 fw-700 link link__default link__default_b">Название
                                товара</a>
                        </h3>
                        <span class="fs-24 fw-700 c-red">от 240 000 руб</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Download more product -->
        <div class="row">
            <div class="col-lg-12">
                <div class="products-line">
                    <div class="row">
                        <div class="col-lg-2 offset-lg-5">
                            <div class="fjc-c fai-c">
                                <div class="button button__red fjc-c fai-c fs-12 pt-10 pb-10 pl-40 pr-40">
                                    Загрузить еще
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Download more product end -->

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <h1 class="title title__h1 c-red mt-60 mb-30">Наши шкафы-купе</h1>
                <div>
                    <div class="desc desc__sm">
                        Создание идеи для обустройства комнаты может стоить больше, чем ее воплощение. Наша
                        компания предлагает для заказа каталог
                        реализованных дизайнерских проектов. Готовая мебель премиум-класса – квинтэссенция цены
                        и качества. Скрытое место хранения
                        в ванной комнате или шкаф перегородка из гостиной в спальню – все это можно найти на
                        страницах каталога компании Раумплюс.
                        Стеллажи для детской подойдут для складирования книг, игрушек, канцелярии. Подобранная
                        обстановка –
                        это возможность выгодно использовать пространство небольшой комнаты.
                    </div>
                    <div class="desc desc__sm mt-30">
                        Реализованные проекты и их преимущества
                        Этот раздел каталога располагает ранее разработанными и созданными идеями дизайнерской
                        мебели.
                        Предлагается ассортимент конструкций премиум-класса следующих типов: шкаф-купе,
                        межкомнатная перегородка,
                        гардеробная, стеллаж и другие системы хранения вещей. Преимущества выбора реализованных
                        идей:
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
