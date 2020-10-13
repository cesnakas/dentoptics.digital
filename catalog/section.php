<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог продукции");
?>

    <section class="section">
        <div class="container-xl">

            <div class="row">
                <div class="col-3">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.smart.filter",
                        "bootstrap_v4",
                        Array(
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COMPONENT_TEMPLATE" => "bootstrap_v4",
                            "CONVERT_CURRENCY" => "N",
                            "DISPLAY_ELEMENT_COUNT" => "Y",
                            "FILTER_NAME" => "arrFilter",
                            "FILTER_VIEW_MODE" => "vertical",
                            "HIDE_NOT_AVAILABLE" => "N",
                            "IBLOCK_ID" => "1",
                            "IBLOCK_TYPE" => "catalog",
                            "PAGER_PARAMS_NAME" => "arrPager",
                            "POPUP_POSITION" => "right",
                            "PREFILTER_NAME" => "smartPreFilter",
                            "PRICE_CODE" => array(0=>"PRICE",),
                            "SAVE_IN_SESSION" => "N",
                            "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
                            "SECTION_CODE_PATH" => $_REQUEST["SECTION_CODE_PATH"],
                            "SECTION_DESCRIPTION" => "-",
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],
                            "SECTION_TITLE" => "-",
                            "SEF_MODE" => "Y",
                            "SEF_RULE" => "#SECTION_CODE#/#SECTION_CODE_PATH#/#SMART_FILTER_PATH#/",
                            "SMART_FILTER_PATH" => $_REQUEST["SMART_FILTER_PATH"],
                            "TEMPLATE_THEME" => "blue",
                            "XML_EXPORT" => "N"
                        )
                    );?>

                </div>
                <div class="col-9">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.section",
                        "bootstrap_v4",
                        Array(
                            "ACTION_VARIABLE" => "action",
                            "ADD_PICT_PROP" => "MORE_PHOTO",
                            "ADD_PROPERTIES_TO_BASKET" => "Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "ADD_TO_BASKET_ACTION" => "ADD",
                            "AJAX_MODE" => "Y",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "Y",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "BACKGROUND_IMAGE" => "-",
                            "BASKET_URL" => "/basket/",
                            "BROWSER_TITLE" => "NAME",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COMPATIBLE_MODE" => "Y",
                            "COMPONENT_TEMPLATE" => "bootstrap_v4",
                            "CONVERT_CURRENCY" => "N",
                            "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
                            "DETAIL_URL" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
                            "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_COMPARE" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "ELEMENT_SORT_FIELD" => "name",
                            "ELEMENT_SORT_FIELD2" => "SCALED_PRICE_1",
                            "ELEMENT_SORT_ORDER" => "asc",
                            "ELEMENT_SORT_ORDER2" => "asc",
                            "ENLARGE_PRODUCT" => "STRICT",
                            "FILTER_NAME" => "arrFilter",
                            "HIDE_NOT_AVAILABLE" => "N",
                            "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                            "IBLOCK_ID" => "1",
                            "IBLOCK_TYPE" => "catalog",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "LABEL_PROP" => array(),
                            "LAZY_LOAD" => "Y",
                            "LINE_ELEMENT_COUNT" => "3",
                            "LOAD_ON_SCROLL" => "Y",
                            "MESSAGE_404" => "",
                            "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                            "MESS_BTN_BUY" => "Купить",
                            "MESS_BTN_DETAIL" => "Подробнее",
                            "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                            "MESS_BTN_SUBSCRIBE" => "Подписаться",
                            "MESS_NOT_AVAILABLE" => "Нет в наличии",
                            "META_DESCRIPTION" => "-",
                            "META_KEYWORDS" => "-",
                            "OFFERS_LIMIT" => "5",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "Товары",
                            "PAGE_ELEMENT_COUNT" => "20",
                            "PARTIAL_PRODUCT_PROPERTIES" => "N",
                            "PRICE_CODE" => array(0=>"PRICE",),
                            "PRICE_VAT_INCLUDE" => "Y",
                            "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                            "PRODUCT_ID_VARIABLE" => "id",
                            "PRODUCT_PROPS_VARIABLE" => "prop",
                            "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                            "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
                            "PRODUCT_SUBSCRIPTION" => "Y",
                            "PROPERTY_CODE_MOBILE" => array(0=>"PRICE",1=>"MORE_PHOTO",2=>"VENDOR_CODE",3=>"MANUFACTURER",4=>"MATERIAL",5=>"SIZE",6=>"TRANSPARENCY",7=>"COLOR",8=>"VOLUME",),
                            "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                            "RCM_TYPE" => "personal",
                            "SECTION_CODE" => $_REQUEST["SECTION_CODE"],
                            "SECTION_CODE_PATH" => "",
                            "SECTION_ID" => "",
                            "SECTION_ID_VARIABLE" => "SECTION_ID",
                            "SECTION_URL" => "/catalog/#SECTION_CODE#/",
                            "SECTION_USER_FIELDS" => array(0=>"",1=>"",),
                            "SEF_MODE" => "Y",
                            "SEF_RULE" => "/catalog/#SECTION_CODE#/",
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "N",
                            "SHOW_ALL_WO_SECTION" => "N",
                            "SHOW_CLOSE_POPUP" => "N",
                            "SHOW_DISCOUNT_PERCENT" => "N",
                            "SHOW_FROM_SECTION" => "N",
                            "SHOW_MAX_QUANTITY" => "N",
                            "SHOW_OLD_PRICE" => "N",
                            "SHOW_PRICE_COUNT" => "1",
                            "SHOW_SLIDER" => "Y",
                            "SLIDER_INTERVAL" => "3000",
                            "SLIDER_PROGRESS" => "N",
                            "TEMPLATE_THEME" => "blue",
                            "USE_ENHANCED_ECOMMERCE" => "N",
                            "USE_MAIN_ELEMENT_SECTION" => "N",
                            "USE_PRICE_COUNT" => "N",
                            "USE_PRODUCT_QUANTITY" => "N"
                        )
                    );?>

                </div>
            </div>

        </div>
    </section>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>