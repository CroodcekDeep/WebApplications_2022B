<?php
    session_start();
    if(isset($_POST['nombre']) && isset($_POST['clave'])){
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['clave'] = $_POST['clave'];
    }
    if(!isset($_SESSION['nombre']) && !isset($_SESSION['clave'])){
        header("Location: index.php");
    }
?>

<html>
    <head></head>

    <body>
        <h1>PANEL PRINCIPAL</h1>
        <h1>Bienvenido: <?php echo $_SESSION['nombre']?></h1>
        <hr>
        <a href="otrapagina.php">Ir a otra pagina de la zona vip</a>
        <br>
        <a href="cerrarsesion.php">Cerrar Sesion</a>
    </body>
</html>