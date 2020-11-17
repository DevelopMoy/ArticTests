<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inicio-ArticDevco</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/stylesExam.css" type="text/css">
    <script src="https://kit.fontawesome.com/66b3831846.js" crossorigin="anonymous"></script>
</head>
<body>

<nav id="nav-exam">
    <img id=logoNav src="img/Copia de logoSinIceberg.png" alt="logo">
    <h1>Resultados</h1>
    <form action="../index.php">
        <button type="submit" id="botonEnviar" class="btn-lg btn-outline-danger">Home</button>
    </form>
</nav>

<div id="contenedorResultados">
    <?php
        if ($_SESSION["estadoExamen"]=="aprobado"){
            echo "<img src='img/aprobado.png' alt='reprobadoImg'>";
            echo "<p>Felicidades! Has aprobado la certificación</p>";
            echo "<p>Calificación: ".$_SESSION["califJava"]."</p>";
            echo "<form action='crearPdf.php' target='_blank' method='post'><input type='hidden' name ='nombrCert' value='".$_SESSION["nombre"]."'><input type='submit' value='Descargar Certificado'></form>";
        }else{
            echo "<img src='img/reprobado.png' alt='reprobadoImg'>";
            echo "<p>Lo sentimos, no has aprobado</p>";
            echo "<p>Calificación: ".$_SESSION["califJava"]."</p>";
        }

    ?>
</div>

</body>
</html>


