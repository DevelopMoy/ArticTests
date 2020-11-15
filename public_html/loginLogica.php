<?php
    session_start();

    $user=$_POST["emailBd"];
    $band=true;
    $pass=$_POST["passBd"];

    if (!$archivoDatos = fopen("../datosUsuarios.txt", "a+")){
        echo "No se ha podido abrir el archivo";
    }else{
        $cont=0;

        while (!feof($archivoDatos)){
            $lineaDatos=fgets($archivoDatos);
            $anterior=0;//indice del espacio anterior
            $usrLn="";//USUARIO LEIDO DE LA BD
            $passLn="";//CONSTRAS BD
            $emailLn=""; //EMAIL
            $nomLn="";//NOMBRE
            for ($i=0;$i<strlen($lineaDatos);$i++){
                if ($cont==0&&$lineaDatos[$i]==' '){
                    $emailLn=substr($lineaDatos,0,$i);
                    $cont++;
                    $anterior=$i;
                }else{
                    if ($cont==1&&$lineaDatos[$i]==' '){
                        $usrLn=substr($lineaDatos,$anterior+1,$i-$anterior-1);
                        $anterior=$i;
                        $cont++;
                    }else{
                        if ($cont==2&&$lineaDatos[$i]==' '){
                            $passLn=substr($lineaDatos,$anterior+1,$i-$anterior-1);
                            $anterior=$i;
                            $cont++;
                        }else{
                            if ($cont==3){
                                $nomLn=substr($lineaDatos,$anterior+1,strlen($lineaDatos)-$anterior-1);
                                break;
                            }
                        }
                    }
                }
            }
            if ($usrLn==$user&&$passLn==$pass){//INICIO DE SESION
                session_start();
                $_SESSION["nombre"]=$nomLn;
                $_SESSION["user"]=$usrLn;
                $_SESSION["email"]=$emailLn;
                $band=false;
                header("Location: ../index.php");
                break;
            }
            $cont=0;
        }
        if ($band){
            header("Location: loginView.php");
        }

    }



?>