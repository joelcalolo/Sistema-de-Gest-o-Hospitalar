<?php
session_start();
include 'conexao.php';
$senha=$_POST['senha'];
$local=$_POST['local'];
$funcao="123";  
   
    $vericar=mysql_query("SELECT * FROM user WHERE funcao='$local' AND senha='$senha' LIMIT 1");
    $confirmar= mysql_fetch_assoc($vericar);
    
    if(empty($confirmar)){
        $_SESSION['loginErro']= "Usuario ou senha invalida";
        header("location: index.php");
    }
    elseif ($local=="Estatistica"){
     	header("location: graficos");
     }elseif ($local=="Laboratorio") {
     	header("location: Laboratorio");
     }elseif ($local=="Atendimento"){
         header("location: rece");
     }elseif ($local=="Consultório"){
        header("location: consultorio");
    }elseif ($local=="Internados"){
        header("location: internacao");
    }elseif ($local=="Banco de sangue"){
        header("location: banco-de-sangue");
    }
        
   
?>
