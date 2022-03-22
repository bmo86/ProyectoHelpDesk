<?php
    require_once("../../config/conection.php");
    session_destroy();
    header("Location:".conect::ruta()."index.php");
    exit(); 
?>