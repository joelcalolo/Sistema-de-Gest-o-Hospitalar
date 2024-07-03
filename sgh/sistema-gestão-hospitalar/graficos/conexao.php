<?php

$connect= mysql_connect("localhost", "root") or die(mysql_error());
mysql_select_db("hospital", $connect);

$consulta= mysql_query("SELECT * FROM paciente");
$ver=  mysql_query("SELECT * FROM doente");
$ver2=  mysql_query("SELECT * FROM espera");
$internados= mysql_query("SELECT * FROM internados");
$malogrados= mysql_query("SELECT * FROM nados_mortos");
$nascidos= mysql_query("SELECT * FROM nascidos");

?>

