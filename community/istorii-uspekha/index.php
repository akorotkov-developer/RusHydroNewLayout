<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Истории успеха");

use RusHydro\Tools;
?>

<?php
if ($_GET["tst"] == "tst") {

        $APPLICATION->IncludeComponent(
            "bitrix:news",
            "historys",
            [
                "IBLOCK_TYPE" => "news",
                "IBLOCK_ID" => Tools::GetIDByCode("historys"),
                "NEWS_COUNT" => "5",
                "USE_SEARCH" => "N",
                "USE_RSS" => "N",
                "NUM_NEWS" => "10",
                "NUM_DAYS" => "30",
                "YANDEX" => "N",
                "USE_RATING" => "N",
                "USE_CATEGORIES" => "N",
                "USE_FILTER" => "Y",
                "FILTER_FIELD_CODE" => ["DATE_ACTIVE_FROM"],
                "FILTER_NAME" => "arrFilter",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "CHECK_DATES" => "Y",
                "SEF_MODE" => "Y",
                "SEF_FOLDER" => "/community/istorii-uspekha/",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_SHADOW" => "N",
                "AJAX_OPTION_JUMP" => "Y",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_PANEL" => "N",
                "SET_TITLE" => "Y",
                "SET_STATUS_404" => "Y",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "Y",
                "USE_PERMISSIONS" => "N",
                "PREVIEW_TRUNCATE_LEN" => "",
                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "LIST_FIELD_CODE" => [
                    0 => "",
                    1 => "",
                ],
                "LIST_PROPERTY_CODE" => [
                    0 => "UNIVERSITY",
                    1 => "PROGRESS",
                ],
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "DISPLAY_NAME" => "Y",
                "META_KEYWORDS" => "-",
                "META_DESCRIPTION" => "-",
                "BROWSER_TITLE" => "-",
                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "DETAIL_FIELD_CODE" => [
                    0 => "PREVIEW_PICTURE",
                    1 => "DETAIL_PICTURE",
                ],
                "DETAIL_PROPERTY_CODE" => [
                    0 => "UNIVERSITY",
                    1 => "PROGRESS",
                ],
                "DETAIL_DISPLAY_TOP_PAGER" => "N",
                "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                "DETAIL_PAGER_TITLE" => "Страница",
                "DETAIL_PAGER_TEMPLATE" => "arrows",
                "DETAIL_PAGER_SHOW_ALL" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "news_pager",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
                "PAGER_SHOW_ALL" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "SET_LAST_MODIFIED" => "N",
                "ADD_ELEMENT_CHAIN" => "Y",
                "STRICT_SECTION_CHECK" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "USE_SHARE" => "N",
                "DETAIL_SET_CANONICAL_URL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => "",
            ],
            false
        );

}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>