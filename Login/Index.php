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
  <!-- /.alerta de usuario o contraseña invalida -->
  <?php
    session_start();
    if(isset($_SESSION['Mensaje'])){
    $respuesta = $_SESSION['Mensaje']; ?>
    <script>
    Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "<?php echo $respuesta; ?>",
    footer: '<a href="#">Desea recuperar su usuario o contraseña?</a>'
    });
    </script>

  <?php
  }
  ?>

  <div style="
    background-image: url('https://tuappbogado.es/wp-content/uploads/2017/07/el-abogado-online.jpg');
    background-size: cover;
    background-position: center;
    width: 100vw;
    height: 78vh;
    position: absolute;
    top: 0;
    left: 0;
    opacity: ;
    z-index: -1;">
</div>

  <br>
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <p class="h2">JustiSoft</p>
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
<!-- /.Contenedores inferiores -->
<div class="container text-center" style="position: relative; top: 70px;">
  <div class="row align-items-end">
    <div class="col" style="background-color: rgb(89, 120, 173); padding: 20px; transition: transform 0.3s, box-shadow 0.3s;"
         onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0px 4px 10px rgba(0,0,0,0.3)'"
         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">
      ORGANIZA
    </div>
    <div class="col" style="background-color: rgb(71, 106, 168); padding: 20px; transition: transform 0.3s, box-shadow 0.3s;"
         onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0px 4px 10px rgba(0,0,0,0.3)'"
         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">
      ADMINISTRA
    </div>
    <div class="col" style="background-color: rgb(51, 91, 160); padding: 20px; transition: transform 0.3s, box-shadow 0.3s;"
         onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0px 4px 10px rgba(0,0,0,0.3)'"
         onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">
      Y PROCESA LA JUSTICIA
    </div>
  </div>
</div>
<!-- jQuery -->
<script src="../Public/Templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Public/Templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../Public/Templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>