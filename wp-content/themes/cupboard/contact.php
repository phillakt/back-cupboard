<?php
/*
Template Name: Шаблон "Контакты"
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
                                <img src="<?= get_template_directory_uri() ?>/img/menu/white/ico_search.svg"
                                     alt="ico_search">
                            </a>
                        </div>
                        <a href="#!" class="fjc-sb link link__default">
                            <div class="mr-20">
                                <img src="<?= get_template_directory_uri() ?>/img/menu/white/ico_phone.svg"
                                     alt="ico_search">
                            </div>
                            <a href="tel:84722373543" class="link link__default link__default_w pt-5 fs-14">
                                +7 (4722) 373-543
                            </a>
                        </a>

                        <!-- Search form start -->
                        <div class="box-search display-none">
                            <label class="search-ico" for="menu-search-sticky">
                                <img src="<?= get_template_directory_uri() ?>/img/menu/search.svg"
                                     alt="search"></label>
                            <input id="menu-search-sticky" class="menu-search pl-50 pr-10 pt-5 pb-5 "
                                   type="text" placeholder="Поиск">
                            <span class="search-close">×</span>
                        </div>
                        <!-- Search form end -->

                    </div>

                    <div class="sticky-logo fjc-c">
                        <a href="/">
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

                        <?php

                        wp_nav_menu([
                            'theme_location' => '',
                            'menu' => 'menu-sticky',
                            'container' => 'div',
                            'container_class' => '',
                            'container_id' => '',
                            'menu_class' => 'menu',
                            'menu_id' => '',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'items_wrap' => '<ul id="%1$s" class="fai-s %2$s">%3$s</ul>',
                            'depth' => 0,
                            'walker' => '',
                        ]);

                        ?>

                    </div>

                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ############# Menu-sticky end ############### -->

<section class="contact mt-90 mb-60">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 mb-40">
                <h1 class="title title__h1 c-red mt-60 mb-30">Контакты</h1>
            </div>
        </div>

        <div class="row mt-40">

            <div class="col-lg-4">
                <div class="box-height-overflow-h">
                    <div class="box-height box-height__350 ffd-column fjc-sb " style="background: url(http://cupboard/wp-content/uploads/2020/03/item-1.png) no-repeat;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 offset-1">
                <div class="mt-60">
                    <div class="desc desc__sm mb-30 c-black">
                        г. Белгород, ул. 50-ти летия
                        Белгородской области, 6
                    </div>
                    <div>
                        <div><a href="tel:+74722375543"
                                class="fs-26 fw-700 link link__default link__default_b">8 (4722) 375-543 мтс</a></div>
                    </div>
                    <div class="mt-30">
                        <div class="desc desc__sm">Почта онлайн заказов:</div>

                        <div class="mt-10"><a href="mailto:info@dshkaf.ru"
                                class="fs-20 fw-700 link link__default link__default_b">info@dshkaf.ru</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="br-1-yellow mt-30"></div>


        <div class="row mt-30">

            <div class="col-lg-4">
                <div class="box-height-overflow-h">
                    <div class="box-height box-height__350 ffd-column fjc-sb " style="background: url(http://cupboard/wp-content/uploads/2020/03/item-1.png) no-repeat;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 offset-1">
                <div class="mt-60">
                    <div class="desc desc__sm mb-30 c-black">
                        г. Белгород, Гражданский проспект, 18
                    </div>
                    <div>
                        <div><a href="tel:+74722375155"
                                class="fs-26 fw-700 link link__default link__default_b">8 (4722) 375-155 мтс</a></div>
                    </div>
                    <div class="mt-30">
                        <div class="desc desc__sm">Почта онлайн заказов:</div>

                        <div class="mt-10"><a href="mailto:info@dshkaf.ru"
                                              class="fs-20 fw-700 link link__default link__default_b">info@dshkaf.ru</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="br-1-yellow mt-30"></div>


        <div class="row mt-30">

            <div class="col-lg-4">
                <div class="box-height-overflow-h">
                    <div class="box-height box-height__350 ffd-column fjc-sb " style="background: url(http://cupboard/wp-content/uploads/2020/03/item-1.png) no-repeat;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 offset-1">
                <div class="mt-60">
                    <div class="desc desc__sm mb-30 c-black">
                        г. Белгород, ул. Есенина, 11 бизнес центр SEVEN
                    </div>
                    <div>
                        <div><a href="tel:+74722375505"
                                class="fs-26 fw-700 link link__default link__default_b">8 (4722) 375-505 мтс</a></div>
                    </div>
                    <div class="mt-30">
                        <div class="desc desc__sm">Почта онлайн заказов:</div>

                        <div class="mt-10"><a href="mailto:info@dshkaf.ru"
                                              class="fs-20 fw-700 link link__default link__default_b">info@dshkaf.ru</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="br-1-yellow mt-30"></div>


        <div class="row mt-30">

            <div class="col-lg-4">
                <div class="box-height-overflow-h">
                    <div class="box-height box-height__350 ffd-column fjc-sb " style="background: url(http://cupboard/wp-content/uploads/2020/03/item-1.png) no-repeat;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 offset-1">
                <div class="mt-60">
                    <h2 class="title title__h2 c-red mt-60 mb-30 fw-700">Производство</h2>

                    <div class="desc desc__sm mb-30 c-black">
                        Белгородсткая область, Белгородский район, п. Дубовое, ул. Заводская 10
                    </div>
                    <div>
                        <div><a href="tel:+74722575826"
                                class="fs-26 fw-700 link link__default link__default_b">8 (4722) 57-58-26 мтс</a></div>
                    </div>
                    <div class="mt-30">
                        <div class="desc desc__sm">Почта онлайн заказов:</div>

                        <div class="mt-10"><a href="mailto:info@dshkaf.ru"
                                              class="fs-20 fw-700 link link__default link__default_b">info@dshkaf.ru</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>