<?php
foreach ($arResult["ITEMS"] as $key => $arItem) {
    $arResult["ITEMS"][$key]["PROPERTIES"]["VIDEO_URL"]["VALUE"] = str_replace("watch?v=", "embed/", $arItem["PROPERTIES"]["VIDEO_URL"]["VALUE"]);
}

$dates = [];
if (\Bitrix\Main\Loader::includeModule('iblock')) {
    $i = 0;
    $arSort = ['SORT' => 'ASC', 'ID' => 'DESC'];
    $arFilter = ['ACTIVE' => 'Y', 'IBLOCK_ID' => $arParams['IBLOCK_ID']];
    $arSelect = ['ACTIVE_FROM'];

    $res = CIBlockElement::getList($arSort, $arFilter, false, [], $arSelect);
    while ($row = $res->fetch()) {
        if ($row["ACTIVE_FROM"] > 0) {
            $dates[] = date("Y", strtotime($row["ACTIVE_FROM"]));
        }
    }
}
arsort($dates);

$arResult["DATES"] = array_unique($dates);
