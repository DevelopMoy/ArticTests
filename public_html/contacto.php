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

<section id="form">
    <div>
        <h1>Completa los siguientes datos para contactarnos</h1>
        <form action="">
            <input type="text" class="form-control" name="name" placeholder="Nombre completo" required>
            <input type="text" class="form-control" name="email" placeholder="Email" required>
            <input type="text" class="form-control" name="tel" placeholder="Teléfono" required>
            <textarea class="form-control"  placeholder="Mensaje" required></textarea>
            <button class="btn btn-primary" type="submit">Contactar</button>
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