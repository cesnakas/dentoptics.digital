<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("");
?>

<section class="section">
	<div class="container-xl">

        <?$APPLICATION->IncludeComponent(
            "bitrix:main.auth.form",
            "",
            Array(
                "AUTH_FORGOT_PASSWORD_URL" => "",
                "AUTH_REGISTER_URL" => "",
                "AUTH_SUCCESS_URL" => ""
            )
        );?>
		
	</div>
</section>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>