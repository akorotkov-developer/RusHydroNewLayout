<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

use RusHydro\Config;

$APPLICATION->RestartBuffer();

$adminEmail = strip_tags($_POST["email_admin"]);
$email = strip_tags($_POST["email"]);
$fio = strip_tags($_POST["fio"]);
$message = strip_tags($_POST["message"]);

$mailMessage = "ФИО: " . $fio . "\n";
$mailMessage .= "E-mail: " . $email . "\n";
$mailMessage .= "Вопрос: " . $message;

mail($adminEmail, "Заполнена форма задать вопрос с сайта", $mailMessage);

echo json_encode("Y");

die();

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>