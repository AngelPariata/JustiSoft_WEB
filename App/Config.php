
<?php
// Configuración del servidor para Conectar BD
// Variables Globales

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'justisoft_db');

$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR;
try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //echo "La conexión a la base de datos se realizó con éxito";
} catch (PDOException $e) 
{
    echo "Error de conexión a la base de datos. Verifique sus parámetros de conexión: " . $e->getMessage();
}

$URL = "http://localhost/JustiSoft_WEB/";