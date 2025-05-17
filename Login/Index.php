<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JustiSoft  | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Public/Templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../Public/Templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Public/Templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!--Libreria de SweetAlert2-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <?php
    session_start();
      if(isset($_SESSION['Mensaje'])){
      $respuesta = $_SESSION['Mensaje']; ?>
      <script>
       Swal.fire({
       position: "top-end",
       icon: "error",
       title: '<?php echo $respuesta;?>',
       showConfirmButton: false,
       timer: 5000
       })
      </script>

  <?php
  }
  ?>

  <center>
  <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-bufete-abogados_114360-8869.jpg?ga=GA1.1.273294074.1747420627&semt=ais_hybrid&w=740" 
  alt="" width="250px">
  </center>
  <br>
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../Public/Templates/AdminLTE-3.2.0/index2.html" class="h1"><b>JustiSoft</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login</p>

      <form action="../App/controllers/Login/Ingreso.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="Email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="Password_US" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../Public/Templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Public/Templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../Public/Templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>