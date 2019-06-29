<?php
$ini_datas = parse_ini_file("php/config.ini");
$url=$ini_datas['url'];
$login=$ini_datas['login'];
$pass=$ini_datas['pass'];
$db = new PDO($url, $login, $pass);
?>
