<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>

<?if (!$arResult["DISABLE_USE_BASKET"]) { ?>
    <a href="<?=$arParams['PATH_TO_BASKET']?>" style="position: relative;">
        <img src="<?=SITE_TEMPLATE_PATH;?>/img/svg/basket.svg" alt="">
        <span class="sr-only"><?=GetMessage('TSB1_CART')?></span>

<? } ?>

<?
if (!$compositeStub) {
    if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y')) {
?>
        <sup>
            <?/*=$arResult['BASKET_COUNT_DESCRIPTION'];*/?>
            <?=$arResult['NUM_PRODUCTS']?>
        </sup>
    </a>
<?
        if ($arParams['SHOW_TOTAL_PRICE'] == 'Y') {
            ?>
            <br <? if ($arParams['POSITION_FIXED'] == 'Y'): ?>class="d-none d-block-sm"<? endif; ?>/>
            <span>
                <?=GetMessage('TSB1_TOTAL_PRICE')?> <strong><?=$arResult['TOTAL_PRICE']?></strong>
            </span>
            <?
        }
    }
}
?>

<? if ($arParams['SHOW_PERSONAL_LINK'] == 'Y'):?>
    <div class="mt-1 basket-line-block">
        <a href="<?=$arParams['PATH_TO_PERSONAL']?>"><?=GetMessage('TSB1_PERSONAL')?></a>
    </div>
<? endif ?>