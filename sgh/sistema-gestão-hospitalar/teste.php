<?php 
include("conexao.php");



$insert= mysql_query("SELECT * FROM internados");



$internados= mysql_query("SELECT * FROM internados");
$internadosId= mysql_query("SELECT * FROM internados WHERE quarto = 10 AND cama = 27");
$n = mysql_num_rows($internadosId);

if($n >= 1):
echo "errrooo";
else:
mysql_query("INSERT INTO internados (nome, data_nasci, genero ,quarto ,cama , doenca, descrisao, entrada) VALUES
 ('JOAO','2334/23/23','MAS','5','5','PQL','SDWDW','2345/23/23 42:23:23')",$connect);
endif;


while ($teste=mysql_fetch_assoc($internados)){ 
  echo '<br>'.$teste['nome'] .'<---------->'.$teste['quarto'];
}
echo '<br>---------';
while ($teste=mysql_fetch_assoc($internadosId)){ 
  echo '<br>'.$teste['nome'] .'<---------->'.$teste['quarto'];
}
/*foreach($teste=mysql_fetch_assoc($internados)){ 
  echo '<br>'.$teste['nome'];
}*/


  
  
    
?>