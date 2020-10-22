<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>

<?
    $APPLICATION->ShowHead();
    // Bitrix
    use Bitrix\Main\Page\Asset;
    // Meta
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=0">');
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
    <nav id="global_nav" class="navbar navbar-expand-lg py-lg-0 __fixed-top navbar-light">
        <div class="container-xl">
            <!-- brand -->
            <a class="navbar-brand d-lg-none" href="/">
                <img src="<?=SITE_TEMPLATE_PATH;?>/img/logo-2.png" alt="" width="108px">
            </a>
            <!-- /brand -->

            <!-- button catalog mobile -->
            <button id="catalogBtnMobile" class="navbar-toggler ml-auto d-lg-none" type="button" data-toggle="collapse" data-target="#catalogMobile" aria-controls="catalogMobile" aria-expanded="false" aria-label="Toggle navigation">
                <!--<span class="navbar-toggler-icon"></span>-->
                <span>Каталог</span>
            </button>
            <!-- /button catalog mobile -->

            <!-- button navigaion -->
            <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#globalNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- /button navigaion -->

            <!-- catalog mobile -->
            <div class="collapse navbar-collapse d-lg-none" id="catalogMobile">

                <div class="accordion mt-4" id="accordionExample">

                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">CAT/СAM системы</button>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action" href="/catalog/ioscans/">Интраоральные сканеры</a>
                                    <a class="list-group-item list-group-item-action" href="/catalog/cad-cam-kits/">Комплекты CAD/CAM</a>
                                    <a class="list-group-item list-group-item-action" href="/catalog/labscans/">Лабораторные сканеры</a>
                                    <a class="list-group-item list-group-item-action" href="/catalog/milling/">Фрезеры</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Расходные материалы</button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action" href="/catalog/disks/">Диски</a>
                                    <a class="list-group-item list-group-item-action" href="/catalog/blocks/">Блоки</a>
                                    <a class="list-group-item list-group-item-action" href="/catalog/cutters/">Фрезы</a>
                                    <a class="list-group-item list-group-item-action" href="/catalog/3d-printing/">3D печать</a>
                                    <a class="list-group-item list-group-item-action" href="/catalog/accessories/">Аксессуары</a>
                                    <a class="list-group-item list-group-item-action" href="/catalog/dye/">Красители</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Программное обеспечение</button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action" href="/catalog/software/">Программное обеспечение</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /catalog mobile -->

            <!-- navigation menu -->
            <div class="collapse navbar-collapse" id="globalNav">
                <!-- // -->
                <div class="navbar-nav d-flex d-lg-none mt-3">
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
                <!-- // -->
                <!-- left menu -->
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link" href="#">Доставка и оплата</a>
                    <a class="nav-item nav-link" href="#">Медиа</a>
                    <a class="nav-item nav-link" href="#">Производители</a>
                </div>
                <!-- /left menu -->
                <!-- center menu -->
                <div class="navbar-nav d-none d-lg-flex mx-lg-auto">
                    <a class="nav-item nav-link" href="#">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/location.svg" alt="">
                        <span>Москва</span>
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
                        "PATH_TO_REGISTER" => SITE_DIR."auth/registration",
                        "PATH_TO_AUTHORIZE" => SITE_DIR."auth/",
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
            <div class="row justify-content-between">
                <div class="col-3 brand d-none d-lg-inline-flex">
                    <a href="/">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/logo-2.png" alt="">
                    </a>
                </div>
                <div class="col-6 col-lg-3 header_search">
                    <!-- search -->
                    <input type="search" name="" id="" placeholder="Поиск по сайту">
                    <input type="submit" value="" hidden>
                    <!-- /search -->
                </div>
                <div class="col-4 d-none d-lg-inline-flex header_info">
                    <div>
                        <div>
                            <a href="tel:+79031302440">8 (903) 130 24 40 (Максим)</a>
                            - с 10:00 до 20:00 часов по будням
                        </div>
                        <div>
                            <a href="tel:+78660157063">8 (866) 015 70 63 (Елена)</a>
                            - горячая линия c 8:00 до 17:00
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2 d-flex justify-content-end">

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
            <div id="catalog_nav" class="navbar navbar-expand-md d-none d-lg-block">
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

                                <!--<a class="dropdown-item" href="/catalog/">Каталог</a>-->

                                <div class="dropright">
                                    <a class="dropdown-item" href="/catalog/cadcam/">CAT/СAM системы</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                        <a class="dropdown-item" href="/catalog/ioscans/">Интраоральные сканеры</a>
                                        <a class="dropdown-item" href="/catalog/cad-cam-kits/">Комплекты CAD/CAM</a>
                                        <a class="dropdown-item" href="/catalog/labscans/">Лабораторные сканеры</a>
                                        <a class="dropdown-item" href="/catalog/milling/">Фрезеры</a>
                                    </div>
                                </div>
                                <!-- // -->
                                <div class="dropright">
                                    <a class="dropdown-item" href="/catalog/consumables/">Расходные материалы</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                        <a class="dropdown-item" href="/catalog/disks/">Диски</a>
                                        <a class="dropdown-item" href="/catalog/blocks/">Блоки</a>
                                        <a class="dropdown-item" href="/catalog/cutters/">Фрезы</a>
                                        <a class="dropdown-item" href="/catalog/3d-printing/">3D печать</a>
                                        <a class="dropdown-item" href="/catalog/accessories/">Аксессуары</a>
                                        <a class="dropdown-item" href="/catalog/dye/">Красители</a>
                                    </div>
                                </div>
                                <!-- // -->
                                <a class="dropdown-item" href="/catalog/software/">Программное обеспечение</a>

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
