<?php
session_start();
function obtConect(){
    $servername = "localhost";
    $username = "Admin";
    $password = "Colombia";
    $dbname = "proyecto";
    $port = 3306;

    $conect = new mysqli($servername, $username, $password, $dbname, $port);

    if ($conect->connect_error) {
        die("Error de conexión: " . $conect->connect_error);
    }

    $conect->set_charset("utf8");

    return $conect;

}

?>
