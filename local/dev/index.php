<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("");
?>

<section>
	<div class="container">

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
                "PATH_TO_BASKET" => SITE_DIR."personal/cart/",
                "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
                "SHOW_NUM_PRODUCTS" => "Y",
                "PATH_TO_AUTHORIZE" => "",
                "SHOW_PRODUCTS" => "N",
                "POSITION_FIXED" => "N"
            ),
            false
        );?>
		
	</div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>