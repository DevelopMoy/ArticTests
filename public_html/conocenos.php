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
   
    <script src="https://kit.fontawesome.com/66b3831846.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
require "nav.php";

?>

<section id="seccion1-3" >
<div id="header-conoc">
    <h1>Conocenos</h1>
      <p>Conoce la trayectoria de ArticDevCo y su porque somos la empresa #1 en certificaciones.
</p>
  </div>
  
</section>
<section class="secc-auxiliar">
      <h1>¿Quiénes somos?</h1>
      <p>Encuentra todas las respuestas a tus preguntas a continuación</p>
  </section>
<section id="seccion2-3" >
<div id="historia">
    <h1>Nuestra historia</h1>
      <p>ArticDevCo nace en 1990 como empresa de asesoria, posteriormente se posiciona entre las mejores debido a su calidad de trabajo, 
          en 1998, se inicia como empresa certificadora empezando con Java EE, con esto logrando que miles de personas consigan su certificacion y asi  consiguiendo mejores
          ofertas de trabajo.
</p>
  </div>
</section>
<section class="secc-auxiliar">
      <h1>Empresa líder en certificaciones</h1>
      <p>La trayectoria de ArticDevCo respalda la confiabilidad de nuestros servicios</p>
  </section>
  <section id="seccion2-4" >
<div id="historia">
    <h1>Nuestra Trayectoria</h1>
      <p>ArticDevCo a través de los años ha colaborado con grandes empresas con la finalidad de perfeccionar nuestros servicios y asi poder ofrecer
          el mejor trato a nuestros clientes.
</p>
  </div>
</section>
<?php
require "footer.php";
?>

</body>
</html>