<?php 
/*
$Server = "localhost"; 
$Login = "smart"; 
$Password = "KIVhbSKA";
$DataBase = "ein_calls";
*/
$Server = "forel.mysql.ukraine.com.ua"; 
$Login = "forel_eintest"; 
$Password = "mvpffh3w";
$DataBase = "forel_eintest";

$db = new MySQLi($Server, $Login, $Password, $DataBase);

$result = $db->query("Set charset utf8");
$result = $db->query("Set character_set_client = utf8");
$result = $db->query("Set character_set_connection = utf8");
$result = $db->query("Set character_set_results = utf8");
$result = $db->query("Set collation_connection = utf8_general_ci");

if (mysqli_connect_errno()) { 
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
}
