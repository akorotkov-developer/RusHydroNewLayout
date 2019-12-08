<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)){?>

    <?php
    if ($APPLICATION->GetCurPage() != "/") {
        $mainClass = "aside_inner";
    }
    ?>
    <div class="aside <?=$mainClass?>">
        <nav class="navigation">
            <ul class="navigation_list">
                <?php foreach ($arResult["TREE_MENU"] as $arItem) {?>
                    <?php if ($arItem["CHILDS"]) {
                        if ($arItem["SELECTED"]) {
                            $activeClass = "-active";
                            $activeStyle = "style = 'display: block;'";
                        } else {
                            $activeClass = "";

                        }
                        ?>
                        <li class="navigation_li <?=$activeClass?>"><span class="navigation_link"><?=$arItem["TEXT"]?></span>
                            <ul class="navigation_sub-list" <?=$activeStyle?>>
                                <?php foreach ($arItem["CHILDS"] as $arChild) {
                                    if ($arChild["SELECTED"]) {
                                        $activeClass = "active";
                                    } else {
                                        $activeClass = "";
                                    }
                                    ?>
                                    <li class="navigation_sub-li"><a href="<?=$arChild["LINK"]?>" class="navigation_sub-link <?=$activeClass?>">- <?=$arChild["TEXT"]?></a></li>
                                <?php }?>
                            </ul>
                        </li>
                    <?php } else {
                        if ($arItem["SELECTED"]) {
                            $activeClass = "-active";
                        } else {
                            $activeClass = "";

                        }
                        ?>
                        <li class="navigation_li <?=$activeClass?>"><span class="navigation_link"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></span></li>
                    <?php }?>
                <?php }?>
            </ul>
        </nav>
    </div>

<?php }?>