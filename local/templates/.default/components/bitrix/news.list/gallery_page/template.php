<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<div class="content-photo">
    <select class="content-photo_select" name="select2">
        <?php if (!$_GET["year"]) {?>
            <option class="content-photo_option">Выберите год</option>
        <?}?>
        <?php foreach ($arResult["DATES"] as $date) {
            if ($date == $_GET["year"]) {
                $selected = 'selected="selected"';
            } else {
                $selected = "";
            }
            ?>
            <option class="content-photo_option" <?=$selected?> data-href="<?echo $APPLICATION->GetCurPageParam("year=" . $date, array("year"));?>"><?=$date?></option>
        <?php } ?>
    </select>

    <div class="content-photo_items -photo">
        <?php foreach($arResult["ITEMS"] as $arItem){?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <div class="content-photo_img" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <a rel="win__group" class="fb" href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                    <img src="<?=$arItem["RESIZE_PICTURE"]["src"]?>">
                </a>
            </div>

            <?php
        }
        ?>
    </div>
</div>

<div class="content-footer">
    <?php if($arParams["DISPLAY_BOTTOM_PAGER"]) {?>
        <?=$arResult["NAV_STRING"]?>
    <?php }?>
</div>



