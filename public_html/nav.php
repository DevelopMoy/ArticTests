<nav class="" style="" >
    <a class="mainLogo" href="../index.php"><img id=logoNav src="img/Copia de logoSinIceberg.png" alt="logo"></a>
    <ul class="list-nav">
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="certificaciones.php">Certificaciones</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="conocenos.php">Acerca de</a></li>
    </ul>
    <form action="loginL.php" class="login" method="post">
        <?php
        session_start();
        function saludo (){
            $nombre=substr($_SESSION["nombre"],0);
            $varAux= strlen($nombre)-1;
            for ($i=0;$i<strlen($nombre);$i++){
                if ($nombre[$i]=='_'){
                    $varAux=$i;
                    break;
                }
            }
            $nombre=substr($nombre,0,$varAux);
            $var = intval(date('H'));
            if ($var>=12&&$var<=19){
                return "Buenas tardes ".$nombre;
            }else{
                if ($var>19||$var<=4){
                    return "Buenas noches ".$nombre;
                }else{
                    return "Buenos dias ".$nombre;
                }
            }
        }
        $loginT="";

        if (isset($_SESSION["user"])&&!empty($_SESSION["user"])){
            $loginT="Cerrar Sesión";
            echo "<span>".saludo()."</span><i class='fas fa-user'></i><span>".$_SESSION["user"]."</span>";
            echo "<input type='hidden' value='cerrSec' name='loginType'>";
        }else{
            $loginT="Iniciar Sesión";
            echo "<input type='hidden' value='inicSec' name='loginType'>";
        }
        ?>
        <button type='submit'  class='btn btn-outline-primary'><?php echo $loginT ?></button>
    </form>

</nav>