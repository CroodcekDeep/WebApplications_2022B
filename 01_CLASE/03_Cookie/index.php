<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
</head>
<body>
    <h1>Formulario Login:</h1>
    <form method="POST" action="mipanel.php">
        <fieldset>
            Usuario*: <br>
            <input type="text" name="nombre" value=""/><br>
            Password*:<br>
            <input type="text" name="clave" value=""/><br>
            Sexo*:<br>
            <input type="radio" name="hm" value="h"/> Hombre
            <input type="radio" name="hm" value="m"/> Mujer
            <br>
            <br>
            <input type="checkbox" name="chkpreferencias"/> Recordar mis datos
            <br>
            <br>
            <input type="submit" name="enviar" value="Enviar"/>
        </fieldset>
    </form>
</body>
</html>