<?php
session_start();
date_default_timezone_set('America/Bogota');
if (!isset($_SESSION['Usuario']) || ($_SESSION['Rol'] !== 'Thor')) {
    header("Location: https://antiagingmarketsas.com");
    exit();
}
$nomb = $_SESSION['Nombre'];
$apel = $_SESSION['Apellido'];  // Obtener el nombre de usuario de la sesión
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="thor_style.css">
    <title>Su majestad</title>
</head>
<body>
    <header Class="box">
        <div class="box_1">
            <h4 style="margin-left:20px"><?php echo $nomb ?> </h4>
        </div> 
        <div class="Thor_2"></div> 
        <div Class="box_1">
        </div>
        <div class="box_3">
            <div class="box_1">Administrador</div>
            <div class="box_1">
                <div class="volume-bar" id="volumeBar" onclick="moveCircle(event)">
                    <div class="circle" id="circle"></div>
                </div>
                <script src="Test/script.js"></script>  
            </div>
            <div class="box_1">Usuario</div> 
        </div>
    </header> 

    <nav>
        <div class="box_2">            
            <div class="box_Thor"> 
                <div class="Thor"></div>
            </div>
        </div>

    </nav>

    <footer class="footer">
    <div class="box_4"> @ Modo Thor by Stuwartd

    </div>

    </footer>


</body>
</html>
