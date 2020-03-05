<?php
/*
Template Name: Шаблон "Продукты"
Template Post Type: catalog_item
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
                                <a href="<?= home_url() ?>" class="fs-14 fw-700 link link__default link__default_b">Главная</a>
                            </li>
                            <li class="fjc-s fai-c">
                                <span class="fjc-c fai-c pl-10 pr-10">—</span>
                                <a href="<?= home_url() ?>/katalog"
                                   class="fs-14 fw-700 link link__default link__default_b">Каталог</a>
                            </li>
                            <li class="fjc-s fai-c">
                                <span class="fjc-c fai-c pl-10 pr-10">—</span>
                                <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => get_query_var('name')], 'catalog_item_title'); ?>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-60">

            <?php

            $my_posts = new WP_Query;

            $name = get_query_var('name');

            $myposts = $my_posts->query(
                [
                    'post_type' => 'product_item',
                    'category_name' => $name
                ]
            );

            foreach ($myposts as $pst): ?>

                <div class="col-lg-6 mb-30">

                    <div class="products-card">
                        <div class="box-height-overflow-h">
                            <div class="box-height box-height__255 ffd-column fjc-sb "
                                 style="background: url(<?= get_field('product_item_img-1', $pst->ID); ?>) no-repeat;">
                            </div>
                        </div>
                        <div class="products-card__column fjc-sb fai-c mt-30 mb-30">
                            <h3 class="title title__h2">
                                <a href="/<?= $pst->post_type . '/' . $pst->post_name; ?>"
                                   class="fs-24 fw-700 link link__default link__default_b">
                                    <?= get_field('product_item_title', $pst->ID); ?>
                                </a>
                            </h3>
                        <span class="fs-24 fw-700 c-red">
                            <?= get_field('product_czena_tovara', $pst->ID); ?>
                            руб
                        </span>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

        <!--         Download more product-->
        <div class="br-1-yellow mt-30"></div>
        <!--                <div class="row" style="transform: translateY(-20px);">-->
        <!--                    <div class="col-lg-12">-->
        <!--                        <div class="products-line">-->
        <!--                            <div class="row">-->
        <!--                                <div class="col-lg-2 offset-lg-5">-->
        <!--                                    <div class="fjc-c fai-c">-->
        <!--                                        <div class="button button__red fjc-c fai-c fs-12 pt-10 pb-10 pl-40 pr-40">-->
        <!--                                            Загрузить еще-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--         Download more product end-->

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
