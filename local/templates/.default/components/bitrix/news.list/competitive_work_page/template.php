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

<div class="win">
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
            <option class="content-photo_option" <?=$selected?> data-href="<?echo $APPLICATION->GetCurPageParam("year=" . $date, array("year"));?>"><?=$date?> - <?php echo (int)$date + 1?></option>
        <?php } ?>
    </select>

    <?php
    $i = 1;
    foreach($arResult["ITEMS"] as $arItem){?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <?=$arItem["PREVIEW_TEXT"]?>
        </div>
    <?php
    $i++;
    }?>

</div>

<div class="content-footer">
    <?php if($arParams["DISPLAY_BOTTOM_PAGER"]) {?>
        <?=$arResult["NAV_STRING"]?>
    <?php }?>
</div>



