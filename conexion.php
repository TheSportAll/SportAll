<?php

$db_user = "root";
$db_pass = "";
$db_name = "sportall";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);












/*<?php
$conexion=mysqli_connect("localhost","root","","sportall") or die("problemas en la conexion");
mysqli_set_charset($conexion,"utf8");

?>
*/