<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("");
?>

<section class="section">
	<div class="container-xl">

        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "catalog",
            Array(
                "ALLOW_MULTI_SELECT" => "Y",
                "CHILD_MENU_TYPE" => "global",
                "DELAY" => "N",
                "MAX_LEVEL" => "3",
                "MENU_CACHE_GET_VARS" => array(0=>"",),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_THEME" => "site",
                "ROOT_MENU_TYPE" => "global",
                "USE_EXT" => "N"
            )
        );?>
		
	</div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>