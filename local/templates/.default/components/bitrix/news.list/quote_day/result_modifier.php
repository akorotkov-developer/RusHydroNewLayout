<?php
foreach ($arResult["ITEMS"] as $key => $arItem) {
    $renderImage = CFile::ResizeImageGet(
        $arItem["PREVIEW_PICTURE"],
        ["width"   => 280,
          "height" => 197],
        BX_RESIZE_IMAGE_EXACT, false
    );

    $arResult["ITEMS"][$key]["RESIZE_PICTURE"] = $renderImage;
}
