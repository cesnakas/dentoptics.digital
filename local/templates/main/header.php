<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>

<?
    $APPLICATION->ShowHead();
    // Bitrix
    use Bitrix\Main\Page\Asset;
    // Meta
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=width, shrink-to-fit=no, viewport-fit=cover, user-scalable=0">');
    // Bootstrap
    use Bitrix\Main\UI\Extension;
    Extension::load('ui.bootstrap');
    // CSS
    // Asset::getInstance()->addCss('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
Asset::getInstance()->addCss('https://cdn.jsdelivr.net/npm/swiper@6.1.1/swiper-bundle.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/main.min.css');
    // JS
    // Asset::getInstance()->addJs('https://code.jquery.com/jquery-3.5.1.min.js');
    Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    // Asset::getInstance()->addJs('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js');
    Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/swiper@6.1.1/swiper-bundle.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
?>

    <title><?$APPLICATION->ShowTitle();?></title>

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<body>

    <!-- navigation -->
    <nav id="global_nav" class="navbar navbar-expand-md __fixed-top navbar-light">
        <div class="container-xl">
            <!-- brand -->
            <a class="navbar-brand d-none" href="/">
                <img src="<?=SITE_TEMPLATE_PATH;?>/img/logo-2.png" alt="">
            </a>
            <!-- /brand -->
            <!-- button navigaion -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#globalNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- /button navigaion -->
            <!-- navigation menu -->
            <div class="collapse navbar-collapse" id="globalNav">
                <!-- left menu -->
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link" href="#">Доставка и оплата</a>
                    <a class="nav-item nav-link" href="#">Медиа</a>
                    <a class="nav-item nav-link" href="#">Производители</a>
                </div>
                <!-- /left menu -->
                <!-- center menu -->
                <div class="navbar-nav mx-auto">
                    <a class="nav-item nav-link" href="#">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/location.svg" alt="">
                        <span>Самара</span>
                    </a>
                    <a class="nav-item nav-link" href="#">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/mail.svg" alt="">
                        <span>example@dentoptics.digital</span>
                    </a>
                    <a class="nav-item nav-link" href="#">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/phone.svg" alt="">
                        <span>Заказать обратный звонок</span>
                    </a>
                </div>
                <!-- /center menu -->
                <!-- right menu -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:sale.basket.basket.line",
                    "nav-personal",
                    Array(
                        "HIDE_ON_BASKET_PAGES" => "N",
                        "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                        "PATH_TO_PROFILE" => SITE_DIR."personal/",
                        "PATH_TO_REGISTER" => SITE_DIR."auth/",
                        "SHOW_AUTHOR" => "Y",
                        "SHOW_DELAY" => "Y",
                        "SHOW_EMPTY_VALUES" => "N",
                        "SHOW_IMAGE" => "N",
                        "SHOW_NOTAVAIL" => "Y",
                        "SHOW_PERSONAL_LINK" => "N",
                        "SHOW_PRICE" => "N",
                        "SHOW_REGISTRATION" => "Y",
                        "SHOW_TOTAL_PRICE" => "N",
                    ),
                    false
                );?>
                <!-- /right menu -->
            </div>
            <!-- /navigation menu -->
        </div>
    </nav>
    <!-- /navigation -->

    <header class="header">
        <div class="container-xl">
            <div class="row">
                <div class="col-3 brand">
                    <a href="/">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/logo-2.png" alt="">
                    </a>
                </div>
                <div class="col-3 header_search">
                    <!-- search -->
                    <input type="search" name="" id="" placeholder="Поиск по сайту">
                    <input type="submit" value="" hidden>
                    <!-- /search -->
                </div>
                <div class="col-4 header_info">
                    <div>
                        <div>
                            <a href="tel:">8 (495) 796 24 10</a>
                            - с 10:00 до 20:00 часов по будням
                        </div>
                        <div>
                            <a href="tel:">8 (800) 100 23 83</a>
                            - горячая линия c 8:00 до 17:00
                        </div>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-end">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:sale.basket.basket.line",
                        "header-basket",
                        array(
                            "HIDE_ON_BASKET_PAGES" => "N",
                            "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                            "PATH_TO_PROFILE" => SITE_DIR."personal/",
                            "PATH_TO_REGISTER" => SITE_DIR."login/",
                            "SHOW_AUTHOR" => "Y",
                            "SHOW_DELAY" => "Y",
                            "SHOW_EMPTY_VALUES" => "Y",
                            "SHOW_IMAGE" => "N",
                            "SHOW_NOTAVAIL" => "Y",
                            "SHOW_PERSONAL_LINK" => "N",
                            "SHOW_PRICE" => "N",
                            "SHOW_REGISTRATION" => "N",
                            "SHOW_TOTAL_PRICE" => "N",
                            "COMPONENT_TEMPLATE" => "header-basket",
                            "PATH_TO_BASKET" => SITE_DIR."basket/",
                            "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                            "SHOW_NUM_PRODUCTS" => "Y",
                            "PATH_TO_AUTHORIZE" => "",
                            "SHOW_PRODUCTS" => "N",
                            "POSITION_FIXED" => "N"
                        ),
                        false
                    );?>

                </div>
            </div>
        </div>
        <div class="container-xl">
            <div id="catalog_nav" class="navbar navbar-expand-md">
                <!-- button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- /button -->
                <!-- navigation menu -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">

                        <div class="nav-item dropdown">
                            <a class="nav-item nav-link" id="dropdownMenu" href="/catalog/" data-toggle="dropdown">Каталог</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu">

                                <a class="dropdown-item" href="/catalog/">Каталог</a>

                                <a class="dropdown-item" href="#">CAT/СAM системы</a>
                                <div class="dropright">
                                    <a class="dropdown-item" href="#">Расходные материалы</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                        <a class="dropdown-item" href="#">Диски</a>
                                        <a class="dropdown-item" href="#">Блоки</a>
                                        <a class="dropdown-item" href="#">Фрезы</a>
                                        <a class="dropdown-item" href="#">3D печать</a>
                                        <a class="dropdown-item" href="#">Аксессуары</a>
                                        <a class="dropdown-item" href="#">Красители</a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="#">Программное обеспечение</a>

                            </div>
                        </div>

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "global_nav",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "global",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => "",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_THEME" => "site",
                                "ROOT_MENU_TYPE" => "global",
                                "USE_EXT" => "N",
                                "COMPONENT_TEMPLATE" => ".default"
                            ),
                            false
                        );?>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main" role="main">
