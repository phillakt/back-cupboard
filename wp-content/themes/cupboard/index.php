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
                            <a href="tel:84722373543" class="link link__default link__default_w pt-5 fs-14">
                                +7 (4722) 373-543
                            </a>
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

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="fjc-c pt-20 pb-20">
                    <a href="/">
                        <img src="<?= get_template_directory_uri() ?>/img/logo/logo.svg" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="main-slider">
    <div id="main-slider" class="owl-carousel owl-theme">

        <?php
        $my_posts = new WP_Query;
        $myposts = $my_posts->query(['post_type' => 'slider']); ?>

        <?php foreach ($myposts as $pst): ?>

            <div class="item">
                <div class="item__h500"
                     style="background: url(<?= get_field('images', $pst->ID); ?>) no-repeat;">
                </div>
            </div>

        <?php endforeach; ?>

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
                            <a href="tel:84722373543" class="link link__default link__default_w pt-5 fs-14">
                                +7 (4722) 373-543
                            </a>
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


<!--                    <div class="menu-drop-hamburger">-->
<!--                        <span class="c-white">-->
<!--                            Меню-->
<!--                        </span>-->
<!--                        <span class="pl-10 c-white">-->
<!--                            <i class="fas fa-bars"></i>-->
<!--                        </span>-->
<!--                    </div>-->

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

<!--                    <div class="menu-drop pl-30 pr-30 pt-20 pb-20">-->
<!---->
<!---->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="catalog mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mt-60">
                            <div class="fjc-c fai-c pt-20 pb-20 pl-20" style="background: #D74339;">
<!--                                 style="background: linear-gradient(90deg, #D74339 1.11%, #E27E36 98.52%);">-->

                                <h2 class="title title__h2 c-white">
                                    <a href="#!" class="link link__default link__default_w">Новинки</a>
                                </h2>
<!--                                <div class="mr-20">-->
<!--                                    <img src="--><?//= get_template_directory_uri() ?><!--/img/new_ico.png" alt="New_ico">-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-60">
                            <div class="fjc-c fai-c pt-20 pb-20 pl-20" style="background: #373334">
                                <h2 class="title title__h2 c-white">
                                    <a href="#!" class="link link__default link__default_w">Реализованные
                                        проекты</a>
                                </h2>
