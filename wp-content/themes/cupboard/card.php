<?php
/*
Template Name: Шаблон "Карточка товара"
Template Post Type: product_item
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


<section class="cart mt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs fjc-s fai-c mt-20 mb-60">

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

                        <a href="<?= home_url() ?>/catalog_item/<?= get_the_category(get_the_ID())[0]->slug ?>"
                            class="fs-14 fw-700 link link__default link__default_b"><?= get_the_category(get_the_ID())[0]->name; ?></a>
                    </li>

                    <li class="fjc-s fai-c">
                        <span class="fjc-c fai-c pl-10 pr-10">—</span>
                        <?php Catalog::getTitle(['post_type' => 'product_item', 'name' => $category_name = get_query_var('name')], 'product_item_title'); ?>
                    </li>

                </ul>
            </div>
        </div>


        <div class="row">
            <!-- description item -->
            <div class="col-lg-6">
                <div>
                    <h1 class="title title__h1">
                        <?php Catalog::getTitle(['post_type' => 'product_item', 'name' => get_query_var('name')], 'product_item_title') ?>
                    </h1>
                    <div class="mt-30">
                        <div class="c-red fs-24 fw-700">
                            от
                            <span><?php
                                // Catalog::getTitle Вывел цену товара
                                Catalog::getTitle(['post_type' => 'product_item', 'name' => get_query_var('name')], 'product_czena_tovara') ?></span>
                            руб
                        </div>
                    </div>

                    <?php

                    $my_posts = new WP_Query;
                    $name = get_query_var('name');

                    $myposts = $my_posts->query([
                        'post_type' => 'product_item',
                        'name' => $name
                    ]); ?>

                    <div class="desc mt-30">
                        <?php foreach ($myposts as $pst): ?>

                            <?= $pst->post_content; ?>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- slider item -->
            <div class="col-lg-6">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">

                        <?php
                        $count_img = 1;

                        while ($count_img <= 10): ?>

                            <?php if (get_field('product_item_img-' . $count_img)): ?>

                                <a href="<?= get_field('product_item_img-' . $count_img); ?>" data-lightbox="product_item" class="swiper-slide"
                                     style="background-image:url(<?= get_field('product_item_img-' . $count_img); ?>)"></a>

                            <?php endif; ?>

                            <?php $count_img++; ?>

                        <?php endwhile; ?>

                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>

                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">

                        <?php
                        $count_img = 1;

                        while ($count_img <= 10): ?>

                            <?php if (get_field('product_item_img-' . $count_img)): ?>

                                <div class="swiper-slide"
                                     style="background-image:url(<?= get_field('product_item_img-' . $count_img); ?>)"></div>

                            <?php endif; ?>

                            <?php $count_img++; ?>

                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

