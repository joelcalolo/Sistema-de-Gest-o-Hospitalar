<?php 
include '../conexao.php';
if(isset($_POST['pronto'])){
   $nome=$_POST['nome'];
   $data=$_POST['data'];
   $genero=$_POST['genero'];
   $doenca=$_POST['doenca'];
   $descricao=$_POST['descricao'];
   mysql_query("INSERT INTO doente(nome,date, genero,doenca, descricao) VALUES ('$nome','$data','$genero','$doenca','$descrisao')", $connect);  
  header('location: index.php');
   }
   