<?php
    session_start();
    
    if(isset($_POST['txt_nombre']) && isset($_POST['txt_clave'])){
        $nombre = isset($_POST["txt_nombre"])?$_POST["txt_nombre"]:"";
        $clave = isset($_POST["txt_clave"])?$_POST["txt_clave"]:"";
        $preferencias = (isset($_POST['chk_preferencias']))?$_POST['chk_preferencias']:"";

        if($nombre=="" && $clave==""){
            header("Location: index.php");
        }else{
                $_SESSION['nombre'] = $nombre;
                $_SESSION['clave'] = $clave;

                if($preferencias){
                    setcookie("nombre", $nombre, 0);
                    setcookie("clave", $clave, 0);
                    setcookie("preferencias", $preferencias, 0);
                }
                header("Location: panel.php");
        }
    }

    // Preferencia de Idioma
    if(isset($_COOKIE['idioma'])){
        $idioma = $_COOKIE['idioma'];
    }
    else{
        $idioma = "es";
    }
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PANEL PRINCIPAL</title>
    </head>

    <body>
        <p>Pantalla: 
            <b>Panel Principal</b>
        </p>
        <center>
            <h1>PANEL PRINCIPAL</h1>
            <h3>Bienvenido Usuario: 
                <?php echo $_SESSION['nombre']?>
            </h3>
            <hr>
            <a href="idioma.php?idioma=es">Español (ES)</a>
            |
            <a href="idioma.php?idioma=en">Ingles (EN)</a>
            <br>
            <a href="cerrarsesion.php">Cerrar Sesión</a>
            <hr>

            <?php
            if($idioma == "es"){
                print("<h2>Lista de Productos</h2>");
                $archivo = fopen("categorias_es.txt", "r");
            }elseif($idioma == "en"){
                print("<h2>Product List</h2>");
                $archivo = fopen("categorias_en.txt", "r");
            }

            while (!feof($archivo)) {
                $linea = fgets($archivo);
                echo nl2br($linea);
            }
            fclose($archivo);
            ?>
        </center>
    </body>
</html>