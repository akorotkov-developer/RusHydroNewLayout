<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

IncludeTemplateLangFile(__FILE__);

use RusHydro\Config;
use RusHydro\Tools;
use Bitrix\Main\Page\Asset;

CJSCore::Init(array("jquery"));
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID ?>">
<head>
    <?$APPLICATION->ShowHead();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/favicon-16x16.png" type="image/png">
    <link rel="icon" sizes="32x32" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/favicon-32x32.png" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/favicons/apple-touch-icon-1024x1024.png">

    <?
    Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800&display=swap");
    Asset::getInstance()->addCss(Config::RUSHYDRO_TEMPLATE_PATH . "styles/main.min.css");
    ?>
</head>
<body class="index">

<?$APPLICATION->ShowPanel();?>

    <div class="centerBlock">
        <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "topmenu",
        array(
            "ROOT_MENU_TYPE" => "top",
            "MAX_LEVEL" => "1",
            "CHILD_MENU_TYPE" => "top",
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "Y",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "COMPONENT_TEMPLATE" => ".default"
        ),
        false
    );?>
    <header class="header">
        <a href="/" class="logo"><img src="<?=Config::RUSHYDRO_TEMPLATE_PATH?>img/logo.png" alt=""></a>
    </header>

    <?php
    if ($APPLICATION->GetCurPage() == "/") {
        $APPLICATION->IncludeComponent("bitrix:news.list","slider",Array(
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "Y",
                "IBLOCK_TYPE" => "news",
                "IBLOCK_ID" => Tools::GetIDByCode("slider"),
                "NEWS_COUNT" => "20",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("ID"),
                "PROPERTY_CODE" => Array("DESCRIPTION", "URL"),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "Y",
                "SET_BROWSER_TITLE" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_META_DESCRIPTION" => "Y",
                "SET_LAST_MODIFIED" => "Y",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "Y",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "Y",
                "PAGER_TEMPLATE" => "",
                "PAGER_DESC_NUMBERING" => "Y",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "Y",
                "PAGER_BASE_LINK_ENABLE" => "Y",
                "SET_STATUS_404" => "Y",
                "SHOW_404" => "Y",
                "MESSAGE_404" => "",
                "PAGER_BASE_LINK" => "",
                "PAGER_PARAMS_NAME" => "arrPager",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => ""
            )
        );
    }?>
    <div class="content-blocks">
        <?$APPLICATION->IncludeComponent("bitrix:menu","leftmenu",Array(
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "2",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "Y",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => ""
            )
        );?>
        <div class="content-blocks_inner">