<!--                                <div class="mr-20">-->
<!--                                    <img src="--><?//= get_template_directory_uri() ?><!--/img/shelves_ico.png" alt="Fire_ico">-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="title title__h1 c-red mt-60 mb-60">Каталог товаров</h1>
                    </div>

                    <div class="col-lg-3 offset-lg-3">
                        <a href="/katalog/" class="button button__red fjc-c fai-c pt-10 pb-10 mt-60 mb-60">
                            В каталог
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 offset-lg-1">

                <div class="box-height-overflow-h mb-30">
                    <div class="box-height box-height__500 ffd-column fjc-sb"
                         style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'shkafy-kupe'], 'catalog_item_img-1'); ?>) no-repeat;">
                        <div class="catalog__header pt-30 pl-30">
                            <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'shkafy-kupe']) ?>"
                               class="link link-catalog">
                                <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'shkafy-kupe'], 'catalog_item_title'); ?>
                            </a>
                        </div>
                        <div class="catalog__footer pt-30 pl-30 pb-30">
                            <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'shkafy-kupe']) ?>"
                               class="arrow">
                                <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                     alt="arrow">
                            </a>
                        </div>
                        <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'shkafy-kupe']) ?>" class="link-hidden"></a>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-20">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'prihozhie'], 'catalog_item_img-1'); ?>) no-repeat;">
                                <div class="catalog__header pt-30 pl-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'prihozhie']) ?>"
                                       class="link link-catalog">
                                        <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'prihozhie'], 'catalog_item_title'); ?>
                                    </a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'prihozhie']) ?>"
                                       class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                                <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'prihozhie']) ?>" class="link-hidden"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-20">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'komody'], 'catalog_item_img-1'); ?>) no-repeat;">
                                <div class="catalog__header pt-30 pl-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'komody']); ?>"
                                       class="link link-catalog">
                                        <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'komody'], 'catalog_item_title'); ?>
                                    </a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'komody']); ?>"
                                       class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                                <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'komody']); ?>" class="link-hidden"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'kuhni'], 'catalog_item_img-1'); ?>) no-repeat;">
                                <div class="catalog__header pt-30 pl-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'kuhni']); ?>"
                                       class="link link-catalog">
                                        <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'kuhni'], 'catalog_item_title'); ?>
                                    </a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'kuhni']); ?>"
                                       class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                                <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'kuhni']); ?>" class="link-hidden"></a>
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
                        <div class="box-height-overflow-h mb-20">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'mezhkomnatnye-peregorodki'], 'catalog_item_img-1'); ?>) no-repeat;">
                                <div class="catalog__header pt-30 pl-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'mezhkomnatnye-peregorodki']); ?>"
                                       class="link link-catalog">
                                        <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'mezhkomnatnye-peregorodki'], 'catalog_item_title'); ?>
                                    </a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'mezhkomnatnye-peregorodki']); ?>"
                                       class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                                <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'mezhkomnatnye-peregorodki']); ?>" class="link-hidden"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'shkafy-raspashnye'], 'catalog_item_img-1'); ?>) no-repeat;">

                                <div class="catalog__header pt-30 pl-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'shkafy-raspashnye']); ?>"
                                       class="link link-catalog">
                                        <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'shkafy-raspashnye'], 'catalog_item_title'); ?>
                                    </a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'shkafy-raspashnye']); ?>"
                                       class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                                <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'shkafy-raspashnye']); ?>" class="link-hidden"></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'domashnee-rabochee-mesto'], 'catalog_item_img-1'); ?>) no-repeat;">
                                <div class="catalog__header pt-30 pl-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'domashnee-rabochee-mesto']); ?>"
                                       class="link link-catalog">
                                        <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'domashnee-rabochee-mesto'], 'catalog_item_title'); ?>
                                    </a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'domashnee-rabochee-mesto']); ?>"
                                       class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                                <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'domashnee-rabochee-mesto']); ?>" class="link-hidden"></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-4">
                <div class="box-height-overflow-h mb-30">
                    <div class="box-height box-height__500 ffd-column fjc-sb"
                         style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'garderobnye-komnaty'], 'catalog_item_img-1'); ?>) no-repeat;">

                        <div class="catalog__header pt-30 pl-30">
                            <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'garderobnye-komnaty']); ?>"
                               class="link link-catalog">
                                <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'garderobnye-komnaty'], 'catalog_item_title'); ?>
                            </a>
                        </div>
                        <div class="catalog__footer pt-30 pl-30 pb-30">
                            <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'garderobnye-komnaty']); ?>"
                               class="arrow">
                                <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                     alt="arrow">
                            </a>
                        </div>
                        <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'garderobnye-komnaty']); ?>" class="link-hidden"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div class="box-height-overflow-h mb-30">
                    <div class="box-height box-height__500 ffd-column fjc-sb"
                         style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'detskie'], 'catalog_item_img-1'); ?>) no-repeat;">
                        <div class="catalog__header pt-30 pl-30">
                            <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'detskie']); ?>"
                               class="link link-catalog">
                                <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'detskie'], 'catalog_item_title'); ?>
                            </a>
                        </div>
                        <div class="catalog__footer pt-30 pl-30 pb-30">
                            <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'detskie']); ?>"
                               class="arrow">
                                <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                     alt="arrow">
                            </a>
                        </div>
                        <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'detskie']); ?>" class="link-hidden"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-20">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'gostinye'], 'catalog_item_img-1'); ?>) no-repeat;">
                                <div class="catalog__header pt-30 pl-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'gostinye']); ?>"
                                       class="link link-catalog">
                                        <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'gostinye'], 'catalog_item_title'); ?>
                                    </a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'gostinye']); ?>"
                                       class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                                <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'gostinye']); ?>" class="link-hidden"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box-height-overflow-h mb-20">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'biblioteki'], 'catalog_item_img-1'); ?>) no-repeat;">
                                <div class="catalog__header pt-30 pl-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'biblioteki']); ?>"
                                       class="link link-catalog">
                                        <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'biblioteki'], 'catalog_item_title'); ?>
                                    </a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'biblioteki']); ?>"
                                       class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                                <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'biblioteki']); ?>" class="link-hidden"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-height-overflow-h mb-30">
                            <div class="box-height box-height__255 ffd-column fjc-sb"
                                 style="background: url(<?php Catalog::getImg(['post_type' => 'catalog_item', 'name' => 'realizovannye-proekty'], 'catalog_item_img-1'); ?>) no-repeat;">
                                <div class="catalog__header pt-30 pl-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'realizovannye-proekty']); ?>"
                                       class="link link-catalog">
                                        <?php Catalog::getTitle(['post_type' => 'catalog_item', 'name' => 'realizovannye-proekty'], 'catalog_item_title'); ?>
                                    </a>
                                </div>
                                <div class="catalog__footer pt-30 pl-30 pb-30">
                                    <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'realizovannye-proekty']); ?>"
                                       class="arrow">
                                        <img src="<?= get_template_directory_uri() ?>/img/catalog/ico-btn/arrow-r.svg"
                                             alt="arrow">
                                    </a>
                                </div>
                                <a href="<?php Catalog::getLink(['post_type' => 'catalog_item', 'name' => 'realizovannye-proekty']); ?>" class="link-hidden"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
