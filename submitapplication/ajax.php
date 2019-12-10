<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

use RusHydro\Config;

$APPLICATION->RestartBuffer();

$adminEmail = $_POST["admin_email"];

$fio = strip_tags($_POST["fio"]);
$birthdate = strip_tags($_POST["birthdate"]);
$studyhome = strip_tags($_POST["studyhome"]);
$fackultet = strip_tags($_POST["fackultet"]);
$kurs = strip_tags($_POST["kurs"]);
$work = strip_tags($_POST["work"]);
$interests = strip_tags($_POST["interests"]);
$download_link = strip_tags($_POST["download_link"]);

$address = strip_tags($_POST["address"]);
$contact_phone = strip_tags($_POST["contact_phone"]);
$email = strip_tags($_POST["email"]);
$who_did_you_know = strip_tags($_POST["who_did_you_know"]);

$work_name = strip_tags($_POST["work_name"]);
$select = strip_tags($_POST["select"]);
$academic_director = strip_tags($_POST["academic_director"]);
$work_position_academic_director = strip_tags($_POST["work_position_academic_director"]);

$emailMessage = "Фамилия, Имя, Отчество: " . $fio . "\n";
$emailMessage .= "Дата рождения: " . $birthdate . "\n";
$emailMessage .= "Учебное заведение: " . $studyhome . "\n";
$emailMessage .= "Факультет (специальность, специализация): " . $fackultet . "\n";
$emailMessage .= "Курс / год обучения: " . $kurs . "\n";
$emailMessage .= "Место работы: " . $work . "\n";
$emailMessage .= "Научные интересы: " . $interests . "\n";
$emailMessage .= "Ссылка на скачивание работы: " . $download_link . "\n\n";

$emailMessage .= "Контактная информация\n";
$emailMessage .= "Адрес (с указанием почтового индекса):" . $address . "\n";
$emailMessage .= "Контактный телефон (с указанием кода города): " . $contact_phone . "\n";
$emailMessage .= "Электронный адрес: " . $email . "\n";
$emailMessage .= "Напишите, пожалуйста, откуда Вы узнали о конкурсе: " . $who_did_you_know . "\n\n";

$emailMessage .= "Информация о конкурсной работе\n";
$emailMessage .= "Название работы: " . $work_name . "\n";
$emailMessage .= "Тема работы: " . $select . "\n";
$emailMessage .= "Научный руководитель: " . $academic_director . "\n";
$emailMessage .= "Должность и место работы научного руководителя: " . $work_position_academic_director . "\n";

mail($adminEmail, "Заполнена форма Анкета участника конкурса «Энергия развития»", $emailMessage);

echo json_encode("Y");

die();

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>