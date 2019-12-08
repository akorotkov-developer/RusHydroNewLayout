<?php
foreach ($arResult["ITEMS"] as $key => $arItem) {
    $renderImage = CFile::ResizeImageGet(
        $arItem["PREVIEW_PICTURE"],
        ["width"   => 138],
        BX_RESIZE_IMAGE_EXACT, false
    );

    $arResult["ITEMS"][$key]["RESIZE_PICTURE"] = $renderImage;


}

$dates = [];
if (\Bitrix\Main\Loader::includeModule('iblock')) {
    $i = 0;
    $arSort = array('SORT' => 'ASC', 'ID' => 'DESC');
    $arFilter = array('ACTIVE' => 'Y', 'IBLOCK_ID' => $arParams['IBLOCK_ID']);
    $arSelect = array('ACTIVE_FROM');

    $res = CIBlockElement::getList($arSort, $arFilter, false, array(), $arSelect);
    while ($row = $res->fetch()) {
        $dates[] = date("Y", strtotime($row["ACTIVE_FROM"]));;
    }
}
arsort($dates);

$arResult["DATES"] = array_unique($dates);
