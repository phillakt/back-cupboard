<?php
/*
Template Name: Шаблон "О нас"
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

    <section class="about mt-90">
        <div class="container">
            <div class="row mt-40">
                <div class="col-lg-12">
                    <h1 class="title title__h1 c-red mt-60 mb-30">О нас</h1>
                </div>
                <div class="col-lg-6">
                    <div class="mb-10">

                        <?php
                        
                        $my_posts = new WP_Query;

                        $myposts = $my_posts->query(['post_type' => 'catalog_item']); ?>

                        <div class="about-links">
                            <!-- line-links 1 -->
                            <div class="mt-20 mb-20">
                                <ul class="ui-ul about-links__ul">
                                    <?php foreach ($myposts as $pst): ?>

                                        <li>
                                            <a href="<?= home_url(); ?>/<?= $pst->post_type ?>/<?= $pst->post_name; ?>"
                                               class="fs-14 fw-700 link link__default link__default_r">
                                                <?= $pst->post_title; ?>
                                            </a>
                                        </li>

                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <div class="desc desc__sm mt-30">
                            <?= get_field('opisanie_1') ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box-height-overflow-h">
                        <div class="box-height box-height__500 ffd-column fjc-sb "
                             style="background: url(<?= get_field('kartinka_1') ?>) no-repeat;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title title__h1 c-red mt-60 mb-30">Как мы работаем</h1>
                </div>
                <div class="col-lg-6">
                    <div class="desc desc__sm">
                        <?= get_field('opisanie_2') ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-height-overflow-h">
                        <div class="box-height box-height__350 ffd-column fjc-sb "
                             style="background: url(<?= get_field('kartinka_1') ?>) no-repeat;">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h1 class="title title__h1 c-red mt-60 mb-30">
                        Мебель в Белгороде. <br>
                        Тонкости выбора
                    </h1>
                    <div class="desc desc__sm">
                        <?= get_field('opisanie_3') ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="title title__h1 c-red mt-60 mb-70">
                        Немного истории
                    </h1>
                    <div class="desc desc__sm">
                        <?= get_field('opisanie_4') ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-2">
                    <div class="fjc-sb mt-60 mb-60">
                        <h3 class="title title__h2 c-red fs-30 fw-700">Мир Вам и Вашему Дому. А.М. "Дядя Шкаф"</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>