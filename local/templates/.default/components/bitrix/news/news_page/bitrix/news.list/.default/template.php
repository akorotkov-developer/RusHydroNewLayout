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

<div class="news">
    <?foreach($arResult["ITEMS"] as $arItem) {?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="news_item"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a href="" class="news_image">
                <img src="<?=$arItem["RESIZE_PICTURE"]["src"]?>" alt="">
            </a>
            <div class="news_info">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news_title">
                    <?php
                    echo date("d.m.Y", strtotime($arItem["ACTIVE_FROM"]));
                    ?> | <?php echo $arItem["NAME"]?>
                </a>
                <p>
                    <?php echo TruncateText($arItem["PREVIEW_TEXT"], 200); ?>
                </p>
            </div>
        </div>
    <?php }?>
</div>

<div class="content-footer">
    <?php if($arParams["DISPLAY_BOTTOM_PAGER"]) {?>
        <?=$arResult["NAV_STRING"]?>
    <?php }?>
</div>
