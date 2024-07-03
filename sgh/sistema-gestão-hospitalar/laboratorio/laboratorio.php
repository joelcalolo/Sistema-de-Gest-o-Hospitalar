<?php 
include '../conexao.php';
if(isset($_POST['pronto'])){
   $id=$_GET['id'];
   $doenca=$_POST['doenca'];
   $selecao= mysql_query("SELECT * FROM paciente WHERE ordem= $id", $connect) or die(mysql_error());
   $select=  mysql_fetch_assoc($selecao);
   $nomme=$select['nome'];
   $datta=$select['data'];
   $gennero=$select['genero'];
   $descrisao=$select['descrisao'];
   mysql_query("INSERT INTO doente(nome,date, genero,doenca, descricao) VALUES ('$nomme','$datta','$gennero','$doenca','$descrisao')", $connect);
   mysql_query("INSERT INTO espera(nome,date, genero,doenca, descricao) VALUES ('$nomme','$datta','$gennero','$doenca','$descrisao')", $connect);
   mysql_query("DELETE FROM paciente WHERE ordem= $id", $connect);
 
   
   header('location: index.php');
   
   }
   
?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title>SGH</title>

	<link rel="stylesheet" type="text/css" href="js/Boostrap.min.css">
	<link href="css/app.css" rel="stylesheet">
	<script src="js/chart.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/holder.min.js"></script>
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="js/ie-emulation-modes-warning.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<script src="js/app.min.js"></script>

</head>

<body>
	<div class="wrapper">
		<div class="d-flex">


			<div class="main">
			<nav class="navbar navbar-expand navbar-light bg-white">
			<a class="sidebar-toggle d-flex mr-2">
            <i class="hamburger align-self-center"></i>
        	</a></nav>

				<main class="content">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Lista de pacientes</h1>

						<div class="row">
							<div class="col-6 col-lg-12">
								<div class="card flex-fill w-100">
									<div class="card-header">
										 
									</div>
									<div class="card-body">
										 <form class="form-signin" method="POST">
        <select id="inputPassword" class="form-control" placeholder="Data" name="doenca" required>
                <option>Paludismo</option>
                <option>Anemia</option>
                <option>Diabete</option>
                <option>Tuberculose</option>
                <option>Febre-Tifoíde</option>
                <option>HIV/Sida</option>
        </select>
    
        
        <div class="checkbox">
         <!-- <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>-->
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="pronto">Enter!</button>

      </form>

    						 	 </div>
								</div>
								</div>
								</div>
								</div>

				</main>

				<footer class="footer">
					<div class="container-fluid">
						<div class="row text-muted">
							<div class="col-6 text-right">
								<p class="mb-0">
									&copy; 2019 - <a href="index.html" class="text-muted">S.E.H</a>
								</p>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>


</body>

</html>