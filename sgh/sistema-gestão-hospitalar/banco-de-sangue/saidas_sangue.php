<?php 
include '../conexao.php';
if(isset($_POST['enviar'])){
  $tipo=$_POST['TipoSangue'];
  $quanti=$_POST['Quantidade'];
  $consulta= mysql_query("SELECT * FROM banco_sangue WHERE tipo='$tipo'");
  while($result = mysql_fetch_assoc($consulta)){
    $total = $result['quantidade'] - $quanti; }
  mysql_query("UPDATE banco_sangue SET quantidade='$total' WHERE tipo='$tipo'", $connect);
//Header('location: index.php'); 
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

    <title>Consultorio</title>

  </head>

  <body>




    <div class="container">
     
      

      <form class="form-signin" method="POST">     
        <label for="inputPassword" class="sr-only">Tipo Sanguineo</label>
        Tipo sanguineo<select id="inputPassword" class="form-control" placeholder="Tipo Sanguineo" name="TipoSangue" required>
                <option></option>
                <option>A+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>A-</option>
                <option>Rh+</option>
        </select>
        <label for="inputNumber" class="sr-only">Quantidade</label>
        <input type="number" id="inputNumber" class="form-control" placeholder="Quantidade de sangue em Litros" name="Quantidade" required autofocus>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="enviar">Entrar!</button>

      </form>
     
                          

    </div> <!-- /container -->

  </body>
</html>
