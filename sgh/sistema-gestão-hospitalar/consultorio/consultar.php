<?php 
include '../conexao.php';
if(isset($_POST['salvar'])){
    $id=$_GET['id'];
    $nome=$_POST['nome'];
    $data=$_POST['data'];
    $genero=$_POST['genero'];
    $analise=$_POST['analise'];
    $descrisao=$_POST['descrisao'];
    mysql_query("INSERT INTO paciente (nome, data, genero, analise, descrisao) VALUES ('$nome','$data','$genero','$analise','$descrisao')",$connect);
    mysql_query("DELETE from consultas WHERE Id=$id", $connect);
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


  </head>

  <body>




    <div class="container">

        <label for="inputName" class="sr-only">Nome</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Nome" name="nome" value="<?php if(isset($_GET['nome'])){$nomeP=$_GET['nome']; echo"$nomeP";} ?>" required autofocus>
        <label for="inputDate" class="sr-only">Data</label>
        <input type="date" id="inputPassword" class="form-control" placeholder="Data" name="data" required>
        <label for="inputGenero" class="sr-only">Genero</label>
        <select id="inputGenero" class="form-control" placeholder="Data" name="genero" required>
          <option></option>
          <option>Masculino</option>
          <option>Femenino</option>         
        </select>
        <label for="inputPassword" class="sr-only">Analise</label>
        <select id="inputPassword" class="form-control" placeholder="Data" name="analise" required>
                <option>P.P Gota espessa</option>
                <option>Hemopgrama completo</option>
                <option>urina</option>
                <option>P.O.P</option>
                <option>HIV/Sída</option>
        </select>
        <label for="inputPassword" class="sr-only">Descrisao</label>
        <textarea id="inputText" class="form-control" name="descrisao" placeholder="Descrisao dos sintomas e mais" required></textarea>
        <div class="checkbox">
      
      <footer >
      </footer>

    </div>
  </body>
</html>
