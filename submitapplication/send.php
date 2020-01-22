<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Анкета участника конкурса «Энергия развития»");
$APPLICATION->AddChainItem($APPLICATION->GetTitle());

use RusHydro\Config;
?>

<?php
if(isset($_FILES) && $_FILES['inputfile']['error'] == 0){ // Проверяем, загрузил ли пользователь файл
    $file = $_FILES["inputfile"];

    $file_name = $file['name'];
    $file_type = substr($file_name, strrpos($file_name, '.')+1);
    $randName = rand(1000000, 10000000);

    $uploadfile = $_SERVER["DOCUMENT_ROOT"] . "/temp_files/file" . $randName . "." . $file_type;
    $urlUploadFile = "/temp_files/file" . $randName . "." . $file_type;

    move_uploaded_file($file['tmp_name'], $uploadfile);
}

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

$emailMessage .= "<html><head></head><body>";

if ($fio) $emailMessage = "Фамилия, Имя, Отчество: " . $fio . "<br>\n";
if ($birthdate) $emailMessage .= "Дата рождения: " . $birthdate . "<br>\n";
if ($studyhome) $emailMessage .= "Учебное заведение: " . $studyhome . "<br>\n";
if ($fackultet) $emailMessage .= "Факультет (специальность, специализация): " . $fackultet . "<br>\n";
if ($kurs) $emailMessage .= "Курс / год обучения: " . $kurs . "<br>\n";
if ($work) $emailMessage .= "Место работы: " . $work . "<br>\n";
if ($interests) $emailMessage .= "Научные интересы: " . $interests . "<br>\n";
if ($download_link) $emailMessage .= "Ссылка на скачивание работы: " . $download_link . "<br>\n\n";

$emailMessage .= "<br>";

$emailMessage .= "Контактная информация<br>\n";
if ($address) $emailMessage .= "Адрес (с указанием почтового индекса):" . $address . "<br>\n";
if ($contact_phone) $emailMessage .= "Контактный телефон (с указанием кода города): " . $contact_phone . "<br>\n";
if ($email) $emailMessage .= "Электронный адрес: " . $email . "<br>\n";
if ($who_did_you_know) $emailMessage .= "Напишите, пожалуйста, откуда Вы узнали о конкурсе: " . $who_did_you_know . "<br>\n\n";

$emailMessage .= "<br>";

$emailMessage .= "Информация о конкурсной работе<br>\n";
if ($work_name) $emailMessage .= "Название работы: " . $work_name . "<br>\n";
if ($select) $emailMessage .= "Тема работы: " . $select . "<br>\n";
if ($academic_director) $emailMessage .= "Научный руководитель: " . $academic_director . "<br>\n";
if ($work_position_academic_director) $emailMessage .= "Должность и место работы научного руководителя: " . $work_position_academic_director . "<br>\n";

if ($urlUploadFile) {
    $emailMessage .= "Файл работы <a download href='http://" . $_SERVER["HTTP_HOST"] . $urlUploadFile . "'>Скачать</a>";
}

$emailMessage .= "</body></html>";

// устанавливаем тип сообщения Content-type, если хотим
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";

// дополнительные данные
$headers .= "From: RusHydro <no-reply@rushydro.ru>\r\n"; // от кого

mail($adminEmail, "Заполнена форма Анкета участника конкурса «Энергия развития»", $emailMessage, $headers);
?>

<p class="send_ok_message">Спасибо, ваше анкета отправлена!</p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
