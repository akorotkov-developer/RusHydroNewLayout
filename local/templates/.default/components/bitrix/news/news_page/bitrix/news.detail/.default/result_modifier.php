<?php
if ($arResult["DETAIL_PICTURE"]) {
    $picture = $arResult["DETAIL_PICTURE"];
} else {
    $picture = $arResult["PREVIEW_PICTURE"];
}

$renderImage = CFile::ResizeImageGet(
    $picture,
    ["width"   => 340,
     "height"  => 225],
    BX_RESIZE_IMAGE_EXACT, false
);

$arResult["PICTURE"] = $renderImage;