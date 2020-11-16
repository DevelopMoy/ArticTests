<?php
    session_start();
    function existe ($nombreUsuario,$email,$archivo){
        $usBd="";
        $emBd="";
        $cont=0;
        $indexIn=0;
        while(!feof($archivo)){
            $usuarioLinea=fgets($archivo);
            for ($i=0;$i<strlen($usuarioLinea);$i++){
                if ($usuarioLinea[$i]==' '&&$cont==0){
                    $emBd=substr($usuarioLinea,0,$i);
                    $indexIn=$i;
                    $cont++;
                }else{
                    if ($usuarioLinea[$i]===' '&&$cont===1){
                        $usBd=substr($usuarioLinea,$indexIn+1,($i-$indexIn-1));
                        $cont++;
                    }
                }
            }
            $cont=0;
            if ($usBd==$nombreUsuario){
                return true;
            }
            if ($emBd==$email){
                return true;
            }
        }
        return false;
    }

    $email= $_POST["emailLg"];
    $passw= $_POST["passLg"];
    $nomb= $_POST["nombLg"];
    $userName= $_POST["userLg"];

    for ($i=0;$i<strlen($nomb);$i++){
        if ($nomb[$i]==' '){
            $nomb[$i]='_';
        }
    }


    if (!$archivoDatos = fopen("../datosUsuarios.txt", "a+")){
        echo "No se ha podido abrir el archivo";
    }else{
        if (!existe($userName,$email,$archivoDatos)){
            $datosUser=$email." ".$userName." ".$passw." ".$nomb."\n";
            if (!fwrite($archivoDatos,$datosUser)){
                echo "ERROR AL ESCRIBIR ARCHIVO";
            }
            header("Location: ../index.php");
            die();
        }else{
            header("Location: registroVista.php");
            die();
        }
    }
    fclose($archivoDatos);

