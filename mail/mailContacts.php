<?php 


$phone = $_POST['manager_phone'];

$to = 'max.kuzn.msx@gmail.com';
$subject = 'Заказ консультации со страницы "Контакты" Bauhaus';
$message    = '
	Пользователь оставил данные <br> 
	Телефон: ' . $phone . '';

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.'Bauhaus'.' <bauhaus@bauhaus.by>' . PHP_EOL .
'Reply-To: max.kuznec@yandex.ru' . PHP_EOL;

mail($to, $subject, $message, $headers);


header("Location: {$_SERVER['HTTP_REFERER']}");

?>