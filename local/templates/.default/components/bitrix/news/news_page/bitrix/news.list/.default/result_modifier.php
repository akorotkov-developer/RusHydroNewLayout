<?php
foreach ($arResult["ITEMS"] as $key => $arItem) {
    $renderImage = CFile::ResizeImageGet(
        $arItem["PREVIEW_PICTURE"],
        ["width" => 165,
            "height" => 109],
        BX_RESIZE_IMAGE_EXACT, false
    );

    $arResult["ITEMS"][$key]["RESIZE_PICTURE"] = $renderImage;
}
