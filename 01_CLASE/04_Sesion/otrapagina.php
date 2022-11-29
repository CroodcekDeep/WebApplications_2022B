<?php
    session_start();
    if(!isset($_SESSION['nombre']) && !isset($_SESSION['clave'])){
        header("Location: index.php");
    }
?>

<html>
    <head></head>
    <body>
        <h1>Otra Pagina</h1>
        <h1>Bienvenido: <?php echo $_SESSION['nombre']?></h1>
        <hr>
        <a href="mipanel.php">Regresar al panel principal</a>
        <br>
        <a href="cerrarsesion.php">Cerrar Sesion</a>
    </body>
</html>