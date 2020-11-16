<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inicio-ArticDevco</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">

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
        <img src="img/logo-java.jpeg" class="card-img-top" alt="...">
    </div>
    <div class="info-c">
        <h3>Certificado en JAVA EE</h3>
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
        <form action="certifLogica.php" method="post">
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
<section id="seccion3-1">
    <div class="logo-c">
        <img src="img/logo-bash.jpg" class="card-img-top" alt="...">
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
        <img src="img/asm-logo.png" class="card-img-top" alt="...">
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
<footer>
    <img src="img/LogoPrincipal.png" alt="">
    <div id="verif">
        <h2>Verifica certificado</h2>
        <button type="button" class="btn btn-success">Verificar</button>
    </div>
    <div id="redes">
        <h2>Siguenos en redes sociales</h2>
        <i class="fab fa-instagram fa-3x"></i>
    </div>
    <div id="mapa">
        <h2>Visítanos</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3702.4353163704777!2d-102.29597958505275!3d21.87930658554382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee7b76468f7b%3A0xc8c02c8b0f572fee!2sDr%20Jes%C3%BAs%20D%C3%ADaz%20de%20Le%C3%B3n%20210%2C%20Zona%20Centro%2C%2020000%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses-419!2smx!4v1605392225262!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <p>Página con fines educativos Examen Segundo Parcial ISC 5B Benemerita Universidad de Aguascalientes 2020</p>
</footer>
</body>
</html>