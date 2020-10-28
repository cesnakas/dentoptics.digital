<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("");
?>

<section class="section">
	<div class="container-xl">

        <?$APPLICATION->IncludeComponent(
            "bitrix:catalog.compare.list",
            "bootstrap_v4",
            Array(
                "ACTION_VARIABLE" => "action",
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "Y",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "COMPARE_URL" => SITE_DIR.'compare/',
                "DETAIL_URL" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "catalog",
                "NAME" => "CATALOG_COMPARE_LIST",
                "POSITION" => "bottom right",
                "POSITION_FIXED" => "Y",
                "PRODUCT_ID_VARIABLE" => "id"
            )
        );?>
		
	</div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>