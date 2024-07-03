<?php 
include("../conexao.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">
  <link rel="icon" href="../dist/img/SGH_icon.png">

	<title>SGH | Laboratorio</title>

	<link rel="stylesheet" type="text/css" href="../js/Boostrap.min.css">
	<link href="../css/app.css" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

</head>

<body>
	<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/SGH_icon.png" alt="AdminLTELogo" height="50" width="50">
    <h3><b>Laboratorio</b></h3>
  </div>

		<div class="d-flex">


			<div class="main">
			<nav class="navbar navbar-expand navbar-light bg-white">
			<a class="sidebar-toggle d-flex mr-2" href="../index.php">
            <i class="nav-icon fas fa-home"></i>
        	</a></nav>

				<main class="content">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Lista de pacientes a analisar</h1>

						<div class="row">
							<div class="col-6 col-lg-12">
								<div class="card flex-fill w-100">
									<div class="card-header">
										 <table id="datatables-dashboard" class="table table-striped my-0">
										<tr><td><b>ID</b></td><td><b>Nome</b></td><td><b>Resultado</b></td></tr>
									</div>
									<div class="card-body">

      </div>
	  <li class="sidebar-item">
            <a class="sidebar-link btn btn-lg btn-primary" href="#analisar_externo" data-toggle="modal" role="button">Externo</a>
													
     <?php
      while ($resultado=  mysql_fetch_array($consulta)){
    
    echo "<tr><td>$resultado[ordem]</td><td>$resultado[nome]</td><td><a href='#ver-dados' class='btn-sm btn-primary' data-toggle='modal' ><i class='fas fa-folder'></i> Ver dados</a><a href='#analisar' class='btn-sm btn-info' data-toggle='modal' >Analisar</a></td></tr>";  
   
    
      }?></table>

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
										<a href="index.php"class="btn-sm btn-info stretched link" href="#">Sair</a>
									</li>
								</ul>
							</div>
							<div class="col-6 text-right">
								<p class="mb-0">
									&copy; 2021 - <a href="index.html" class="text-muted">S.E.H</a>
								</p>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>



	<div class="modal fade" id="ver-dados">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Dados do paciente</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>PRONTO A EDITAR&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
	<!-- /.modal -->
	<div class="modal fade" id="analisar">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Analise</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
		  <?php include("laboratorio.php"); ?>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
	<!-- /.modal -->
	
	<div class="modal fade" id="analisar_externo">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Analise</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php include("laboratorio_ext.php"); ?>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

	
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function() {
  var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });

  $('.swalDefaultSuccess').click(function() {
    Toast.fire({
      icon: 'success',
      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.swalDefaultInfo').click(function() {
    Toast.fire({
      icon: 'info',
      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.swalDefaultError').click(function() {
    Toast.fire({
      icon: 'error',
      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.swalDefaultWarning').click(function() {
    Toast.fire({
      icon: 'warning',
      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.swalDefaultQuestion').click(function() {
    Toast.fire({
      icon: 'question',
      title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });

  $('.toastrDefaultSuccess').click(function() {
    toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });
  $('.toastrDefaultInfo').click(function() {
    toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });
  $('.toastrDefaultError').click(function() {
    toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });
  $('.toastrDefaultWarning').click(function() {
    toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  });

  $('.toastsDefaultDefault').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultTopLeft').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      position: 'topLeft',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultBottomRight').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      position: 'bottomRight',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultBottomLeft').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      position: 'bottomLeft',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultAutohide').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      autohide: true,
      delay: 750,
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultNotFixed').click(function() {
    $(document).Toasts('create', {
      title: 'Toast Title',
      fixed: false,
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultFull').click(function() {
    $(document).Toasts('create', {
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      icon: 'fas fa-envelope fa-lg',
    })
  });
  $('.toastsDefaultFullImage').click(function() {
    $(document).Toasts('create', {
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      image: '../../dist/img/user3-128x128.jpg',
      imageAlt: 'User Picture',
    })
  });
  $('.toastsDefaultSuccess').click(function() {
    $(document).Toasts('create', {
      class: 'bg-success',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultInfo').click(function() {
    $(document).Toasts('create', {
      class: 'bg-info',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultWarning').click(function() {
    $(document).Toasts('create', {
      class: 'bg-warning',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultDanger').click(function() {
    $(document).Toasts('create', {
      class: 'bg-danger',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
  $('.toastsDefaultMaroon').click(function() {
    $(document).Toasts('create', {
      class: 'bg-maroon',
      title: 'Toast Title',
      subtitle: 'Subtitle',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
});
</script>



</body>

</html>