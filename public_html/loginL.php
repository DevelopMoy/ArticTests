<?php
    session_start();
    if ($_POST["loginType"]=="inicSec"){
        header("Location: loginView.php");
    }else{
        $_SESSION["user"]="";
        $_SESSION["nombre"]="";
        $_SESSION["email"]="";
        header("Location: ../index.php");
    }