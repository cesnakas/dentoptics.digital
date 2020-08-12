<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?>

    <section class="section">
        <div class="container-xl">

            <?$APPLICATION->IncludeComponent(
                "bitrix:sale.personal.section",
                "bootstrap_v4",
                Array(
                    "ACCOUNT_PAYMENT_SELL_USER_INPUT" => "Y",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "3600",
                    "CACHE_TYPE" => "A",
                    "CHECK_RIGHTS_PRIVATE" => "Y",
                    "COMPATIBLE_LOCATION_MODE_PROFILE" => "N",
                    "CUSTOM_PAGES" => "",
                    "CUSTOM_SELECT_PROPS" => array(""),
                    "MAIN_CHAIN_NAME" => "Мой кабинет",
                    "NAV_TEMPLATE" => "",
                    "ORDERS_PER_PAGE" => "20",
                    "ORDER_DEFAULT_SORT" => "STATUS",
                    "ORDER_DISALLOW_CANCEL" => "Y",
                    "ORDER_HIDE_USER_INFO" => array("0"),
                    "ORDER_HISTORIC_STATUSES" => array("F"),
                    "ORDER_REFRESH_PRICES" => "N",
                    "ORDER_RESTRICT_CHANGE_PAYSYSTEM" => array("0"),
                    "PATH_TO_BASKET" => "/basket/",
                    "PATH_TO_CATALOG" => "/catalog/",
                    "PATH_TO_CONTACT" => "/about/contacts/",
                    "PATH_TO_PAYMENT" => "/personal/order/payment/",
                    "PROFILES_PER_PAGE" => "20",
                    "SAVE_IN_SESSION" => "Y",
                    "SEF_FOLDER" => "/personal/",
                    "SEF_MODE" => "Y",
                    "SEF_URL_TEMPLATES" => Array(
                        "account" => "account/",
                        "index" => "index.php",
                        "order_cancel" => "cancel/#ID#",
                        "order_detail" => "orders/#ID#",
                        "orders" => "orders/",
                        "private" => "private/",
                        "profile" => "profiles/",
                        "profile_detail" => "profiles/#ID#",
                        "subscribe" => "subscribe/"
                    ),
                    "SEND_INFO_PRIVATE" => "Y",
                    "SET_TITLE" => "Y",
                    "SHOW_ACCOUNT_PAGE" => "Y",
                    "SHOW_BASKET_PAGE" => "Y",
                    "SHOW_CONTACT_PAGE" => "N",
                    "SHOW_ORDER_PAGE" => "Y",
                    "SHOW_PRIVATE_PAGE" => "Y",
                    "SHOW_PROFILE_PAGE" => "Y",
                    "SHOW_SUBSCRIBE_PAGE" => "Y",
                    "USE_AJAX_LOCATIONS_PROFILE" => "N"
                )
            );?>

        </div>
    </section>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>