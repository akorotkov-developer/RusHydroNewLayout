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
$this->setFrameMode(true);?>

<?php
if ($_GET["arrFilter_DATE_ACTIVE_FROM_1"]) {
    $serachDate = $_GET["arrFilter_DATE_ACTIVE_FROM_1"];
    $check = "checked";
}
?>
<form action="<?=$arResult["FORM_ACTION"]?>"  class="search-news">
    <div class="search-news_block">
        <input type="text" class="search-news_input" name="q"  placeholder="Поиск в новостях">
    </div>
    <div class="search-news_block">
        <input id="date" type="checkbox" name="is_search_date" <?=$check?> class="search-news_checkbox">
        <label for="date" class="search-news_label">
            Искать по дате
        </label>
        <div class="search-news_date-block">
            <input type='text' class="search-news_date" name="search_date" placeholder="Выберите дату" value="<?=$serachDate?>"/>
        </div>
    </div>
    <input type="hidden" class="newsdate" name="newsdate">
    <input type="hidden" class="cururl" name="cururl">

    <div style="display: none">
        <input name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" />
    </div>
</form>



