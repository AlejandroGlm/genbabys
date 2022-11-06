<?php
    include 'cache.php';
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location:bienvenida.html");
?>