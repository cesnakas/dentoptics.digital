<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
	LocalRedirect($backurl);

$APPLICATION->SetTitle("Авторизация");
?>

    <section class="section">
        <div class="container-xl">

            <?$APPLICATION->IncludeComponent(
                "bitrix:system.auth.form",
                "",
                Array(
                    "REGISTER_URL" => "register.php",
                    "FORGOT_PASSWORD_URL" => "",
                    "PROFILE_URL" => "profile.php",
                    "SHOW_ERRORS" => "Y"
                )
            );?>

            <p>Вы зарегистрированы и успешно авторизовались.</p>

            <p>Используйте административную панель в верхней части экрана для быстрого доступа к функциям управления структурой и информационным наполнением сайта. Набор кнопок верхней панели отличается для различных разделов сайта. Так отдельные наборы действий предусмотрены для управления статическим содержимым страниц, динамическими публикациями (новостями, каталогом, фотогалереей) и т.п.</p>

            <p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>

        </div>
    </section>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>