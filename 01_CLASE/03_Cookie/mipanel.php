<?php
    var_dump($_POST);
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $sexo = $_POST['hm'];
    $guardarPreferencias = (isset($_POST['chkpreferencias']))?$_POST['chkpreferencias']:"";

    if($guardarPreferencias != ""){
        setcookie("nombre", $nombre, 0);
        setcookie("clave", $clave, 0);
        setcookie("sexo", $sexo, 0);
        setcookie("guardarPreferencias", $guardarPreferencias, 0);
    }
    else{
    }
?>

<html>
    <head>
    </head>

    <body>
        <h1>PANEL PRINCIPAL</h1>
        <h1>Bienvenido: <?php echo $_POST['nombre'] ?></h1>
        <hr>
        <a href="borrarcookies.php?borrar=1">Borrar Cookies y Regresar</a>
        <br>
        <a href="borrarcookies.php?borrar=0">Solo Regresar</a>
    </body>
</html>