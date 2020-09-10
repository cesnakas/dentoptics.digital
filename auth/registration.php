<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

    <section class="section">
        <div class="container-xl">

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.register",
                "register",
                Array(
                    "AUTH" => "Y",
                    "COMPONENT_TEMPLATE" => ".default",
                    "REQUIRED_FIELDS" => array(0=>"EMAIL",1=>"NAME",2=>"PERSONAL_PHONE",),
                    "SEF_FOLDER" => "/",
                    "SEF_MODE" => "Y",
                    "SET_TITLE" => "Y",
                    "SHOW_FIELDS" => array(0=>"EMAIL",1=>"NAME",2=>"PERSONAL_PHONE",),
                    "SUCCESS_PAGE" => "",
                    "USER_PROPERTY" => "",
                    "USER_PROPERTY_NAME" => "",
                    "USE_BACKURL" => "Y"
                )
            );?>

        </div>
    </section>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>