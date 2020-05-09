<?php

/* https://api.telegram.org/bot1084239802:AAFMYopnkN0UfX6S8Rp2nz_gZ5zu9IVD0zo/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$name_ru = $_POST['name_ru'];
$phone_ru = $_POST['phone_ru'];
$token = "1084239802:AAFMYopnkN0UfX6S8Rp2nz_gZ5zu9IVD0zo";
$chat_id = "-417297943";
$arr = array(
  'FlexDesign ' => $comment,
  'Імя замовника uk: ' => $name,
  'Телефон uk: ' => $phone,
  'Имя пользователя ru: ' => $name_ru,
  'Телефон ru: ' => $phone_ru,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: /');
} else {
  echo "Error";
}
?>