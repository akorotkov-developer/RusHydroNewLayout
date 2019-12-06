<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)){?>

    <div class="aside">
        <nav class="navigation">
            <ul class="navigation_list">
                <?php foreach ($arResult["TREE_MENU"] as $arItem) {?>
                    <?php if ($arItem["CHILDS"]) {?>
                        <li class="navigation_li"><span class="navigation_link"><?=$arItem["TEXT"]?></span>
                            <ul class="navigation_sub-list">
                                <?php foreach ($arItem["CHILDS"] as $arChild) {?>
                                    <li class="navigation_sub-li"><a href="<?=$arChild["LINK"]?>" class="navigation_sub-link">- <?=$arChild["TEXT"]?></a></li>
                                <?php }?>
                            </ul>
                        </li>
                    <?php } else {?>
                        <li class="navigation_li"><span class="navigation_link"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></span></li>
                    <?php }?>
                <?php }?>
            </ul>
        </nav>
    </div>

<?php }?>