<?php
/*
$connection = mysql_connect("localhost", "root", "1234");
mysql_select_db("varsayalimIsmailDB", $connection);
mysql_set_charset("utf8", $connection);
*/

$connection = new PDO("mysql:host=localhost;dbname=mustafas_varsayalimIsmailDB;charset=utf8", "mustafas_root", "42L7495");
//$connection = new PDO("mysql:host=localhost;dbname=varsayalimIsmailDB;charset=utf8", "root", "1234");

?>