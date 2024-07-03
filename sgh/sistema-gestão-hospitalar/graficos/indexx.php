<?php 
include("conexao.php");
include("calculos.php");
include("calculos2.php");
include("calculos3.php");




   
while ($contagem= mysql_fetch_assoc($ver)) {
    if(isset($contagem['doenca'])){
  $contTot++;
  }}


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

	<link href="css/app.css" rel="stylesheet">
	<script src="js/chart.min.js"></script>
	<script src="js/jquery.min.js"></script>
		  <!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body>
	<div class="wrapper">
		<div class="d-flex">

			<div class="main">
			

				<main class="content">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Gráficos</h1>

						<div class="row">
							<div class="col-12 col-lg-6">
								<div class="card flex-fill w-100"><a href="frequencia.php">
									<div class="card card-header card-danger">
										<h5 class="card-title">Gráfico de frequência</h5>
									</div>
									<div class="card-body ">
										<div class="chart">
											<canvas id="graf-fre"></canvas>
										</div>
									</div>
								</a></div>
									<script>
									document.addEventListener("DOMContentLoaded", function(event) {
										// Doughnut chart
										new Chart(document.getElementById("graf-fre"), {
											type: 'bar',
											data: {
												labels: ["Paludismo", "Diabete", "Febre-tifoide", "Tuberculose", "HIV/Sida", "Anemia"],
												datasets: [{
													label: "Geral",
													backgroundColor: "#ff9900",
													borderColor: "#E8EAED",
													hoverBackgroundColor: "#E8EAED",
													hoverBorderColor: "#E8EAED",
													data: <?php echo"[$contP, $contM,$contF,$contT,$contS,$contH]"; ?>
												}, {
													label: "Himens",
													backgroundColor: "#0cc2aa",
													borderColor: "#E8EAED",
													hoverBackgroundColor: "#E8EAED",
													hoverBorderColor: "#E8EAED",
													data: <?php echo"[$contPM, $contMM,$contFM,$contTM,$contSM,$contHM]"; ?>
												}, {
													label: "Este ano",
													backgroundColor: "#cccc00",
													borderColor: "#0cc2aa",
													hoverBackgroundColor: "#0cc2aa",
													hoverBorderColor: "#0cc2aa",
													data: <?php echo"[$contPF, $contMF,$contFF,$contTF,$contSF,$contHF]"; ?>
												} ]											
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
								<div class="card"><a href="mortalidade.php">
									<div class="card-header">
										<h3 class="card-title">Gráfico de mortalidade</h3>
									</div>
									<div class="card-body">
										<div class="chart">
											<canvas id="graf-mor"></canvas>
										</div>
									</div>
								</a></div>

								<script>
									document.addEventListener("DOMContentLoaded", function(event) {
										// Bar chart
										new Chart(document.getElementById("graf-mor"), {
											type: 'bar',
											data: {
												labels: ["Paludismo", "Diabete", "Febre-tifoide", "Tuberculose", "HIV/Sida", "Anemia"],
												datasets: [{
													label: "Last year",
													backgroundColor: "#0cc2aa",
													borderColor: "#0cc2aa",
													hoverBackgroundColor: "#0cc2aa",
													hoverBorderColor: "#0cc2aa",
													data: <?php echo "[$die_P, $die_M, $die_F, $die_T, $die_S, $die_H],";?>
												}, {
													label: "Homens",
													backgroundColor: "#99ccff",
													borderColor: "#0cc2aa",
													hoverBackgroundColor: "#0cc2aa",
													hoverBorderColor: "#0cc2aa",
													data: <?php echo "[$die_PM, $die_MM, $die_FM, $die_TM, $die_SM, $die_HM],";?>
												}, {
													label: "Mulheres",
													backgroundColor: "darkkhaki",
													borderColor: "#0cc2aa",
													hoverBackgroundColor: "#0cc2aa",
													hoverBorderColor: "#0cc2aa",
													data: <?php echo "[$die_PF, $die_MF, $die_FF, $die_TF, $die_SF, $die_HF],";?>
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

							<div class="col-12 col-lg-12">
								<div class="card"><a href="histogram.php">
									<div class="card-header">
										<h5 class="card-title">variação</h5>
										<h6 class="card-subtitle text-muted"></h6>
									</div>
									<div class="card-body">
										<div class="chart chart-sm">
											<canvas id="histogram"></canvas>
										</div>
									</div>
								</a></div>

								<script>
									document.addEventListener("DOMContentLoaded", function(event) {
										// Doughnut chart
										new Chart(document.getElementById("histogram"), {
											type: 'line',
											data: {
												labels: ["2017", "2018", "2019",],
												datasets: [{
													label: "Paludismo",
													backgroundColor: "transparent",
													borderColor: "#0cc2aa",
													hoverBackgroundColor: "#0cc2aa",
													hoverBorderColor: "#0cc2aa",
													data: <?php echo "[12,32,$contP]"; ?>
												}, {
													label: "Diabete",
													backgroundColor: "transparent",
													borderColor: "#ffcc00",
													hoverBackgroundColor: "#E8EAED",
													hoverBorderColor: "#E8EAED",
													data: <?php echo "[21,43,$contP]"; ?>
												}, {
													label: "Febre-tifoide",
													backgroundColor: "transparent",
													borderColor: "#cccc00",
													hoverBackgroundColor: "#E8EAED",
													hoverBorderColor: "#E8EAED",
													data: <?php echo "[23,34,$contF]"; ?>
												}, {
													label: "HIV/Sida",
													backgroundColor: "transparent" ,
													borderColor: "#d23223",
													hoverBackgroundColor: "#00cc99",
													hoverBorderColor: "#E8EAED",
													data: <?php echo "[23,32,$contS]"; ?>
												}, {
													label: "Anemia",
													backgroundColor: "transparent",
													borderColor: "#009999",
													hoverBackgroundColor: "#E8EAED",
													hoverBorderColor: "#E8EAED",
													data: <?php echo "[23,34,$contH]"; ?>
												}, {
													label: "Tuberculose",
													backgroundColor: "transparent",
													borderColor: "#ff9933",
													hoverBackgroundColor: "#E8EAED",
													hoverBorderColor: "#E8EAED",
													data: <?php echo "[21,32,$contT]"; ?>
												},]
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

							<h1 class="h3 mb-3">Estatistica</h1>

							<div class="col-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Doenças mais frenquentes</h5>
										<h6 class="card-subtitle text-muted"></h6>
									</div>
									<div class="card-body">
										<div class="chart chart-sm">
											<table class="table table-striped table-dark">
      <p><center>Casos com mais frequencia no hospital</center></p>
      <tr>
        <td><b>Doença</b></td>
        <td><b>Doentes</b></td>
         <td><b>Taxa</b></td>
      </tr>
      <tr>
        <td>Paludismo</td>
        <td><?php echo "$contP"; ?></td>
        <td><?php echo $contP*100/$contTot,"%"; ?></td>
      </tr>
      <tr>
        <td>Diabete</td>
        <td><?php echo"$contM"; ?></td>
        <td><?php echo $contM*100/$contTot,"%"; ?></td>
      </tr>
      <tr>
        <td>Tuberculose</td>
        <td><?php echo"$contT"; ?></td>
        <td><?php echo $contT*100/$contTot,"%"; ?></td>
      </tr>
      <tr>
        <td>Anemia</td>
        <td><?php echo"$contH"; ?></td>
        <td><?php echo $contH*100/$contTot,"%"; ?></td>
      </tr>
      <tr>
        <td>HIV/Sida</td>
        <td><?php echo"$contS"; ?></td>
        <td><?php echo $contS*100/$contTot,"%"; ?></td>
      </tr>
      <tr>
        <td>Febre-Tifoíde</td>
        <td><?php echo"$contF"; ?></td>
        <td><?php echo $contF*100/$contTot,"%"; ?></td>
      </tr>
 </table>
										</div>
									</div>
								</div>

							</div>

<div class="col-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Doenças que mais matam</h5>
										<h6 class="card-subtitle text-muted"></h6>
									</div>
									<div class="card-body">
										<div class="chart chart-sm">
											<table class="table table-striped table-dark">
      <p><center>Doencas que mais matam</center></p>
      <tr>
        <td><b>Doença</b></td>
        <td><b>Vitimas</b></td>
        <td><b>Taxa</b></td>
      </tr>
      <tr>
        <td>Paludismo</td>
        <td><?php echo "$die_P"; ?></td>
        <td><?php echo $die_P*100/$contTot_kill,"%";?></td>
      </tr>
      <tr>
        <td>Malaria</td>
        <td><?php echo"$die_M" ?></td>
         <td><?php echo $die_M*100/$contTot_kill,"%";?></td>
      </tr>
      <tr>
        <td>Tuberculose</td>
        <td><?php echo"$die_T" ?></td>
         <td><?php echo $die_T*100/$contTot_kill,"%";?></td>
      </tr>
      <tr>
        <td>Hemoglobina</td>
        <td><?php echo"$die_H" ?></td>
         <td><?php echo $die_H*100/$contTot_kill,"%";?></td>
      </tr>
      <tr>
        <td>HIV/Sida</td>
        <td><?php echo"$die_S" ?></td>
         <td><?php echo $die_S*100/$contTot_kill,"%";?></td>
      </tr>
      <tr>
        <td>Febre-Tifoíde</td>
        <td><?php echo"$die_F" ?></td>
         <td><?php echo $die_F*100/$contTot_kill,"%";?></td>
      </tr>
</table>
										</div>
									</div>
								</div>

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
									&copy; 2019 - <a href="#" class="text-muted">S.E.H</a>
								</p>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>

	<script src="js/app.js"></script>

	<script src="js/charts.js"></script>

	<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
</body>

</html>