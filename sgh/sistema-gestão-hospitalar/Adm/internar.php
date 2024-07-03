<?php 
include '../conexao.php';
if(isset($_POST['enviar'])){
    $nome=$_POST['nome'];
    $data=$_POST['data'];
    $genero=$_POST['genero'];
    $quarto=$_POST['quarto'];
    $cama=$_POST['cama'];
    $patologia=$_POST['patologia'];
    $descrisao=$_POST['descrisao'];
    mysql_query("INSERT INTO internados (nome, data_nasci, genero ,quarto ,cama , doenca, descrisao) VALUES ('$nome','$data','$genero','$quarto','$cama','$patologia','$descrisao')",$connect);
Header('location: internar.php'); 
}
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Consultorio</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/boostrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>




    <div class="container">
     
      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      

      <form class="form-signin" method="POST">
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
            <label for="inputTipoSangue" class="sr-only">Quarto</label>
        Quarto Nº<select id="inputTipoSangue" class="form-control" placeholder="Quarto" name="quarto" required>
                <option></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
        </select>
            <label for="inputTipoSangue" class="sr-only">Cama</label>
        Cama Nº<select id="inputTipoSangue" class="form-control" placeholder="Cama" name="cama" required>
                <option></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
        </select>
        <label for="inputNumber" class="sr-only">Patologia</label>
          <input type="text" id="inputText" class="form-control" placeholder="Patologia" name="patologia" required autofocus>
        <label for="inputNumber" class="sr-only">Desenvolvimento</label>
          <input type="text" id="inputText" class="form-control" placeholder="Descrição" name="descricao" required autofocus>

        <div class="checkbox">
         <!-- <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>-->
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="enviar">Entrar!</button>

          <?php 
/*
             $data=$_POST['data'];
            list($d, $m, $a) = explode("/",  $data);
            @$hoje = mktime(0,0,0, date('$m, $d, $a'));
            @$nascimento = mktime(0,0,0, $m, $d, $a);
            $idade = floor(((((2018/11/22 - $data)/ 60)/ 60)/ 24)/ 265.24);
            echo $idade;
           */?>
      </form>
     
                            
    

      <!-- Site footer -->
      <footer >
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
