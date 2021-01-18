<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="container my-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 col-xl-4 shadow">

            <h2 class="display-6 mb-3"><?=GetMessage('SYS_AUTH_REGISTRATION_TITLE'); /* заголовок формы */ ?></h2>

            <?
            // сообщение о том, как закончилась операция регистрации
            ShowMessage($arParams["~AUTH_RESULT"]);
            ?>

            <?
            if ($arResult["USE_EMAIL_CONFIRMATION"] === "Y"
            && is_array($arParams["AUTH_RESULT"])
            && $arParams["AUTH_RESULT"]["TYPE"] === "OK"):
            ?>
            <p><?=GetMessage('SYS_AUTH_REGISTRATION_EMAIL_SENT'); /* отправлено письмо для подтверждения */ ?></p>
        </div>
    </div>
</div>
<? return; ?>
<? endif; ?>

<? if ($arResult["USE_EMAIL_CONFIRMATION"] === "Y"): ?>
    <p><?=GetMessage('SYS_AUTH_REGISTRATION_EMAIL_HELP'); /* будет отправлено письмо для подтверждения */ ?></p>
<? endif; ?>

<form method="post" action="<?=$arResult["AUTH_URL"];?>" name="bform" enctype="multipart/form-data">

    <? if (strlen($arResult["BACKURL"]) > 0): ?>
        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"];?>" />
    <? endif; ?>

    <input type="hidden" name="AUTH_FORM" value="Y" />
    <input type="hidden" name="TYPE" value="REGISTRATION" />

    <div class="mb-3">
        <label class="form-label" for="USER_NAME">
            <?=GetMessage('SYS_AUTH_REGISTRATION_FNAME'); /* user first name */ ?>
        </label>
        <input
                type="text"
                name="USER_NAME"
                class="form-control"
                aria-describedby="userName"
                value="<?=$arResult["USER_NAME"];?>"
                placeholder="<?=GetMessage('SYS_AUTH_REGISTRATION_FNAME_EXAMPLE'); /* example first name */ ?>"
        />
        <div id="userName" class="d-none form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="USER_LAST_NAME">
            <?=GetMessage('SYS_AUTH_REGISTRATION_LNAME'); /* user last name */ ?>
        </label>
        <input
                type="text"
                name="USER_LAST_NAME"
                class="form-control"
                aria-describedby="userLastName"
                value="<?=$arResult["USER_LAST_NAME"];?>"
                placeholder="<?=GetMessage('SYS_AUTH_REGISTRATION_LNAME_EXAMPLE'); /* example last name */ ?>"
        />
        <div id="userLastName" class="d-none form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="USER_LOGIN">
            <?=GetMessage('SYS_AUTH_REGISTRATION_LOGIN'); /* логин пользователя */ ?>
            <span class="text-danger">*</span> <!-- поле обязательно для заполнения -->
        </label>
        <input
                type="text"
                name="USER_LOGIN"
                class="form-control"
                aria-describedby="userLogin"
                value="<?=$arResult["USER_LOGIN"];?>"
                placeholder="<?=GetMessage('SYS_AUTH_REGISTRATION_LOGIN'); /* логин пользователя */ ?>"
        />
        <div id="userLogin" class="form-text">
            <?=GetMessage('SYS_AUTH_REGISTRATION_LOGIN_LEN'); /* предупреждение о длине логина */ ?>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="USER_EMAIL">
            <?=GetMessage('SYS_AUTH_REGISTRATION_EMAIL'); /* e-mail пользователя */ ?>
            <? if ($arResult["EMAIL_REQUIRED"]): ?>
                <span class="text-danger">*</span> <!-- поле обязательно для заполнения -->
            <? endif; ?>
        </label>
        <input
                type="email"
                name="USER_EMAIL"
                class="form-control"
                aria-describedby="userEmail"
                value="<?=$arResult["USER_EMAIL"];?>"
                placeholder="<?=GetMessage('SYS_AUTH_REGISTRATION_EMAIL_EXAMPLE'); /* example e-mail */ ?>"
        />
        <div id="userEmail" class="d-none form-text">...</div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="USER_PASSWORD">
            <?=GetMessage('SYS_AUTH_REGISTRATION_PASSWORD'); /* пароль пользователя */ ?>
            <span class="text-danger">*</span> <!-- поле обязательно для заполнения -->
        </label>
        <input
                type="password"
                name="USER_PASSWORD"
                class="form-control"
                aria-describedby="userPassword"
                value="<?=$arResult["USER_PASSWORD"];?>"
                autocomplete="off"
        />
        <div id="userPassword" class="form-text">
            <?=$arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"]; /* предупреждение о длине пароля */ ?>
        </div>
    </div>

    <? if ($arResult["SECURE_AUTH"]): /* безопасная авторизация (зашифрованная передача пароля) */ ?>
        <!-- код удален -->
    <? endif; ?>

    <div class="mb-3">
        <label class="form-label" for="USER_CONFIRM_PASSWORD">
            <?=GetMessage('SYS_AUTH_REGISTRATION_CONFIRM'); /* подтверждение пароля */ ?>
            <span class="text-danger">*</span> <!-- поле обязательно для заполнения -->
        </label>
        <input
                type="password"
                name="USER_CONFIRM_PASSWORD"
                class="form-control"
                aria-describedby="userConfirmPassword"
                value="<?=$arResult["USER_CONFIRM_PASSWORD"];?>"
                autocomplete="off"
        />
        <div id="userConfirmPassword" class="d-none form-text">We'll never share your email with anyone else.</div>
    </div>

    <? if ($arResult["USER_PROPERTIES"]["SHOW"] == "Y"): /* User properties */ ?>
        <?
        echo
        strlen(trim($arParams["USER_PROPERTY_NAME"])) > 0
            ?
            $arParams["USER_PROPERTY_NAME"]
            :
            GetMessage("USER_TYPE_EDIT_TAB");
        ?>
        <? foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField): ?>

            <? if ($arUserField["MANDATORY"]=="Y"): ?>
                <span class="text-danger">*</span> <!-- поле обязательно для заполнения -->
            <? endif; ?>

            <?=$arUserField["EDIT_FORM_LABEL"]?>:

            <?
            $APPLICATION->IncludeComponent(
                "bitrix:system.field.edit",
                $arUserField["USER_TYPE"]["USER_TYPE_ID"],
                array(
                    "bVarsFromForm" => $arResult["bVarsFromForm"],
                    "arUserField" => $arUserField,
                    "form_name" => "bform"
                ),
                null,
                array("HIDE_ICONS" => "Y")
            );
            ?>

        <? endforeach; ?>
    <? endif; ?>

    <? if ($arResult["USE_CAPTCHA"] == "Y"): /* CAPTCHA */ ?>
        <div class="mb-3">

            <label class="form-label" for="captcha_word">
                <?=GetMessage('SYS_AUTH_REGISTRATION_CAPTCHA_TEXT'); /* введите код с картинки */ ?>
                <span class="text-danger">*</span> <!-- поле обязательно для заполнения -->
            </label>

            <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"];?>" />

            <div class="input-group">
                        <span class="input-group-text overflow-hidden p-0" id="basic-addon1">
                            <img
                                    src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"];?>"
                                <?/*
                                width="180"
                                height="40"
                                */?>
                                alt="CAPTCHA"
                            />
                        </span>
                <input
                        type="text"
                        name="captcha_word"
                        class="form-control"
                        maxlength="50"
                        value=""
                        placeholder="<?=GetMessage('SYS_AUTH_REGISTRATION_CAPTCHA_TEXT'); /* введите код с картинки */ ?>"
                />
            </div>

            <div class="form-text">
                <?=GetMessage('SYS_AUTH_REGISTRATION_CAPTCHA_TITLE'); /* Защита от роботов */ ?>
            </div>

        </div>
    <? endif; ?>

    <?
    /* запрос согласия пользователя */
    $APPLICATION->IncludeComponent(
        "bitrix:main.userconsent.request",
        "",
        array(
            "ID" => COption::getOptionString("main", "new_user_agreement", ""),
            "IS_CHECKED" => "Y",
            "AUTO_SAVE" => "N",
            "IS_LOADED" => "Y",
            "ORIGINATOR_ID" => $arResult["AGREEMENT_ORIGINATOR_ID"],
            "ORIGIN_ID" => $arResult["AGREEMENT_ORIGIN_ID"],
            "INPUT_NAME" => $arResult["AGREEMENT_INPUT_NAME"],
            "REPLACE" => array(
                "button_caption" => GetMessage("AUTH_REGISTER"),
                "fields" => array(
                    rtrim(GetMessage("AUTH_NAME"), ":"),
                    rtrim(GetMessage("AUTH_LAST_NAME"), ":"),
                    rtrim(GetMessage("AUTH_LOGIN_MIN"), ":"),
                    rtrim(GetMessage("AUTH_PASSWORD_REQ"), ":"),
                    rtrim(GetMessage("AUTH_EMAIL"), ":"),
                )
            ),
        )
    );
    ?>

    <div class="mb-3">
        <input
                type="submit"
                name="Register"
                class="btn btn-block btn-lg btn-primary"
                value="<?=GetMessage('SYS_AUTH_REGISTRATION_SUBMIT'); /* кнопка отправки формы */ ?>"
        />
    </div>

</form>

<div class="mb-3">
    <p class="form-text">
        <span class="text-danger">*</span> <?=GetMessage('SYS_AUTH_REGISTRATION_REQUIRED'); /* Эти поля обязательны для заполнения */ ?>
    </p>
</div>

<div class="mb-3">
    <a class="link-secondary" href="<?=$arResult["AUTH_AUTH_URL"]; ?>" rel="nofollow">
        <?=GetMessage('SYS_AUTH_REGISTRATION_AUTH'); /* ссылка на страницу авторизации */ ?>
    </a>
</div>

<script type="text/javascript">
    document.bform.USER_NAME.focus();
</script>

</div>
</div>
</div>