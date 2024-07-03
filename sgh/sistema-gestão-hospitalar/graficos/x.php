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
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SGH | Administrador</title>

  <link href="css/app.css" rel="stylesheet">
	<script src="js/chart.min.js"></script>
	<script src="js/jquery.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/SGH_icon.png" alt="AdminLTELogo" height="150" width="150">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
        





      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../dist/img/SGH_icon.png" alt="SGH Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SGH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>






        <!-- Sidebar MENU --><!-- MENU --><!-- MENU --><!-- MENU --><!-- MENU --><!-- MENU --><!-- MENU --><!-- MENU --><!-- MENU -->



     
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
               <li class="nav-item">
                  <a href="../index.html" class="nav-link">
                      <i class="nav-icon fas fa-home"></i>
                      <p>Ínicio</p>
                  </a>
               </li>     
              <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Internação
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../internacao.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Internados</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../visitas.html" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>Visitas</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="index.html" class="nav-link active">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>Estatística</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../calendario.html" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p>
                    Calendario
                  </p>
                </a>
              </li>         
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>










  <!-- Lista dos usuarios do sistema -->
  <div class="content-wrapper">
    
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->





















  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="">Joel calolo | Ricardo Augusto</a>.</strong>
    Todos os direitos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Versão</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>



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


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->

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


</body>
</html>
