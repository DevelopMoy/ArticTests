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
    <link rel="stylesheet" href="css/loginStyles.css">
    <script src="https://kit.fontawesome.com/66b3831846.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
require "nav.php";
?>

<section id="iniciarSesion">
<div id='form-login'>
    <img src="img/icon-login.png" alt="user">
    <form action="loginLogica.php" method="post">
        <div class="form-group">
            
            <input type="text" name="emailBd" required class="form-control" id="exampleInputEmail1" placeholder="Ingrese usuario">
        </div>
        <div class="form-group">
            <input type="password" name="passBd" class="form-control" id="exampleInputPassword1" required placeholder="Ingrese contraseña">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
    <?php
    if (isset($_GET["error"])&&$_GET["error"]=="true"){
        echo "<span style='color: red'>Contraseña o usuario incorrecto</span>";
    }
    ?>
    <span>¿No tienes cuenta? </span> <a href="registroVista.php">Registrarse</a>

</div>

</section>

<?php
require "footer.php";
?>

</body>
</html>