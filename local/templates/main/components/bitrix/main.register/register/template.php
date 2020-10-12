<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult["SHOW_SMS_FIELD"] == true)
{
    CJSCore::Init('phone_auth');
}
?>

<div class="bx-auth-reg container w-50 p-3 rounded shadow">

<?if($USER->IsAuthorized()):?>

        <p><?echo GetMessage("MAIN_REGISTER_AUTH")?></p>

<?else:?>

    <?if (count($arResult["ERRORS"]) > 0):?>
        <?
        foreach ($arResult["ERRORS"] as $key => $error)
            if (intval($key) == 0 && $key !== 0)
                $arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);

        ShowError(implode("<br />", $arResult["ERRORS"]));
        ?>
    <?elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
        <p><?echo GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?></p>
    <?endif?>

    <?if($arResult["SHOW_SMS_FIELD"] == true):?>

    <form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform">

        <?if($arResult["BACKURL"] <> ''):?>
        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>">
        <?endif;?>

        <input type="hidden" name="SIGNED_DATA" value="<?=htmlspecialcharsbx($arResult["SIGNED_DATA"])?>">

        <div class="form-group">
            <label for="smsCode"><?=GetMessage("main_register_sms")?></label>
            <input size="30" type="text" name="SMS_CODE" class="form-control" id="smsCode" value="<?=htmlspecialcharsbx($arResult["SMS_CODE"])?>" autocomplete="off">
        </div>

        <input type="submit" name="code_submit_button" class="btn btn-primary mb-3" value="<?echo GetMessage("main_register_sms_send")?>">

    </form>

    <script>
    new BX.PhoneAuth({
        containerId: 'bx_register_resend',
        errorContainerId: 'bx_register_error',
        interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
        data:
            <?=CUtil::PhpToJSObject([
                'signedData' => $arResult["SIGNED_DATA"],
            ])?>,
        onError:
            function(response)
            {
                var errorDiv = BX('bx_register_error');
                var errorNode = BX.findChildByClassName(errorDiv, 'errortext');
                errorNode.innerHTML = '';
                for(var i = 0; i < response.errors.length; i++)
                {
                    errorNode.innerHTML = errorNode.innerHTML + BX.util.htmlspecialchars(response.errors[i].message) + '<br>';
                }
                errorDiv.style.display = '';
            }
    });
    </script>

    <div id="bx_register_error" style="display:none"><?ShowError("error")?></div>

    <div id="bx_register_resend"></div>

    <?else:?>

    <form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">

        <?if($arResult["BACKURL"] <> ''):?>
        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
        <?endif;?>

        <h4><?=GetMessage("AUTH_REGISTER")?></h4>

        <?foreach ($arResult["SHOW_FIELDS"] as $FIELD):?>
            <?if($FIELD == "AUTO_TIME_ZONE" && $arResult["TIME_ZONE_ENABLED"] == true):?>

        <div class="form-group">
            <label for="autoTimeZone">
                <?=GetMessage("main_profile_time_zones_auto")?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><span class="starrequired">*</span><?endif?>
            </label>
            <select name="REGISTER[AUTO_TIME_ZONE]" class="form-control" id="autoTimeZone" onchange="this.form.elements['REGISTER[TIME_ZONE]'].disabled=(this.value != 'N')">
                <option value="">
                    <?=GetMessage("main_profile_time_zones_auto_def")?>
                </option>
                <option value="Y"<?=$arResult["VALUES"][$FIELD] == "Y" ? " selected=\"selected\"" : ""?>>
                    <?=GetMessage("main_profile_time_zones_auto_yes")?>
                </option>
                <option value="N"<?=$arResult["VALUES"][$FIELD] == "N" ? " selected=\"selected\"" : ""?>>
                    <?=GetMessage("main_profile_time_zones_auto_no")?>
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="timeZone"><?=GetMessage("main_profile_time_zones_zones")?></label>
            <select name="REGISTER[TIME_ZONE]"<?if(!isset($_REQUEST["REGISTER"]["TIME_ZONE"])) echo 'disabled="disabled"'?> class="form-control" id="timeZone">
                <?foreach($arResult["TIME_ZONE_LIST"] as $tz=>$tz_name):?>
                <option value="<?=htmlspecialcharsbx($tz)?>"<?=$arResult["VALUES"]["TIME_ZONE"] == $tz ? " selected=\"selected\"" : ""?>>
                    <?=htmlspecialcharsbx($tz_name)?>
                </option>
                <?endforeach?>
            </select>
        </div>

            <?else:?>

        <div class="form-group">
            <label for="form<?=$FIELD?>">
                <?=GetMessage("REGISTER_FIELD_".$FIELD)?>:<?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><span class="starrequired">*</span><?endif?>
            </label>

        <?
        switch ($FIELD) {
        case "PASSWORD":
        ?>

            <input type="password" name="REGISTER[<?=$FIELD?>]" class="form-control" id="form<?=$FIELD?>" value="<?=$arResult["VALUES"][$FIELD]?>" autocomplete="off">

            <?if($arResult["SECURE_AUTH"]):?>
                <span class="bx-auth-secure" id="bx_auth_secure" title="<?=GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
                <noscript>
				<span class="bx-auth-secure" title="<?=GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
                </noscript>
                <script type="text/javascript">
                    document.getElementById('bx_auth_secure').style.display = 'inline-block';
                </script>
            <?endif?>

        <?
        break;

        case "CONFIRM_PASSWORD":
        ?>

            <input type="password" name="REGISTER[<?=$FIELD?>]" class="form-control" id="form<?=$FIELD?>" value="<?=$arResult["VALUES"][$FIELD]?>" autocomplete="off">

        <?
        break;

        case "PERSONAL_GENDER":
        ?>

            <select name="REGISTER[<?=$FIELD?>]" class="form-control" id="form<?=$FIELD?>">
                <option value=""><?=GetMessage("USER_DONT_KNOW")?></option>
                <option value="M"<?=$arResult["VALUES"][$FIELD] == "M" ? " selected=\"selected\"" : ""?>><?=GetMessage("USER_MALE")?></option>
                <option value="F"<?=$arResult["VALUES"][$FIELD] == "F" ? " selected=\"selected\"" : ""?>><?=GetMessage("USER_FEMALE")?></option>
            </select>

        <?
        break;

        case "PERSONAL_COUNTRY":
        case "WORK_COUNTRY":
        ?>

            <select name="REGISTER[<?=$FIELD?>]" class="form-control" id="form<?=$FIELD?>">
            <?foreach ($arResult["COUNTRIES"]["reference_id"] as $key => $value) {?>
                <option value="<?=$value?>"<?if ($value == $arResult["VALUES"][$FIELD]):?> selected="selected"<?endif?>>
                    <?=$arResult["COUNTRIES"]["reference"][$key]?>
                </option>
            <? } ?>
            </select>

        <?
        break;

        case "PERSONAL_NOTES":
        case "WORK_NOTES":
        ?>

            <textarea cols="30" rows="5" name="REGISTER[<?=$FIELD?>]" class="form-control" id="form<?=$FIELD?>">
                <?=$arResult["VALUES"][$FIELD]?>
            </textarea>

        <?
        break;

        default:
        ?>

            <?
            if ($FIELD == "PERSONAL_BIRTHDAY"):?>

            <small><?=$arResult["DATE_FORMAT"]?></small><br /><?endif;?>

            <input type="text" name="REGISTER[<?=$FIELD?>]" class="form-control" id="form<?=$FIELD?>" value="<?=$arResult["VALUES"][$FIELD]?>">

            <?if ($FIELD == "PERSONAL_BIRTHDAY")
                $APPLICATION->IncludeComponent(
                    'bitrix:main.calendar',
                    '',
                    array(
                        'SHOW_INPUT' => 'N',
                        'FORM_NAME' => 'regform',
                        'INPUT_NAME' => 'REGISTER[PERSONAL_BIRTHDAY]',
                        'SHOW_TIME' => 'N'
                    ),
                    null,
                    array("HIDE_ICONS"=>"Y")
                );?>

        <?
        }
        ?>

        </div>

            <?endif;?>
        <?endforeach;?>

        <?/* ********** user properties ********** */?>

        <?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
        <div class="form-group">

            <div><?=strlen(trim($arParams["USER_PROPERTY_NAME"])) > 0 ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB")?></div>

            <?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>


                    <label><?=$arUserField["EDIT_FORM_LABEL"]?>:<?if ($arUserField["MANDATORY"]=="Y"):?><span class="starrequired">*</span><?endif;?></label>

                    <div>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:system.field.edit",
                        $arUserField["USER_TYPE"]["USER_TYPE_ID"],
                        array(
                            "bVarsFromForm" => $arResult["bVarsFromForm"],
                            "arUserField" => $arUserField,
                            "form_name" => "regform"
                        ),
                        null, array(
                            "HIDE_ICONS" => "Y"
                        )
                    );?>

                    </div>

            <?endforeach;?>

        </div>
        <?endif;?>

        <?/* ********** /user properties ********** */?>

        <?
        /* captcha */
        if ($arResult["USE_CAPTCHA"] == "Y") { ?>
        <div class="form-group">

            <div class="form-text text-muted mb-2">
                <b><?=GetMessage("REGISTER_CAPTCHA_TITLE")?></b>
            </div>

            <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>"/>

            <img class="d-block mb-3 rounded" src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA">

            <label for="captchaWord"><?=GetMessage("REGISTER_CAPTCHA_PROMT")?>:<span class="starrequired">*</span></label>
            <input type="text" name="captcha_word" class="form-control" id="captchaWord" value="" autocomplete="off">

        </div>
        <? }
        /* /captcha */
        ?>

        <input type="submit" name="register_submit_button" value="<?=GetMessage("AUTH_REGISTER")?>" />

    </form>

    <p><?=$arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>

    <?endif;?>

    <p><span class="starrequired">*</span><?=GetMessage("AUTH_REQ")?></p>

<?endif;?>

</div>