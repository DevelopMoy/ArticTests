<?php
session_start();
require "certifLogica.php";
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
        <h1>Examen de certificación JAVA SE - Tiempo: <span id="timeTest">0:0:0</span></h1>
        <form action="">
            <button type="button" id="botonEnviar" class="btn-lg btn-outline-danger">Terminar</button>
        </form>
        </nav>
        
            <form id="areaExamen" action="revExamen.php" method="post">
            <?php
                $preguntas = ["t1","t2","t3","t4","t5","t6","t7"];
                $preguntasCod=["c1","c2","c3","c4","c5","c6","c7"];
                $contador=0;
                shuffle($preguntas);
                shuffle($preguntasCod);
                if (!$archivoDatos = fopen("../data/preguntTeor.txt","a+")){
                    echo "No se ha podido abrir el archivo";
                }else{
                    while ($contador<6){
                        if ($contador<3){//TEORIA
                            $preguntaDato=array_pop($preguntas);
                        }else{//CODIGO
                            $preguntaDato=array_pop($preguntasCod);
                        }
                        rewind($archivoDatos);
                        while (!feof($archivoDatos)){
                            $lineaArch=fgets($archivoDatos); //TIENE EL ID
                            $lineaArch=substr($lineaArch,0,strlen($lineaArch)-1);
                            if ($lineaArch==$preguntaDato){
                                $idPregunta=$lineaArch;
                                echo "<div class='seccionExamen'>";
                                echo "<h3 class='ask-title'>Pregunta #".($contador+1)."</h3>";
                                $lineaArch=fgets($archivoDatos);
                                echo "<h5 class='ask'>".$lineaArch."</h5>";
                                echo "<input type='hidden' name='idPreg".($contador+1)."' value='".$idPregunta."'>";
                                for ($j=1;$j<=4;$j++){
                                    $lineaArch=fgets($archivoDatos);
                                    echo "<div class='answer'>";
                                    echo "<input  type='radio' id='".$j."rb' name='".($contador+1)."nm' value='".$j."'>";
                                    echo "<label  for ='".$j."rb'>".$lineaArch."</label>";
                                    echo "</div>";
                                }
                                echo "</div>";
                                break;
                            }
                        }
                        $contador++;
                    }
                    fclose($archivoDatos);
                }
                
            ?>

        </form> 

    <footer id='footer-exam'>
        <?php
            $nombre=substr($_SESSION["nombre"],0);
            $varAux= strlen($nombre)-1;
            for ($i=0;$i<strlen($nombre);$i++){
                if ($nombre[$i]=='_'){
                    $varAux=$i;
                    break;
                }
            }
            $nombre=substr($nombre,0,$varAux);
        ?>
        <h1><?php echo $nombre ?> Exito! Estas a un paso de certificarte.</h1>
    </footer>

    <script>
        formExamen= document.querySelector("#areaExamen");
        botonEnviar=document.querySelector("#botonEnviar");
        botonEnviar.onclick=()=>{
            formExamen.submit();
        };

        timeTest="";
        hrs=0,seg=0,min=0;
        etiquetaTime=document.querySelector("#timeTest");

        setInterval(()=>{
            seg++;
            if (seg===60){
                min++;
                seg=0;
            }
            if (min===60){
                min=0;
                hrs++;
            }
            etiquetaTime.innerHTML=hrs+":"+min+":"+seg;
        },1000,"Javascript")
    </script>
</body>
</html>