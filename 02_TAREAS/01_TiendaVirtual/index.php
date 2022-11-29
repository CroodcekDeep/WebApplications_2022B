<?php
    if(isset($_COOKIE['nombre']) && isset($_COOKIE['clave'])){
        $nombre = $_COOKIE['nombre'];
        $clave = $_COOKIE['clave'];
        $preferencias = $_COOKIE['preferencias'];
    }
    else{
        $nombre="";
        $clave="";
        $preferencias="";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Productos</title>
</head>
<body>
    <center>
        <h1>LOGIN</h1>
        <form method="POST" action="panel.php">
            <fieldset>
                Usuario*: <br>
                <input type="text" name="txt_nombre" value=<?php echo $nombre?>><br>
                Clave*: <br>
                <input type="password" name="txt_clave" value=<?php echo $clave?>><br>
                <input type="checkbox" name="chk_preferencias" <?php echo ($preferencias)?"checked":""?>> Recordarme
                <br>
                <br>
                <input type="submit" name="enviar" value="Enviar"/>
            </fieldset>
        </form>
    </center>
</body>
</html>