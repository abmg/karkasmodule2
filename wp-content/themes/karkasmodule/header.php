<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="ltr" lang="ru" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="ltr" lang="ru" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="ru">
<!--<![endif]-->
<head itemscope itemtype="http://schema.org/Store">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title itemprop="name">Каркас модуль</title>
    <!--base href="" /-->
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <?php wp_head(); ?>

    <title>Каркас модуль</title>

</head>
<body>
<?php $templateDirectory = get_template_directory_uri(); ?>
<header>
    <div id="main-bg" class="container-fluid">
        <div id="header-line" class="d-flex container justify-content-center">
            <div class="d-flex flex-column flex-sm-row col-sm-4 float-sm-start">
                <div class="logo-title">
                    <h1 class="text-center">
                        <span>Фабрика</span><br/>каркасного строительства
                    </h1>
                    <img class="logo" src="<?php echo $templateDirectory; ?>/front/img/logo.png"
                         alt="Логотип Каркас модуль"/>
                </div>
            </div>
            <div class="d-flex flex-column flex-sm-row col-sm-8 align-items-sm-center justify-content-between  float-end">
                <div class="phones d-none d-sm-flex">
                    <div><i class="fa-solid fa-phone"></i></div>
                    <div>
                        <span class="text">Телефон</span><br/>
                        +7 938 018 77 57<br/>
                        +7 988 646 10 63<br/>
                        +7 988 223 03 93
                    </div>
                </div>
                <div class="worktime d-none d-xxl-flex">
                    <div><i class="fa-regular fa-clock"></i></div>
                    <div>
                        <span class="text">Режим работы</span><br/>
                        с 9:00 до 18:00
                    </div>
                </div>
                <div class="email d-none d-sm-flex d-sm-flex">
                    <div><i class="fa-solid fa-at"></i></i></div>
                    <div>
                        <span class="text">Email</span><br/>
                        info@karkas-module.ru
                    </div>
                </div>
                <div class="location d-none d-lg-flex">
                    <div><i class="fa-solid fa-location-dot"></i></div>
                    <div>
                        <span class="text">Адрес</span><br/>
                        Минеральные воды<br/>
                        Махачкала
                    </div>
                </div>
            </div>
        </div>
        <div id="mainmenu-wrap" class="container d-none d-lg-flex">
            <div class="nav-wrap">
                <nav id="site-navigation" class="main-navigation" role="navigation" itemscope=""
                     itemtype="http://schema.org/SiteNavigationElement">
                    <button class="toggle-btn" data-toggle-target=".main-menu-modal"
                            data-toggle-body-class="showing-main-menu-modal" aria-expanded="false"
                            data-set-focus=".close-main-nav-toggle">
                        <span class="toggle-bar"></span>
                        <span class="toggle-bar"></span>
                        <span class="toggle-bar"></span>
                    </button>
                    <div class="menu-footer-menu-container">
                        <ul id="primary-menu" class="nav-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-395"><a
                                        href="/">Главная</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-389"><a
                                        href="https://xn----7sbar0abkgspn2a2j.xn--p1ai/%d0%ba%d0%b0%d1%82%d0%b0%d0%bb%d0%be%d0%b3/">Каталог</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-26 current_page_item menu-item-has-children menu-item-392">
                                <a href="https://xn----7sbar0abkgspn2a2j.xn--p1ai/%d0%bd%d0%b0%d1%88%d0%b0-%d1%82%d0%b5%d1%85%d0%bd%d0%be%d0%bb%d0%be%d0%b3%d0%b8%d1%8f/"
                                   aria-current="page">Наша технология</a><span class="submenu-toggle"><i
                                            class="fa-solid fa-chevron-down"></i>
                                    <!-- <i class="fas fa-chevron-down"></i> Font Awesome fontawesome.com --></span>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-398">
                                        <a href="https://xn----7sbar0abkgspn2a2j.xn--p1ai/%d0%bd%d0%b0%d1%88%d0%b0-%d1%82%d0%b5%d1%85%d0%bd%d0%be%d0%bb%d0%be%d0%b3%d0%b8%d1%8f/%d1%82%d0%b5%d1%85%d0%bd%d0%be%d0%bb%d0%be%d0%b3%d0%b8%d1%8f-prefab/">Технология
                                            Prefab</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-438">
                                        <a href="https://xn----7sbar0abkgspn2a2j.xn--p1ai/%d0%be%d0%b4%d0%b8%d0%bd%d0%b0%d1%80%d0%bd%d1%8b%d0%b9-%d0%ba%d0%b0%d1%80%d0%ba%d0%b0%d1%81-%d0%bb%d1%81%d1%82%d0%ba/">Одинарный
                                            каркас ЛСТК</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-399">
                                        <a href="https://xn----7sbar0abkgspn2a2j.xn--p1ai/%d0%bd%d0%b0%d1%88%d0%b0-%d1%82%d0%b5%d1%85%d0%bd%d0%be%d0%bb%d0%be%d0%b3%d0%b8%d1%8f/%d0%bb%d1%81%d1%82%d0%ba/">DOUBLE
                                            WALL SYSTEM ЛСТК</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-400">
                                        <a href="https://xn----7sbar0abkgspn2a2j.xn--p1ai/%d1%81%d1%82%d0%b0%d0%bd%d0%ba%d0%b8/">Станки</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-391"><a
                                        href="https://xn----7sbar0abkgspn2a2j.xn--p1ai/%d1%81%d0%be%d1%82%d1%80%d1%83%d0%b4%d0%bd%d0%b8%d1%87%d0%b5%d1%81%d1%82%d0%b2%d0%be/">Сотрудничество</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-446"><a
                                        href="https://xn----7sbar0abkgspn2a2j.xn--p1ai/%d0%bd%d0%b0%d1%88%d0%b8-%d0%bf%d0%b0%d1%80%d1%82%d0%bd%d0%b5%d1%80%d1%8b/">Наши
                                    партнеры</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-390"><a
                                        href="https://xn----7sbar0abkgspn2a2j.xn--p1ai/%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b/">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </nav><!-- #site-navigation -->

                <div class="nav-right">
                    <div class="header-social">
                        <ul class="social-list">
                            <li>
                                <a href="https://t.me/karkas_kavkaz" target="_blank" rel="nofollow noopener">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send/?phone=79886461063&amp;text&amp;type=phone_number&amp;app_absent=0"
                                   target="_blank" rel="nofollow noopener">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- .nav-right -->
            </div>
        </div>
        <!-- @todo Вынести из header -->
        <div id="anonce" class="d-flex container justify-content-center text-center
                                justify-content-lg-end text-lg-end">
            <div class="col-lg-10 col-xl-8">Проектирование и строительство
                надежных зданий ЛСТК по всей России.<br/>
                Строительство под ключ. С гарантией.<br/>
                <button>Оставить заявку</button>
            </div>
        </div>

        <div id="services-line" class="container col-lg-11 d-none d-sm-flex position-relative">
            <div class="text-center col-sm-4">
                Согласование <br/>и проектирование сооружения<br/>
                <div class="item confirm">
                    <img src="<?php echo $templateDirectory; ?>/front/img/handshake.png"
                         alt="Согласование и проектирование сооружения"/>
                </div>
            </div>
            <div class="text-center col-sm-4 make">
                Производство <br/>металлоконструкций<br/>
                <div class="item">
                    <img src="<?php echo $templateDirectory; ?>/front/img/production.png"
                         alt="Согласование и проектирование сооружения"/>
                </div>
            </div>
            <div class="text-center col-sm-4 build" >
                Возведение <br/>сооружения<br/>
                <div class="item">
                    <img src="<?php echo $templateDirectory; ?>/front/img/house.png"
                         alt="Согласование и проектирование сооружения"/>
                </div>
            </div>
            <div class="line"></div>
        </div>

    </div>
</header>
