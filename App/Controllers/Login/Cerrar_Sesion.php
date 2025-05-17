
<?php 

include ('../../Config.php');

session_start();

if(isset($_SESSION['Sesion_Email'])){
   session_destroy();
   header('Location: ' . $URL . '/');
   exit(); // Es recomendable agregar "exit();" después de header() para asegurarse de que la ejecución se detenga.
}

