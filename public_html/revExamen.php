<?php
    session_start();

    $idPreg="";
    $respuesta="";
    $aciertos=0;
    if (!$archivoDatos = fopen("../data/preguntTeor.txt","a+")){
        echo "ERROR AL ABRIR ARCHIVO";
    }else{
        for ($i=1;$i<=6;$i++){
            $idPreg=$_POST["idPreg".$i];
            $respuesta=$_POST[$i."nm"];
            if (verificarRespuesta($idPreg,$respuesta,$archivoDatos)){
                $aciertos++;
            }
        }
        fclose($archivoDatos);
        //SE GUARDAN LOS ACIERTOS EN UNA VARIABLE Y SE ESCRIBE EL ARCHIVO
        if (!$archivoEscrit = fopen("../data/regExamenes.txt","a+")){
            echo "ERROR AL ABRIR ARCHIVO ESCRITURA";
        }else{
            $_SESSION["fechaEx"]=date("d/m/o");
            $datosNuevExam="***\n".$_SESSION["nombre"]."Java\n".(($aciertos*100)/6)."\n".($aciertos>=4?"aprobado":"reprobado")."\n".date("d/m/o")."\n".date("H:i:s")."\n";
            if (!fwrite($archivoEscrit,$datosNuevExam)){
                echo "ERROR AL ESCRIBIR ARCHIVO";
            }
            fclose($archivoEscrit);
            $_SESSION["estadoExamen"]=($aciertos>=4?"aprobado":"reprobado");
            $_SESSION["califJava"]=round(($aciertos*100)/6,2);
            header("Location: revisionVista.php");
        }
    }

    function verificarRespuesta ($idPreg,$resp,$archivo){
        rewind($archivo);
        while (!feof($archivo)){
            $lineaArch=fgets($archivo);

            $lineaArch=substr($lineaArch,0,strlen($lineaArch)-1); //PRIMERA LINEA
            if ($lineaArch==$idPreg){//ENCONTRÓ LA PREGUNTA
                for ($j=0;$j<6;$j++){
                    $respCorrecta=fgets($archivo);
                }
                $respCorrecta=substr($respCorrecta,0,strlen($respCorrecta)-1);
                if ($respCorrecta===$resp){
                    return true;
                }else{
                    return false;
                }
            }
        }
        return false;
    }
