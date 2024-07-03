<?php 
include '../conexao.php';
if(isset($_POST['enviar'])){
    $visitante=$_POST['visitante'];
    $visitado=$_POST['visitado'];
    $data=date("Y/m/d");
    $time=date(" H:i:s");
    $motivo=$_POST['motivo'];
    mysql_query("INSERT INTO visitas (nome, visitado, hora, data, motivo) VALUES ('$visitante','$visitado','$time','$data','$motivo')",$connect);
Header('location: visitas.php'); 
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

 
      <label for="inputDate" class="sr-only">Nome</label>
        <input type="text" id="inputText" class="form-control" placeholder="Nome do visitante" name="visitante" required>
    <label for="inputDate" class="sr-only">Nome</label>
        <input type="text" id="inputText" class="form-control" placeholder="Nome do visitado" name="visitado" required>        
    <label for="inputDate" class="sr-only">Motivo</label>
        <input type="text" id="inputText" class="form-control" placeholder="Motivo da visita" name="motivo" required>
    <div class="checkbox">


   
     
                          
      <footer >
      </footer>

    </div>

  </body>
</html>
