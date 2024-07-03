<?php include 'conexao.php';

$contTot_kill=0;


while ($contagem= mysql_fetch_assoc($malogrados)) {
    if(isset($contagem['ordem'])){
  $contTot_kill++;
  }}
  ?>