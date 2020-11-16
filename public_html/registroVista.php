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
    <link rel="stylesheet" href="css/cssRegistros.css" type="text/css">
    <script src="https://kit.fontawesome.com/66b3831846.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
    require "nav.php";
?>

<section id="registro">
    <div id="form-registro">
        <h2>Ingresa tus datos</h2>
        <form action="registroLogica.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Direccion de email</label>
                <input type="email" name="emailLg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese email" required>
                <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tus datos personales</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" name="passLg" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
                <label for="nombreId">Nombre</label>
                <input type="text" name="nombLg" class="form-control" id="nombreId" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label for="nombreUsId">Nombre de Usuario</label>
                <input type="text" name="userLg" class="form-control" id="nombreUsId" placeholder="Nombre de usuario" required>
            </div>

            <button type="submit" class="btn btn-primary">Registrarse</button>
            <?php
                if (isset($_GET["error"])&&$_GET["error"]=="true"){
                    echo "<div style='color:red; text-align: center; margin-top: 10px;'>El correo o nombre de usuario ya existen</div>";
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