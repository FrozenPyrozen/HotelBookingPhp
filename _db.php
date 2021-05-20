<?php
$host = "127.0.0.1";
$port = 3306;
$username = "u_313_kohan";
$password = "!kwN6mN2LWx";
$database = "db_313_kohan_test";

$db = new PDO("mysql:host=$host;port=$port",
               $username,
               $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("use `$database`");
?>