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
                                <div class="link link__default link__default_w pt-5 fs-14">
                                    +7 (000) 000 0000
                                </div>
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
                        <div class="desc desc__sm">
                            Фабрика встроенной мебели "Дядя Шкаф" специализируется на производстве мебели
                            в Белгороде по индивидуальным проектам, в частности, мы разрабатываем:
                        </div>

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
                            А так же другая встроенная мебель в Белгороде, которая выполняется
                            с учетом пожеланий и требований заказчика. <br> <br>

                            Основным преимуществом нашей компании является принцип персонального подхода
                            к каждому клиенту – мы производим мебель в Белгороде по индивидуальным проектам.
                            А значит, обращаясь к нам, Вы можете рассчитывать на претворение в жизнь самых смелых
                            дизайнерских идей с учетом возможностей наших дизайнеров и нашего производства.
                            Реализация Ваших пожеланий – это далеко не единственный плюс, который таит в себе
                            наша мебель, разработанная по индивидуальному проекту. Только представьте проект
                            мебели, созданный с учетом размеров и особенностей Вашего дома, включающий все
                            Ваши пожелания, отражающий Ваши пристрастия и гармонично вписывающийся
                            в существующий интерьер. Такая мебель не может разонравиться, ведь ее автором
                            были Вы. Прибавьте к этому высокое качество нашей продукции, гарантирующее
                            ее надежность, и можете быть уверены, что мебель, заказанная в г. Белгород
                            у ателье «Дядя Шкаф», станет радовать Вас и Вашу семью долгие годы.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box-height-overflow-h">
                        <div class="box-height box-height__500 ffd-column fjc-sb "
                             style="background: url(<?= get_template_directory_uri() ?>/img/main-slider/items/item-1.png) no-repeat;">
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
                        На данный момент фабрика мебели "Дядя Шкаф" обладает современным производством,
                        с высокотехнологичным парком оборудования. Фабрика производит мебель в основном
                        на станках немецкого и итальянского производства, таких как Weeke, Brandt (Homag group),
                        Altendorf, Vitap, и другое оборудование. Мы предоставляем исключительное качество,
                        персональный подход и высокий уровень сервиса. Посетите наше ателье мебели
                        в Белгороде, и убедитесь в этом сами: дизайнеры-консультанты внимательно выслушают
                        Ваши пожелания или помогут определиться с предпочтениями . Если Вы пока неясно
                        представляете себе интерьер своего дома ,то наши дизайнеры создадут Вам персональный
                        дизайн-проект, отражающий все Ваши требования и капризы и при этом гармонично
                        вписывающийся в основную идею интерьера. Технологи нашей компании, ориентируясь
                        на созданный проект, учитывая размеры и особенности помещения, разработают
                        оптимальную конструкцию. Специалисты по сборке мебели приедут в удобное
                        для Вас время и тщательно произведут все необходимые монтажные работы.
                        И это лишь несколько видимых звеньев длинной цепочки действий, из которых
                        складывается наше понимание по-настоящему хорошего сервиса.
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-height-overflow-h">
                        <div class="box-height box-height__350 ffd-column fjc-sb "
                             style="background: url(<?= get_template_directory_uri() ?>/img/main-slider/items/item-1.png) no-repeat;">
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
                        Найти стильную и элегантную мебель в Белгороде на первый взгляд
                        не сложно, но ведь далеко не всегда красота и стиль граничат с качеством.
                        Салонов мебели в Белгороде достаточно много, но чтобы найти хорошую
                        мебель, надо уметь выбирать и сравнивать тот или иной товар,
                        и не ограничиваться только лишь ценником, ведь, за частую, не всегда цена
                        определяет качество и наоборот. Сейчас в каждом достаточно солидном
                        салоне мебели Белгорода работают дизайнеры-консультанты, поэтому
                        вам не нужно быть специалистом в материалах, а достаточна задать
                        интересующие вас вопросы и получить на них грамотные ответы, сравнить
                        их по интересующим вас критериям и принять то решение, которое
                        Вы считаете для себя приоритетным. Если речь идет о корпусной мебели,
                        то стоит обратить особое внимание на материал, из которого она изготовлена,
                        а так же на фурнитуру – ведь некачественная фурнитура, достаточно быстро
                        придет в негодность. Мы считаем, что на мебели не стоит экономить.
                        Если Вы не готовы тратиться на дорогие материалы, то обратите внимание
                        на механизмы и важные детали мебели, которые подвергаются ежедневной
                        и многократной нагрузке дабы не разочароваться в приобретенной мебели
                        очень быстро. Подойдя к вопросу выбора ответственно, Вы сможете
                        приобрести мебель, которая прослужит Вашей семье верой и правдой
                        долгие годы. Мы надеемся, что вы воспользуетесь нашими простыми
                        советами и будете себя чувствовать увереннее при выборе Вашей мебели!
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="title title__h1 c-red mt-60 mb-70">
                        Немного истории
                    </h1>
                    <div class="desc desc__sm">
                        Фабрика «Дядя Шкаф» была основана в 2002-м году. Основная
                        наша специализация-изготовление мебели по индивидуальным
                        размерам в Белгороде. С 2008-го года мы называемся «Ателье
                        встроенной мебели «Дядя Шкаф» - так был создан бренд,
                        уже зарекомендовавший себя в роли надежной компании,
                        производящей качественную мебель в Белгороде
                        по индивидуальным размерам. <br> <br>

                        На сегодняшний день Ателье встроенной мебели «Дядя Шкаф»
                        является официальным представителем немецкой компании
                        RAUMPLUS и шведского концерна мебели ELFA в Белгороде
                        и Белгородской области.
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