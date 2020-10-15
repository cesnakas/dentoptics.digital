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
<div class="news-detail">
    <?$date = $arResult["DISPLAY_PROPERTIES"]["date_training"]["DISPLAY_VALUE"];
    if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
        <h3><?=strtolower(FormatDate("d F Y", MakeTimeStamp($date))) . 'г. '. $arResult["PROPERTIES"]["city_training"]["VALUE"] .'. '. $arResult["PROPERTIES"]["prefix_training"]["VALUE"] .'. '. $arResult["NAME"]?></h3>
    <?endif;?>
    <div class="contentHead row justify-content-center align-items-center" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div>
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			height="324"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
    </div>
        <div class="trainingSoonRight offset-1 text-right col-4">
            <b class="trainingName"><?=$arResult["NAME"]?></b>
            <div class="trainingDate">
                <div class="DateStamp">
                    <?php
                        echo '<b>'.strtolower(FormatDate("d F", MakeTimeStamp($date))).'</b><br><div class="smallDate">'.$date.'</div>';
                    ?>
                </div>
                <p><?=$arResult["PREVIEW_TEXT"];?></p>
                <div class="trainingAnchor">
                    <b><?=$arResult["PROPERTIES"]["anchor_training"]["VALUE"];?></b><br>
                    <?=$arResult["PROPERTIES"]["profAnchor_training"]["VALUE"];?>
                </div>
            </div>
        </div>
    </div>
    <div class="previewText">
        <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
            <span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
        <?endif;?>
            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
                <p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
            <?endif;?>
        <?if($arResult["NAV_RESULT"]):?>
            <?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
            <?echo $arResult["NAV_TEXT"];?>
            <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
        <?elseif($arResult["DETAIL_TEXT"] <> ''):?>
            <?echo $arResult["DETAIL_TEXT"];?>
        <?else:?>
            <?echo $arResult["PREVIEW_TEXT"];?>
        <?endif?>
    </div>
    <div class="program"><b>ПРОГРАММА:</b><br><br>
    <?=htmlspecialcharsBack($arResult["PROPERTIES"]["program_training"]["VALUE"]["TEXT"]);?>
    </div>
	<div style="clear:both"></div>
	<br />
	<?
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>