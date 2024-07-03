<?php 
include 'conexao.php';
   
if(isset($_GET['id'])){
   $id=$_GET['id'];    
   $selecao= mysql_query("SELECT * FROM visitas WHERE Id=$id", $connect);
   $select=  mysql_fetch_assoc($selecao);
   $nome= $select["nome"];
   $visitado=$select["visitado"]; 
   $hora_entrada=$select["hora"];
   $hora_saida=date("H:i:s");
   $data=$select["data"];
   $motivo=$select["motivo"];
   mysql_query("INSERT INTO historico_visitas (nome, visitado, hora_entrada, hora_saida, data, motivo) VALUES ('$nome','$visitado','$hora_entrada','$hora_saida','$data','$motivo')", $connect);
   mysql_query("DELETE FROM visitas WHERE Id=$id", $connect);
   header('location: visitantes.php');    
   
  }

   ?>
 