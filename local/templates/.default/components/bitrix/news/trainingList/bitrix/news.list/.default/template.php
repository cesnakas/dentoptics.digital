<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="TxtRaspisanie">РАСПИСАНИЕ</div>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="row trainingSpoilers" data-id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="col-6"><b><span class="trainingStatus"><b>+</b></span> <?=$arItem["NAME"];?></b></div>
        <div class="col-3 text-center dateSpoiler">
			<?php $date1 = $arItem["DISPLAY_PROPERTIES"]["date_training"]["DISPLAY_VALUE"];
echo strtolower(FormatDate("d F", MakeTimeStamp($date1)));?>
		</div>
        <div class="col-3 text-center"><b><?=$arItem["PROPERTIES"]["anchor_training"]["VALUE"];?></b></div><br>
    </div>
    <div class="trainingContentList" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="news-item row">
            <div class="col-6 blockList">
            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
                            class="preview_picture"
                            border="0"
                            src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            width="155"
                            height="155"
                            alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                            style="border-radius:50%;object-fit: cover;"
                            /></a>
                <?else:?>
                    <img
                        class="preview_picture"
                        border="0"
                        src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                        width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                        height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                        title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                        />
                <?endif;?>
            <?endif?>
                <span class="profAnchorList">
                    <?=$arItem["PROPERTIES"]["profAnchor_training"]["VALUE"];?>
                </span>
            </div>
            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                <div style="clear:both"></div>
            <?endif?>
            <div class="col-3 text-center blockList">
                <p><?echo $arItem["PREVIEW_TEXT"];?></p>
            </div>
            <div class="col-3 text-center blockList">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="btn_more">Подробнее</a>
            </div>
        </div>
    </div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
