<?php
    session_start();
    if ($_POST["loginType"]=="inicSec"){
        header("Location: /Examen_Parcial_2/public_html/loginView.php");
    }else{
        $_SESSION["user"]="";
        $_SESSION["nombre"]="";
        $_SESSION["email"]="";
        header("Location: /Examen_Parcial_2/index.php");
    }