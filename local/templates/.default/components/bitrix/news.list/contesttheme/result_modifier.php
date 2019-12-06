<?php
function getExtension1($filename) {
    return end(explode(".", $filename));
}

foreach ($arResult["ITEMS"] as $key => $arItem) {
    $arFile = CFile::GetFileArray($arItem["PROPERTIES"]["FILE"]["VALUE"]);
    $arFile["EXPANSION"] = getExtension1($arFile["FILE_NAME"]);

    $arResult["ITEMS"][$key]["FILE"] = $arFile;
}