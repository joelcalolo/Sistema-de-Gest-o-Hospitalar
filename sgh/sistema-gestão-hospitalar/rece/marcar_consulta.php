<?php 
include '../conexao.php';
if(isset($_POST['salvar'])){
    $nome=$_POST['nome'];
    $data=$_POST['data'];
    $genero=$_POST['genero'];
    $descrisao=$_POST['descrisao'];
    mysql_query("INSERT INTO consultas (nome, data, genero, sintomas) VALUES ('$nome','$data','$genero','$descrisao')",$connect);
Header('location: index.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Consultorio</title>
    <link href="css/boostrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/justified-nav.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>




    <div class="container">

        <label for="inputName" class="sr-only">Nome</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Nome" name="nome" required autofocus>
        <label for="inputDate" class="sr-only">Data</label>
        <input type="date" id="inputPassword" class="form-control" placeholder="Data" name="data" required>
        <label for="inputGenero" class="sr-only">Genero</label>
        <select id="inputGenero" class="form-control" placeholder="Data" name="genero" required>
          <option></option>
          <option>Masculino</option>
          <option>Femenino</option>         
        </select>
        <label for="inputPassword" class="sr-only">Descrisao</label>
        <textarea id="inputText" class="form-control" name="descrisao" placeholder="Descrisao dos sintomas e mais" required></textarea>
        <div class="checkbox">

    </div> 
  </body>
</html>
