<?php
    function datos () {
        $servidor = "serviciowebinf.site";
        //$basedatos = "db_inf640iot";
        //$basedatos = "seervic2_fisica";
        $usuario= "servic12_usuario123";
        $clave = "usuario123.";    
    
    
    $tabla="hector_dht11";
    $basedatos = "servic12_inf640iot";
    //$basedatos="servici2_fisica";
    //$tabla="datos";

    
    try{
        $conexion = mysqli_connect($servidor,$usuario,$clave );
    }catch(Exception $e){
        print_r($e);
    }
        mysqli_select_db($conexion,$basedatos);
        mysqli_query($conexion,"SET NAMES 'utf8'");    
    $resultado=mysqli_query($conexion,"SELECT UNIX_TIMESTAMP(fecha_hora), humedad FROM " .$tabla );
        
     while ($row=mysqli_fetch_array($resultado))
     {
      echo "[";
      echo ($row[0]*1000);
      echo ",";
      echo $row[1];
      echo "],";
     }
     }
    
    ?>