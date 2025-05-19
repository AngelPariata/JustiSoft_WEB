<?php
include('../../Config.php');

// Validación de entrada para evitar errores
$Email = $_POST['Email'] ?? null;
$Password_US = $_POST['Password_US'] ?? null;

// Verificar si los campos están vacíos
if (empty($Email) || empty($Password_US)) {
    session_start();
    $_SESSION['Mensaje'] = "Por favor, rellena todos los campos.";
    header('Location: '.$URL.'/Login');
    exit();
}

// Consulta SQL segura con prepared statements
$sql = "SELECT * FROM usuarios WHERE `Email_Usuario` = :email AND `Clave` = :password";
$query = $pdo->prepare($sql);
$query->execute([
    ':email' => $Email,
    ':password' => $Password_US
]);

// Obtener resultados
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

// Procesar resultados
if ($usuarios) {
    session_start();
    $_SESSION['Sesion_Email'] = $Email;
    header('Location: '.$URL.'/Index.php');
} else {
    session_start();
    $_SESSION['Mensaje'] = "Usuario o Password Incorrectos";
    header('Location: '.$URL.'/Login');
}
?>


