<?php
/*
Template Name: Шаблон "Карточка товара"
Template Post Type: post
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

<section class="cart mt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs fjc-s fai-c mt-20 mb-60">
                    <li class="fjc-s fai-c"><a href="#!"
                                               class="fs-14 fw-700 link link__default link__default_b">Главная</a></li>
                    <li class="fjc-s fai-c"><span class="fjc-c fai-c pl-10 pr-10">—</span> <a href="#!"
                                                                                              class="fs-14 fw-700 link link__default link__default_b">Каталог</a></li>
                    <li class="fjc-s fai-c"><span class="fjc-c fai-c pl-10 pr-10">—</span> <a href="#!"
                                                                                              class="fs-14 fw-700 link link__default link__default_b">Шкафы-купе</a></li>
                    <li class="fjc-s fai-c"><span class="fjc-c fai-c pl-10 pr-10">—</span> <a href="#!"
                                                                                              class="fs-14 fw-700 link link__default link__default_b">Название товара</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <!-- description item -->
            <div class="col-lg-6">
                <h1 class="title title__h1">Название товара</h1>
                <div class="mt-30">
                    <div class="c-red fs-24 fw-700">
                        от <span>230 000 руб</span>
                    </div>
                </div>
                <div class="desc mt-30">
                    <div class="mt-30">
                        <div class="fs-24 c-black fw-700 mb-10">Размеры:</div>
                        <div class="fs-14 c-black">2 200 (длина) х 2 850 (высота) мм</div>
                        <div class="br-1-yellow mt-30"></div>
                    </div>

                    <div class="mt-30">
                        <div class="fs-24 c-black fw-700 mb-10">Детализация:</div>

                        <div class="row mb-10">
                            <div class="col-lg-8">
                                <div class="fs-16 c-black fw-700">Форма вертикального профиля:</div>
                                <div class="fs-14 c-black">Профиль raumplus серии S1200 AIR </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fs-16 c-black fw-700">Цвет:</div>
                                <div class="fs-14 c-black">Черный</div>
                            </div>
                        </div>

                        <div class="row mb-10">
                            <div class="col-lg-8">
                                <div class="fs-16 c-black fw-700">Материал наполнения двери:</div>
                                <div class="fs-14 c-black">Стекло с переменной прозрачностью SmartGlass</div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fs-16 c-black fw-700">Цвет:</div>
                                <div class="fs-14 c-black">Черный</div>
                            </div>
                        </div>

                        <div class="row mb-10">
                            <div class="col-lg-8">
                                <div class="fs-16 c-black fw-700">Аксессуары:</div>
                                <div class="fs-14 c-black">Накладная ручка</div>
                            </div>

                            <div class="col-lg-4">
                                <div class="fs-16 c-black fw-700">Колличество:</div>
                                <div class="fs-14 c-black">1 шт</div>
                            </div>
                        </div>

                        <div class="br-1-yellow mt-30"></div>
                    </div>

                    <div class="mt-30">
                        <div class="fs-24 c-black fw-700 mb-10">Описание:</div>
                        <div class="fs-14 c-black fw-700 mb-10">Дизайнер:</div>
                        <div class="desc desc__sm">
                            <div class="fs-14 c-black mb-20">Фамилия Имя</div>

                            Межкомнатная перегородка raumplus в интерьере берет на себя не только
                            функцию разделения зоны спальни и санузла, но и объединения разных
                            дизайнерских приемов в один ансамбль. <br> <br>

                            Прозрачность перегородки можно менять одним нажатием на клавишу
                            управления, сохранив или убрав приватность душевой.
                        </div>
                        <div class="br-1-yellow mt-30"></div>
                    </div>
                </div>
            </div>

            <!-- slider item -->
            <div class="col-lg-6">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                        <div class="swiper-slide" style="background-image:url(<?= get_template_directory_uri() ?>/img/products/section_1/2.png)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

