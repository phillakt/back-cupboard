<?php
/*
Template Name: Шаблон "Акции"
Template Post Type: post, page
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

<section class="stock mt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title title__h1 c-red mt-60 mb-30">Акции</h1>
            </div>
        </div>

        <?php

        $args = array('category_name' => 'stock');

        $query = new WP_Query($args);

        ?>

        <?php while ($query->have_posts()): ?>

            <?php $query->the_post(); ?>

            <div class="row mt-40">
                <div class="col-lg-6">
                    <div class="box-height-overflow-h">
                        <div class="box-height box-height__350 ffd-column fjc-sb "
                             style="background: url(<?= the_post_thumbnail_url(); ?>) no-repeat;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-10">
                        <h2 class="title title__h2 c-red"><?php the_title(); ?></h2>
                        <div class="desc desc__sm mt-30">
                            Фабрика «Дядя Шкаф» была основана в 2002-м году. Основная
                            наша специализация-изготовление мебели по индивидуальным
                            размерам в Белгороде. С 2008-го года мы называемся «Ателье
                            встроенной мебели «Дядя Шкаф» - так был создан бренд,
                            уже зарекомендовавший себя в роли надежной компании,
                            производящей качественную мебель в Белгороде
                            по индивидуальным размерам.
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-60">
                                    <a href="<?= get_field('stock_link')?>" class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">
                                        <?= get_field('description_link')?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="br-1-yellow mt-60"></div>
                </div>
            </div>

        <?php
        endwhile;
        wp_reset_postdata();
        ?>

    </div>
</section>

<?php get_footer(); ?>
