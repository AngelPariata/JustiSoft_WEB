<?php
include('../../Config.php');

// Validación de entrada para evitar errores
$Email = $_POST['Email'] ?? null;
$Password_US = $_POST['Password_US'] ?? null;

// Verificar que los datos no sean nulos
if ($Email && $Password_US) {
    // Consulta SQL segura con prepared statements
    $sql = "SELECT * FROM usuarios WHERE `Email_Usuario` = :email AND `Clave` = :password";
    $query = $pdo->prepare($sql);
    $query->execute([
        ':email' => $Email,
        ':password' => $Password_US
    ]);

    // Obtener resultados
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($usuarios as $usuario) {
        $Email_Tabla = $usuario['Email_Usuario'];
        $nombres = $usuario['Nombre_Usuario'];
    }

    // Verificar si se encontraron usuarios
    if ($usuarios) {

        session_start();
        $_SESSION['Sesion_Email'] = $Email;

        header('Location: '.$URL.'/Index.php');

    } else {
        session_start();
        $_SESSION['Mensaje'] = "Usuario o Password Incorrectos ";
        header('Location: '.$URL.'/Login');
    }

} else {

}
?>


