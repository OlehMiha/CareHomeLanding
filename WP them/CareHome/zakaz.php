<?php

$my_url= $_SERVER['HTTP_HOST'];
$to = "elite.team.ltd@gmail.com";
$subject = "Заказ";
$message = 'Заказ с сайта: '.$my_url.';<br>Имя: '.$_POST['name'].';<br>Телефон: '.$_POST['tel'].';<br>';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: elite.team.ltd@gmail.com\r\n";
$result = mail($to, $subject, $message, $headers);

?>