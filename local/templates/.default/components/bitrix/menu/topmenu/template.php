<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)){?>

    <div class="modal-menu">
        <input id="hamburger" class="hamburger" type="checkbox">
        <label class="hamburger" for="hamburger">
            <i></i>
        </label>
        <section class="drawer-list">
            <ul class="">
                <?php foreach ($arResult["TREE_MENU"] as $item) {?>
                    <li><a href="<?=$item["LINK"]?>"><?=$item["TEXT"]?></a></li>
                <?php }?>
            </ul>
        </section>
    </div>

<?php }?>

