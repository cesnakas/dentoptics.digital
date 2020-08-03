<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>

<?if (!$compositeStub && $arParams['SHOW_AUTHOR'] == 'Y'):?>

		<?
        if ($USER->IsAuthorized()):
			$name = trim($USER->GetFullName());
			if (! $name)
				$name = trim($USER->GetLogin());
        ?>

        <a class="nav-item nav-link" href="<?=$arParams['PATH_TO_PROFILE']?>">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/user.svg" alt="">
            <span><?=htmlspecialcharsbx($name)?></span>
        </a>
        <a class="nav-item nav-link" href="?logout=yes">
            <?=GetMessage('TSB1_LOGOUT')?>
        </a>

		<?
        else:
			$arParamsToDelete = array(
				"login",
				"login_form",
				"logout",
				"register",
				"forgot_password",
				"change_password",
				"confirm_registration",
				"confirm_code",
				"confirm_user_id",
				"logout_butt",
				"auth_service_id",
				"clear_cache",
				"backurl",
			);

			$currentUrl = urlencode($APPLICATION->GetCurPageParam("", $arParamsToDelete));
			if ($arParams['AJAX'] == 'N')
			{
				?><script type="text/javascript"><?=$cartId?>.currentUrl = '<?=$currentUrl?>';</script><?
			}
			else
			{
				$currentUrl = '#CURRENT_URL#';
			}

			$pathToAuthorize = $arParams['PATH_TO_AUTHORIZE'];
			$pathToAuthorize .= (mb_stripos($pathToAuthorize, '?') === false ? '?' : '&');
			$pathToAuthorize .= 'login=yes&backurl='.$currentUrl;
			?>

			<a class="nav-item nav-link" href="<?=$pathToAuthorize?>">
                <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/user.svg" alt="">
                <span><?=GetMessage('TSB1_LOGIN')?></span>
            </a>

			<?
            if ($arParams['SHOW_REGISTRATION'] === 'Y') {
				$pathToRegister = $arParams['PATH_TO_REGISTER'];
				$pathToRegister .= (mb_stripos($pathToRegister, '?') === false ? '?' : '&');
				$pathToRegister .= 'register=yes&backurl='.$currentUrl;
            ?>

            <a class="nav-item nav-link" href="<?=$pathToRegister?>">
                <?=GetMessage('TSB1_REGISTER')?>
            </a>

            <? } ?>
		<?endif?>

<?endif?>