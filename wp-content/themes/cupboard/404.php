
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

    <div class="container mt-90">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-60">
                    <div class="fjc-c">
                        <h1 class="title title__h1 c-red mb-30">Страница 404!</h1>
                    </div>
                    <div class="fjc-c">
                        <h4 class="desc desc__md mb-30 c-black fs-24 fw-700">Страница не найдена...</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
