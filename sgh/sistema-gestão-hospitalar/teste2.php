<?php 
include("conexao.php");

$q=234;

$insert= mysql_query("SELECT * FROM internados");

$consultaA= mysql_query("SELECT * FROM banco_sangue WHERE tipo='A+'");
$A = mysql_fetch_assoc($consultaA);
 echo $A['quantidade'];



  
  
    
?>