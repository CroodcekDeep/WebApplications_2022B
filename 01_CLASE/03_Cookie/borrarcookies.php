<?php
    if(isset($_GET)){
        // Eliminar cookies
        if($_GET['borrar'] == 1){
            setcookie("nombre", "");
            setcookie("clave", "");
            setcookie("sexo", "");
            setcookie("guardarPreferencias", "");
        }
    }
    header("Location: index.php");
?>