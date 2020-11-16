<?php
    function fueRealizado ($nombUsuario,$archivo){
        while (!feof($archivo)){
            $usuario=fgets($archivo);
            $usuario=substr($usuario,0,strlen($usuario)-1);
            if ($usuario==$nombUsuario){
                return true;
            }
        }
        return false;
    }

    if (!$archivoDatos = fopen("../data/currentTests.txt", "a+")){
        echo "No se ha podido abrir el archivo datos tests realizados";
    }else{
        if (!fueRealizado($_SESSION["user"],$archivoDatos)){
            //GUARDAR EN REALIZADOS
            //                                                 **********        DESCOMENTAR          **************
            //                                                     ESTE IF AL TERMINAR DE DESARROLLAR EL EXAMEN
            /*if (!fwrite($archivoDatos,$_SESSION["user"]."\n")){
                echo "ERROR AL ESCRIBIR ARCHIVO TEST REALIZADOS";
            }*/
            //PUEDE REALIZAR EL EXAMEN
        }else{
            // YA FUE REALIZADO
            header("Location: certificaciones.php");
        }
    }
    fclose($archivoDatos);
