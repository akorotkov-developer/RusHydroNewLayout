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

<h4 class="content-block_title">ВИДЕО <a href="/video/" class="content-block_all">Все видео</a></h4>

<?php foreach($arResult["ITEMS"] as $arItem){?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

    if ($arItem["PREVIEW_PICTURE"]["SRC"] != "") {
        $poster = "poster='" . $arItem["PREVIEW_PICTURE"]["SRC"] . "'";
    }
    ?>

    <div class="content-block_video" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <video width="100%" height="197px" controls="controls" <?=$poster?>>
            <source src="<?=$arItem["PROPERTIES"]["VIDEO_URL"]["VALUE"]?>">
        </video>
    </div>
    <p class="video_block_name"><?=$arItem["NAME"]?></p>

    <?php
    break;
}
?>






