
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
              <a href="frequencia.php" class="sidebar-link btn btn-lg btn-primary">
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
            <li class="sidebar-item">
            <a href="estatisticas.php" class="sidebar-link btn btn-lg btn-primary active">
                    <i class="align-middle" data-feather="monitor"></i> <span class="align-middle">estatísticas</span>
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

						<h1 class="h3 mb-3">Gráficos</h1>

						<div class="row">
							<div class="col-6 col-lg-12">
								<div class="card flex-fill w-100">
									<div class="card-header">
										<h5 class="card-title">Geral</h5>
									</div>
									<div>
										<div class="table-dark">
											<table class="table table-striped table-dark">
 											<thead>
   												<tr>
    											<th scope="col">#</th>
     											<th scope="col">Primeiro</th>
      <th scope="col">Último</th>
      <th scope="col">Nickname</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
										</div>
									</div>
								</div>
										

								</div>

							<div class="col-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Masculino</h3>
									</div>
									<div>
										<div class="table-dark">
									<table class="table table-striped table-dark">
 									<thead>
   					<tr>
					<th scope="col">#</th>
     				<th scope="col">Primeiro</th>
      <th scope="col">Último</th>
      <th scope="col">Nickname</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
										</div>
									</div>
								</div>

								
								</div>

							<div class="col-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Femenino</h5>
									</div>
									<div>
										<div class="table-dark">
											<table class="table table-striped table-dark">
 											<thead>
   												<tr>
    											<th scope="col">#</th>
     											<th scope="col">Primeiro</th>
      <th scope="col">Último</th>
      <th scope="col">Nickname</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
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
                    <a href="../index.php"class="text-muted" href="#">Sair</a>
                  </li>
                </ul>
              </div>
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

	<script src="js/app.js"></script>

	<script src="js/charts.js"></script>
</body>

</html>