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
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
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
<?php
require "footer.php";
?>

</body>
</html>