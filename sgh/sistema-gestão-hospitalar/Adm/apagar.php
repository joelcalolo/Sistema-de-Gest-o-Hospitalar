<?PHP
include("../conexao.php");

$ID=$_GET["id"];

mysql_query("DELETE From user WHERE id=$ID");
Header('location: index.php'); 

 ?>