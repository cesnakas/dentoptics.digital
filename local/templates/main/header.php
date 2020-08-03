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
    // CSS
    Asset::getInstance()->addCss('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/main.min.css');
    // JS
    Asset::getInstance()->addJs('https://code.jquery.com/jquery-3.5.1.min.js');
    Asset::getInstance()->addJs('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
    Asset::getInstance()->addJs('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js');
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
            <a class="navbar-brand d-block d-lg-none" href="/">Brand</a>
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
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="#">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/user.svg" alt="">
                        <span>Войти</span>
                    </a>
                    <a class="nav-item nav-link" href="#">Регистрация</a>
                </div>
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
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-3 header_search">
                    <input type="search" name="" id="" placeholder="Поиск по сайту">
                    <input type="submit" value="" hidden>
                </div>
                <div class="col-4 header_info">
                    <div>
                        <div>
                            <a href="tel:">8 (495) 796 24 10</a>
                            - с 10:00 до 20:00 часов по будням
                        </div>
                        <div>
                            <a href="#">8 (800) 100 23 83</a>
                            - горячая линия c 8:00 до 17:00
                        </div>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <div class="header_basket">
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/compare.svg" alt="">
                            <span class="sr-only">Compare</span>
                        </a>
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/subscribe.svg" alt="">
                            <span class="sr-only">Subscribe</span>
                        </a>
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/basket.svg" alt="">
                            <span class="sr-only">Basket</span>
                        </a>
                    </div>
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
                        <a class="nav-item nav-link" href="/catalog/">Каталог</a>
                        <a class="nav-item nav-link" href="#">Проекты</a>
                        <a class="nav-item nav-link" href="/training/">Обучение</a>
                        <a class="nav-item nav-link" href="/service/">Сервис</a>
                        <a class="nav-item nav-link" href="/company/">Компания</a>
                        <a class="nav-item nav-link" href="/contacts/">Контакты</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main" role="main">
