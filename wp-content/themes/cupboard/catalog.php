<?php
/*
Template Name: Шаблон "Каталог"
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

    <?php

    $countTemplate = 0;

    $position = [];

    // создаем экземпляр
    $my_posts = new WP_Query;

    // делаем запрос
    $myposts = $my_posts->query(['post_type' => 'catalog_item']);

    foreach ($myposts as $pst): ?>

        <?php

        $position[get_field('Pozicziya', $pst->ID)] = [
            'id-name' => $pst->post_name,
            'title' => get_field('catalog_item_title', $pst->ID),
            'link' => '/' . $pst->post_type . '/' . $pst->post_name,
            'img-1' => get_field('catalog_item_img-1', $pst->ID),
            'img-2' => get_field('catalog_item_img-2', $pst->ID),
            'img-3' => get_field('catalog_item_img-3', $pst->ID),
        ];
        
        ?>

    <?php endforeach;

    ksort($position); ?>

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
                                <li class="fjc-s fai-c">
                                    <a href="<?= home_url() ?>" class="fs-14 fw-700 link link__default link__default_b">Главная</a>
                                </li>
                                <li class="fjc-s fai-c">
                                    <span class="fjc-c fai-c pl-10 pr-10">—</span>Каталог
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3">
                            <div class="dropdown" id="catalog-dropdown">
                                <button class="dropdown-toggle ui-select__head pt-10 pb-10 pl-10 pr-10 fjc-s br-1-black"
                                        type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Выберите категорию
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                    <?php foreach ($position as $item): ?>

                                        <a class="dropdown-item" href="#!"
                                           data-select-item="<?= $item['id-name']; ?>"><?= $item['title']; ?></a>

                                    <?php endforeach; ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="row bg-line">

                        <?php foreach ($position as $item): ?>

                            <?php if ($countTemplate % 2 === 0): ?>

                                <!-- 1 Left -->
                                <div class="col-lg-10 offset-lg-1" id="<?= $item['id-name']; ?>">
                                    <div class="row align-items-end">
                                        <div class="col-lg-4">
                                            <div class="box-height-overflow-h">
                                                <div class="box-height box-height__350 ffd-column fjc-sb "
                                                     style="background: url(<?= $item['img-1']; ?> ) no-repeat;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="fjc-s mb-30">
                                                <h2 class="title title__h2 c-black fw-700">
                                                    <?= $item['title']; ?>
                                                </h2>
                                            </div>
                                            <div class="box-height-overflow-h">
                                                <div class="box-height box-height__200 ffd-column fjc-sb "
                                                     style="background: url(<?= $item['img-2']; ?>) no-repeat;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="row">
                                                <div class="col-lg-8 offset-lg-4">
                                                    <div class="mb-30">
                                                        <a href="<?= $item['link']; ?>"
                                                           class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">Подробнее</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-height-overflow-h">
                                                <div class="box-height box-height__200 ffd-column fjc-sb "
                                                     style="background: url(<?= $item['img-3']; ?>) no-repeat;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php else: ; ?>

                                <!-- 2 Right -->
                                <div class="col-lg-10 offset-lg-1" id="<?= $item['id-name']; ?>">
                                    <div class="row align-items-end">
                                        <div class="col-lg-4">
                                            <div class="fjc-s mb-30">
                                                <h2 class="title title__h2 c-black fw-700">
                                                    <?= $item['title']; ?>
                                                </h2>
                                            </div>
                                            <div class="box-height-overflow-h">
                                                <div class="box-height box-height__200 ffd-column fjc-sb "
                                                     style="background: url(<?= $item['img-3']; ?>) no-repeat;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="row">
                                                <div class="col-lg-8 offset-lg-4">
                                                    <div class="mb-30">
                                                        <a href="<?= $item['link']; ?>"
                                                           class="button button__red fjc-c fai-c pt-10 pb-10 pl-40 pr-40">Подробнее</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-height-overflow-h">
                                                <div class="box-height box-height__200 ffd-column fjc-sb "
                                                     style="background: url(<?= $item['img-2']; ?>) no-repeat;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="box-height-overflow-h">
                                                <div class="box-height box-height__350 ffd-column fjc-sb "
                                                     style="background: url(<?= $item['img-2']; ?>) no-repeat;">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            <?php endif; ?>

                            <?php $countTemplate++; ?>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>