<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php 
    echo ("Error al ingresar los datos por favor corregir.");


if (isset($_POST["usuario"]) && isset($_POST["contraseña"])) {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
}
echo ($clave);
    ?></h1>
</body>
</html>
