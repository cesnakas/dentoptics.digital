<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.register",
    ".default",
    Array(
        "AUTH" => "Y",
        "COMPONENT_TEMPLATE" => ".default",
        "REQUIRED_FIELDS" => array(
            0 => "EMAIL",
            1 => "NAME",
            2 => "PERSONAL_PHONE",
        ),
        "SEF_FOLDER" => "/",
        "SEF_MODE" => "Y",
        "SET_TITLE" => "Y",
        "SHOW_FIELDS" => array(
            0 => "EMAIL",
            1 => "NAME",
            2 => "PERSONAL_PHONE",
        ),
        "SUCCESS_PAGE" => "",
        "USER_PROPERTY" => array(),
        "USER_PROPERTY_NAME" => "",
        "USE_BACKURL" => "Y"
    )
);?>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>