<?php
//session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Bogota');

include 'login.php';

$conexion = obtConect();

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if (isset($_POST["usuario"]) && isset($_POST["clave"])) {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
}

// Consulta preparada para evitar inyección SQL
$sql = "SELECT * FROM Usuarios WHERE Usuario=? AND Clave=?";
$srt = $conexion->prepare($sql);
$srt->bind_param("ss", $usuario, $clave);
$srt->execute();
$result = $srt->get_result();


// Verificar el resultado de la consulta
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['Usuario'] = $row["Usuario"];
    $_SESSION['Rol'] = $row["Rol"];
    $_SESSION['Nombre'] = $row["Nombre_1"];
    $_SESSION['Apellido'] = $row["Apellido_1"];

    // Redireccionar según el rol del usuario
    if ($row["Rol"] == "Administrador") {
        header("Location: Administrativo.php");
        exit();

    } elseif ($row["Rol"] == "Usuario") {
        header("Location: Usuario.php");
        exit();

    }elseif ($row["Rol"] == "Thor") {
        header("Location: thor.php");
        exit();

    }else {
    // Redireccionar a la página de error si las credenciales son incorrectas
        header("Location: error.php");
        exit();
    }
}

// Cerrar la conexión
$srt->close();
$conexion->close();
?>
