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

<?php
//список месяцев с названиями для замены
$_monthsList = array(".01." => "января", ".02." => "февраля",
    ".03." => "марта", ".04." => "апреля", ".05." => "мая", ".06." => "июня",
    ".07." => "июля", ".08." => "августа", ".09." => "сентября",
    ".10." => "октября", ".11." => "ноября", ".12." => "декабря");

//текущая дата
$currentDate = date("d.m.Y", strtotime($arResult["DISPLAY_ACTIVE_FROM"]));
//переменная $currentDate теперь хранит текущую дату в формате 22.07.2015

//но так как наша задача - вывод русской даты,
//заменяем число месяца на название:
$_mD = date(".m.", strtotime($arResult["DISPLAY_ACTIVE_FROM"])); //для замены
$currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);
?>

<div class="content-text_image-block">
    <?php if($arResult["PICTURE"]) {?>
        <div class="content-text_image">
            <img src="<?=$arResult["PICTURE"]["src"]?>">
        </div>
    <?php }?>
    <div class="content-text_image-text">
        <p class="detail_name"><?=$arResult["NAME"]?></p>
        <p class="detail_university"><?=$arResult["PROPERTIES"]["UNIVERSITY"]["VALUE"]?></p>
        <p class="detail_progress"><?=$arResult["PROPERTIES"]["PROGRESS"]["VALUE"]?></p>
        <?=$arResult["DETAIL_TEXT"]?>
    </div>
</div>
<div class="content-footer">
    <a href="/news/" class="content-footer_back">← К списку новостей</a>
    <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.min.js"></script>
    <script src="https://yastatic.net/share2/share.min.js"></script>
    <div class="ya-share2" data-шservices="collections,vkontakte,facebook,odnoklassniki,moimir"></div>
</div>