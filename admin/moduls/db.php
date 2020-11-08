<?php
$nameDB = "price";//Название БД
$nameSERVER = "localhost";//Сервер
$nameUSER = "root";//Имя пользователя БД
$passUSER = "";//Пароль пользователя БД
mysql_select_db($nameDB, mysql_connect($nameSERVER,$nameUSER,$passUSER));


if(isset($_GET['server_root'])){$server_root = $_GET['server_root'];unset($server_root);}
if(isset($_POST['server_root'])){$server_root = $_POST['server_root'];unset($server_root);}

$server_root = "http://yoururl.ru/";
?>
