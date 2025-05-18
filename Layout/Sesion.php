<?php
session_start();

if(isset($_SESSION['Sesion_Email']))
{
  //echo"Si existe la Sesion de ".$_SESSION['Sesion_Email'];
  $Email_Sesion = $_SESSION['Sesion_Email'];

  //Consulta SQL para traer el nombre del Usuario Logeado
  $sql = "SELECT * FROM usuarios WHERE Email_Usuario ='$Email_Sesion'";
  $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario) {
    $nombres_sesion = $usuario['Nombre_Usuario'];
  }

}else{
  header('Location: '.$URL.'Login');
}
?>