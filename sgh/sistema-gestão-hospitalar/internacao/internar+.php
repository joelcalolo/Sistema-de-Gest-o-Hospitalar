<?php 
include '../conexao.php';
if(isset($_POST['salvar'])){
    $nome=$_POST['nome'];
    $data=$_POST['data'];
    $genero=$_POST['genero'];
    $quarto=$_POST['quarto'];
    $cama=$_POST['cama'];
    $patologia=$_POST['patologia'];
    $descrisao=$_POST['descricao'];
    $inter_D= date("d/m/y H:i:s");

    $internadosId= mysql_query("SELECT * FROM internados WHERE quarto = $quarto AND cama = $cama");
    $n = mysql_num_rows($internadosId);

if($n >= 1):
  Header('location: index.php?var=12');
else:
    mysql_query("INSERT INTO internados (nome, data_nasci, genero ,quarto ,cama , doenca, descrisao, entrada) VALUES ('$nome','$data','$genero','$quarto','$cama','$patologia','$descrisao','$inter_D')",$connect);
    Header('location: index.php'); 
  endif;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



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





          

    
</body>
</html>