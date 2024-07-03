<?php 
include("conexao.php");
include("calculos.php");
include("calculos2.php");
include("calculos3.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<link rel="icon" href="../dist/img/SGH_icon.png">
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
			<nav class="sidebar">
				<div class="sidebar-content">
					<a class="sidebar-brand" href="index.php">
            <i class="align-middle" data-feather="box"></i>
            <span class="align-middle">Menu</span>
          </a>

						<ul class="sidebar-nav">
						<li class="sidebar-item">
							<a href="frequencia.php" class="sidebar-link btn btn-lg btn-primary active">
                		<i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Doenças mais frequentes</span>
              			</a></li>
						<li class="sidebar-item">
						<a href="mortalidade.php"  class="sidebar-link btn btn-lg btn-primary">
                		<i class="align-middle" data-feather="monitor"></i> <span class="align-middle">Taxa de mortalidade</span>
            			 </a></li>
						<li class="sidebar-item">
						<a href="histogram.php" class="sidebar-link btn btn-lg btn-primary">
                		<i class="align-middle" data-feather="monitor"></i> <span class="align-middle">Gráfico de crescimento</span>
            			 </a></li>
			</div>
			</nav>

			<div class="main">
			<nav class="navbar navbar-expand navbar-light bg-white">
			<a class="sidebar-toggle d-flex mr-2">
            <i class="hamburger align-self-center"></i>
        	</a></nav>

				<main class="content">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Taxa de frequeêcia</h1>

						<div class="row">
							<div class="col-6 col-lg-12">
								<div class="card flex-fill w-100">
									<div class="card-header">
										<h5 class="card-title">Geral</h5>
									</div>
									<div class="card-body">
										<div class="chart">
											<canvas id="chartjs-geral"></canvas>
										</div>
									</div>
								</div>
									<script>
									document.addEventListener("DOMContentLoaded", function(event) {
										// Bar chart
										new Chart(document.getElementById("chartjs-geral"), {
											type: 'bar',
											data: {
												labels: ["Paludismo", "Diabete", "Febre-tifoide", "Tuberculose", "HIV/Sida", "Anemia"],
												datasets: [{
													label: "Este ano",
													backgroundColor: "#ff9900",
													borderColor: "#E8EAED",
													hoverBackgroundColor: "#E8EAED",
													hoverBorderColor: "#E8EAED",
													data: <?php echo"[$contP, $contM,$contF,$contT,$contS,$contH]"; ?>
												}]
											},
											options: {
												maintainAspectRatio: false,
												cutoutPercentage: 65,
												legend: {
													display: false
												}
											}
										});
									});
								</script>
								</div>

							<div class="col-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Masculino</h3>
									</div>
									<div class="card-body">
										<div class="chart chart-sm">
											<canvas id="chartjs-masculino"></canvas>
										</div>
									</div>
								</div>

								<script>
									document.addEventListener("DOMContentLoaded", function(event) {
										// Bar chart
										new Chart(document.getElementById("chartjs-masculino"), {
											type: 'bar',
											data: {
												labels: ["Paludismo", "Diabete", "Febre-tifoide", "Tuberculose", "HIV/Sida", "Anemia"],
												datasets: [{
													label: "Esre ano",
													backgroundColor: "#0cc2aa",
													borderColor: "#E8EAED",
													hoverBackgroundColor: "#E8EAED",
													hoverBorderColor: "#E8EAED",
													data: <?php echo"[$contPM, $contMM,$contFM,$contTM,$contSM,$contHM]"; ?>
												}]
											},
											options: {
												maintainAspectRatio: false,
												cutoutPercentage: 65,
												legend: {
													display: false
												}
											}
										});
									});
								</script>
							</div>

							<div class="col-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Femenino</h5>
									</div>
									<div class="card-body">
										<div class="chart chart-sm">
											<canvas id="chartjs-femenino"></canvas>
										</div>
									</div>
								</div>

								<script>
									document.addEventListener("DOMContentLoaded", function(event) {
										// Bar chart
										new Chart(document.getElementById("chartjs-femenino"), {
											type: 'bar',
											data: {
												labels: ["Paludismo", "Diabete", "Febre-tifoide", "Tuberculose", "HIV/Sida", "Anemia"],
												datasets: [{
													label: "Este ano",
													backgroundColor: "#cccc00",
													borderColor: "#0cc2aa",
													hoverBackgroundColor: "#0cc2aa",
													hoverBorderColor: "#0cc2aa",
													data: <?php echo"[$contPF, $contMF,$contFF,$contTF,$contSF,$contHF]"; ?>
												}]
											},
											options: {
												maintainAspectRatio: false,
												cutoutPercentage: 65,
												legend: {
													display: false
												}
											}
										});
									});
								</script>
							</div>

				</main>

				<footer class="footer">
					<div class="container-fluid">
						<div class="row text-muted">
							<div class="col-6 text-left">
								<ul class="list-inline">
									<li class="list-inline-item">
										<a href="../index.php"class="btn-sm btn-info stretched link" href="#">Sair</a>
									</li>
								</ul>
							</div>
							<div class="col-6 text-right">
								<p class="mb-0">
									&copy; 2021 - <a href="#" class="text-muted">S.G.H</a>
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