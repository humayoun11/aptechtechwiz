<?php
    if(!isset($_SESSION["user_name"])){
        session_unset();
        session_destroy();
        header('location:login.php');
        exit();
    }
?>