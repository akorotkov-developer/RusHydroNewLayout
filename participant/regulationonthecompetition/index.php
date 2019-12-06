<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Положение о конкурсе");
$APPLICATION->AddChainItem("Стать участником", "/participant/");
$APPLICATION->AddChainItem($APPLICATION->GetTitle());

use RusHydro\Config;
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>