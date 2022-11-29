<?php
    session_start();
    setcookie("idioma", $_GET['idioma'], time()+60*60*24);
    header("Location: panel.php");
?>