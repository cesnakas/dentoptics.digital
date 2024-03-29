<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CJSCore::Init();
?>

<div class="bx-system-auth-form container col-md-6 col-lg-4 p-3 rounded shadow">
    <?
    if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
        ShowMessage($arResult['ERROR_MESSAGE']);
    ?>

<?if($arResult["FORM_TYPE"] == "login"):?>

    <form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">

        <?if($arResult["BACKURL"] <> ''):?>
        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
        <?endif?>

        <?foreach ($arResult["POST"] as $key => $value):?>
        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
        <?endforeach?>

        <input type="hidden" name="AUTH_FORM" value="Y" />
        <input type="hidden" name="TYPE" value="AUTH" />

        <div class="form-group">
            <label for="userLogin"><?=GetMessage("AUTH_LOGIN")?>:</label>
            <input name="USER_LOGIN" type="text" class="form-control" id="userLogin" aria-describedby="userLoginHelp">
            <script>
                BX.ready(function() {
                    var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
                    if (loginCookie)
                    {
                        var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
                        var loginInput = form.elements["USER_LOGIN"];
                        loginInput.value = loginCookie;
                    }
                });
            </script>
            <!--<small class="form-text text-muted" id="userLoginHelp">Логин должен быть не менее 3 символов длиной.</small>-->
        </div>

        <div class="form-group">
            <label for="userPassword"><?=GetMessage("AUTH_PASSWORD")?>:</label>
            <input name="USER_PASSWORD" type="password" class="form-control" id="userPassword" autocomplete="off" aria-describedby="userPasswordHelp">
            <?/*if($arResult["SECURE_AUTH"]):?>
                <span class="bx-auth-secure" id="bx_auth_secure<?=$arResult["RND"]?>" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
                <noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
                </noscript>
                <script type="text/javascript">
                    document.getElementById('bx_auth_secure<?=$arResult["RND"]?>').style.display = 'inline-block';
                </script>
            <?endif*/?>
            <!--<small class="form-text text-muted" id="userPasswordHelp">Пароль должен быть не менее 6 символов длиной.</small>-->
        </div>

        <?if ($arResult["STORE_PASSWORD"] == "Y"):?>
        <div class="form-group custom-control custom-checkbox">
            <input name="USER_REMEMBER" type="checkbox" class="custom-control-input" id="USER_REMEMBER_frm" value="Y">
            <label class="custom-control-label" for="USER_REMEMBER_frm" title="<?=GetMessage("AUTH_REMEMBER_ME")?>">
                <?echo GetMessage("AUTH_REMEMBER_SHORT")?>
            </label>
        </div>
        <?endif?>

        <?if ($arResult["CAPTCHA_CODE"]):?>
        <div class="form-group">
            <label for="authCaptha"><?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:</label>
            <input type="hidden" name="captcha_sid" id="authCaptha" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
            <img class="d-block mb-3 rounded" src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
            <input type="text" name="captcha_word" class="form-control" value="" />
        </div>
        <?endif;?>

        <div class="form-group">
            <input type="submit" name="Login" class="btn btn-block btn-primary" value="<?=GetMessage('AUTH_LOGIN_BUTTON')?>">
        </div>

        <?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
        <small class="form-text mb-3 text-center">
            <noindex>
                <a class="text-muted" href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow">
                    <?=GetMessage("AUTH_REGISTER")?>
                </a>
            </noindex>
        </small>
        <?endif;?>

        <?if($arResult["AUTH_SERVICES"]):?>
        <div class="form-group">
            <div><?=GetMessage("socserv_as_user_form")?></div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:socserv.auth.form",
                "icons",
                array(
                    "AUTH_SERVICES" => $arResult["AUTH_SERVICES"],
                    "SUFFIX" => "form",
                ),
                $component,
                array(
                    "HIDE_ICONS" => "Y"
                )
            );?>
        </div>
        <?endif;?>

    </form>

    <?if($arResult["AUTH_SERVICES"]):?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:socserv.auth.form",
            "",
            array(
                "AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
                "AUTH_URL"=>$arResult["AUTH_URL"],
                "POST"=>$arResult["POST"],
                "POPUP"=>"Y",
                "SUFFIX"=>"form",
            ),
            $component,
            array("HIDE_ICONS"=>"Y")
        );?>
    <?endif?>

<?elseif($arResult["FORM_TYPE"] == "otp"):?>

    <form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">

        <?if($arResult["BACKURL"] <> ''):?>
        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>">
        <?endif;?>

        <input type="hidden" name="AUTH_FORM" value="Y">
        <input type="hidden" name="TYPE" value="OTP">

        <div class="form-group">
            <label for="compOtp"><?echo GetMessage("auth_form_comp_otp")?></label>
            <input type="text" name="USER_OTP" class="form-control" id="compOtp" maxlength="50" value="" size="17" autocomplete="off">
        </div>

    </form>

<?else:?>

    <form action="<?=$arResult["AUTH_URL"]?>">

        <table width="95%">
            <tr>
                <td align="center">
                    <?=$arResult["USER_NAME"]?><br />
                    [<?=$arResult["USER_LOGIN"]?>]<br />
                    <a href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_PROFILE")?></a><br />
                </td>
            </tr>
            <tr>
                <td align="center">
                    <?foreach ($arResult["GET"] as $key => $value):?>
                        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
                    <?endforeach?>
                    <input type="hidden" name="logout" value="yes" />
                    <input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
                </td>
            </tr>
        </table>

    </form>

<?endif;?>

</div>