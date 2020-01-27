<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

use RusHydro\Config;

$APPLICATION->RestartBuffer();

$adminEmail = strip_tags($_POST["email_admin"]);
$email = strip_tags($_POST["email"]);
$fio = strip_tags($_POST["fio"]);
$message = strip_tags($_POST["message"]);

$mailMessage = "ФИО: " . $fio . "\n<br>";
$mailMessage .= "E-mail: " . $email . "\n<br>";
$mailMessage .= "Вопрос: " . $message;

// устанавливаем тип сообщения Content-type, если хотим
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";

// дополнительные данные
$headers .= "From: RusHydro <no-reply@rushydro.ru>\r\n"; // от кого

mail($adminEmail, "Заполнена форма задать вопрос с сайта", $mailMessage, $headers);

echo json_encode("Y");

die();

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>