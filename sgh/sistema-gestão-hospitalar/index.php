
<?php 

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SGH | Login </title>
  <link rel="icon" href="dist/img/SGH_icon.png">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/SGH_icon.png" alt="AdminLTELogo" height="50" width="50">
    <h3><b>Login</b></h3>
  </div>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <img src="dist/img/SGH_icon.png" alt="Sistema de Gestão Hospitalar" height="60" width="60">
    </div>
    <div class="card-body">
      <p class="login-box-msg">Preenchi os campos para entrar</p>
      <p class="login-box-msg"><b><?php 
          if(isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);}?></b></p>
      <form action="validaL.php" method="post">
        <div class="input-group mb-3">
          <Select name="local" class="form-control" required>
            <option required></option>
            <option>Atendimento</option>
            <option>Consultório</option>
            <option>Internados</option>
            <option>Banco de sangue</option>
            <option>Estatistica</option>
            <option>Laboratorio</option>
          </Select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-home"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Palavara-passe" name="senha" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="entrar">Entrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
