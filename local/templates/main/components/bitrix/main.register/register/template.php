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

                <label for=""><?=GetMessage("REGISTER_FIELD_".$FIELD)?>:<?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><span class="starrequired">*</span><?endif?></label>

        <?
        switch ($FIELD) {
        case "PASSWORD":
        ?>

        <input size="30" type="password" name="REGISTER[<?=$FIELD?>]" class="form-control" value="<?=$arResult["VALUES"][$FIELD]?>" autocomplete="off">

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

            <input size="30" type="password" name="REGISTER[<?=$FIELD?>]" class="form-control" value="<?=$arResult["VALUES"][$FIELD]?>" autocomplete="off">

        <?
        break;
        case "PERSONAL_GENDER":
        ?>

            <select name="REGISTER[<?=$FIELD?>]" class="form-control">
                <option value=""><?=GetMessage("USER_DONT_KNOW")?></option>
                <option value="M"<?=$arResult["VALUES"][$FIELD] == "M" ? " selected=\"selected\"" : ""?>><?=GetMessage("USER_MALE")?></option>
                <option value="F"<?=$arResult["VALUES"][$FIELD] == "F" ? " selected=\"selected\"" : ""?>><?=GetMessage("USER_FEMALE")?></option>
            </select>

        <?
        break;
        case "PERSONAL_COUNTRY":
        case "WORK_COUNTRY":
        ?>

            <select name="REGISTER[<?=$FIELD?>]">
            <?foreach ($arResult["COUNTRIES"]["reference_id"] as $key => $value) {?>
                <option value="<?=$value?>"<?if ($value == $arResult["VALUES"][$FIELD]):?> selected="selected"<?endif?>>
                    <?=$arResult["COUNTRIES"]["reference"][$key]?>
                </option>
            <? } ?>
            </select>

        <?
        }
        ?>

            <?endif;?>
        <?endforeach;?>

    </form>

    <?endif;?>

<?endif;?>

</div>