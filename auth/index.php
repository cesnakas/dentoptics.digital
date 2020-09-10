<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

    <section class="section">
        <div class="container-xl">
            <?$APPLICATION->IncludeComponent(
                "bitrix:system.auth.form",
                "auth",
                Array(
                    "COMPONENT_TEMPLATE" => "auth",
                    "FORGOT_PASSWORD_URL" => "/auth/forget.php",
                    "PROFILE_URL" => "profile.php",
                    "REGISTER_URL" => "/auth/registration.php",
                    "SHOW_ERRORS" => "Y"
                )
            );?>
        </div>
    </section>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>