<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)){?>

    <div class="buttons">
        <div class="buttons_nav">
            <ul class="buttons_ul">
                <?php foreach ($arResult["TREE_MENU"] as $arItem) {?>
                    <li class="buttons_list-item <?=$arItem["PARAMS"]["orange_class"]?>"><a href="<?=$arItem["LINK"]?>" class="buttons_list-link"><?=$arItem["TEXT"]?></a></li>
                <?php }?>
            </ul>
            <a href="" class="buttons_vk-item">@dev_energy</a>
        </div>
    </div>

<?php }?>

