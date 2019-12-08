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
<h4 class="content-block_title">НОВОСТИ <a href="/news/" class="content-block_all">Все новости</a></h4>

<?php foreach($arResult["ITEMS"] as $arItem){?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="content-block_image" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <img src="<?=$arItem["RESIZE_PICTURE"]["src"]?>" alt="">
    </a>
    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="content-block_link">
        <?=$arItem["NAME"]?>
    </a>

    <?php
    break;
}
?>



