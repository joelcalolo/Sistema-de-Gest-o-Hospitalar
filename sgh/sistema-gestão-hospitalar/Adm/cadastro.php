<?php 
Include '../conexao.php'; 
if(isset($_POST["salvar"])){
    $nome=$_POST["nome"];
    $telefone=$_POST["telefone"];
    $senha=$_POST["passe"];
    $data=$_POST["data"];
    $morada=$_POST["morada"];
    $genero=$_POST["genero"];
    $funcao=$_POST["funcao"];
    mysql_query("INSERT INTO user(nome, telefone, senha, data, morada, genero, funcao) VALUES('$nome','$telefone','$senha','$data','$morada','$genero','$funcao')", $connect);
    Header('location: index.php'); 
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGH | Cadastro</title>

      <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body>
    

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nome completo" name="nome" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Palavra-passe" name="passe" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select name="genero" id="" class="form-control" required>
            <option required></option>
            <option>Masculino</option>
            <option>Femenino</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" placeholder="Data de nascimento" name="data" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Contacto" name="telefone" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select class="form-control" name="funcao" required>
            <option required></option>
            <option>Atendimento</option>
            <option>Consultório</option>
            <option>Internados</option>
            <option>Banco de sangue</option>
            <option>Estatistica</option>
            <option>Laboratorio</option>
            <option>Resultados</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-folder"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Endereço" name="morada" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-home"></span>
            </div>
          </div>
        </div>
        





</body>
</html>