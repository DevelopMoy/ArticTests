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
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="https://kit.fontawesome.com/66b3831846.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
    require "nav.php";
?>

<section id="seccion1-1" >
    <div id="header-cert">
        <h1>Conoce nuestras certificaciones</h1>
        <p>Resuelve todas tus dudas y revisa todos los detalles acerca de la certificacion de tu interés.
        </p>
    </div>

</section>
<section id="seccion2-1">
    <div class="logo-c">
        <img src="img/logo-java.jpeg" class="card-img-top imgHovJ" alt="...">
    </div>
    <div class="info-c">
        <h3>Certificado en JAVA SE</h3>
        <h6>Ventajas</h6>
        <ul>
            <li>Aumenta tu porfatolio</li>
            <li>Podras impartir cursos</li>
            <li>Sube tu nivel como desarrollador</li>
        </ul>
        <h6>Puntuacion mínima</h6>
        <p>La Puntuacion minima para aprobar esta certificaciones del 70%</p>
        <h6>Total de Preguntas</h6>
        <p>14 Preguntas</p>
        <h6>Tiempo para terminar examen</h6>
        <p>30 min.</p>
        <h6>Costo</h6>
        <p>$15,000 MXM</p>
        <h6>Fechas</h6>
        <p>Dia 15 de cada mes</p>

            <?php
                if (isset($_SESSION["nombre"])&&!empty($_SESSION["nombre"])&&!is_null($_SESSION["nombre"])){
                    echo "<a href='examen.php'><button type='button' class='btn btn-outline-info'>Comenzar</button></a>";
                }else{
                    echo "<a class='btn btn-outline-info' href='loginView.php'>Inicia Sesion para comenzar</a>";
                }
            ?>
        <?php
        if (isset($_GET["varbl"])){
            echo "<p style='color: red; margin-top: 10px;' id='errorExamen'>El examen ya fue realizado, no se puede volver a presentar</p>";
        }
        ?>


    </div>
</section>
<section id="seccion3-1">
    <div class="logo-c">
        <img src="img/logo-bash.jpg" class="card-img-top imgHovJ" alt="...">
    </div>
    <div class="info-c">
        <h3>Certificado en Lenguaje BASH / Linux</h3>
        <h6>Ventajas</h6>
        <ul>
            <li>Demostrarás tus habilidades en BASH</li>
            <li>Podrás desarrollar tus habilidades en ambientes de servidor Linux</li>
            <li>Trabaja para grandes empresas que utilizan ambiente Linux</li>
        </ul>
        <h6>Puntuacion mínima</h6>
        <p>La Puntuacion minima para aprobar esta certificaciones del 90%</p>
        <h6>Total de Preguntas</h6>
        <p> 20 Preguntas</p>
        <h6>Tiempo para terminar examen</h6>
        <p>60 min.</p>
        <h6>Costo</h6>
        <p>$30,000 MXM</p>
        <h6>Fechas</h6>
        <p>Dia 30 de cada mes</p>
        <form action="" method="post">
            <?php
            if (isset($_SESSION["nombre"])&&!empty($_SESSION["nombre"])&&!is_null($_SESSION["nombre"])){
                echo "<button type='submit' class='btn btn-outline-info'>Comenzar</button>";
            }else{
                echo "<a class='btn btn-outline-info' href='loginView.php'>Inicia Sesion para comenzar</a>";
            }
            ?>
        </form>
    </div>
</section>
<section id="seccion4-1">
    <div class="logo-c">
        <img src="img/asm-logo.png" class="card-img-top imgHovJ" alt="...">
    </div>
    <div class="info-c">
        <h3>Certificado en Lenguaje ASM (Assembly)</h3>
        <h6>Ventajas</h6>
        <ul>
            <li>Certificate en el mejor lenguaje para trabajar a bajo nivel.</li>
            <li>Al terminar la certificación estarás autorizado para manipular los circuitos integrados mas populares de la industria</li>
            <li>Sube tu nivel como desarrollador</li>
        </ul>
        <h6>Puntuacion mínima</h6>
        <p>La Puntuacion minima para aprobar esta certificaciones del 95%</p>
        <h6>Total de Preguntas</h6>
        <p>35 Preguntas</p>
        <h6>Tiempo para terminar examen</h6>
        <p>90 min.</p>
        <h6>Costo</h6>
        <p>$45,000 MXM</p>
        <h6>Fechas</h6>
        <p>Esta certificacion se lleva alcabo por petición del cliente, tiempo de respuesta aproximado 10 días habiles despues de la solicitud</p>

        <form action="" method="post">
            <?php
            if (isset($_SESSION["nombre"])&&!empty($_SESSION["nombre"])&&!is_null($_SESSION["nombre"])){
                echo "<button type='submit' class='btn btn-outline-info'>Comenzar</button>";
            }else{
                echo "<a class='btn btn-outline-info' href='loginView.php'>Inicia Sesion para comenzar</a>";
            }
            ?>
        </form>

    </div>
</section>
<?php
require "footer.php";
?>

</body>
</html>