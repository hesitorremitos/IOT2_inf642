<?php
    function datos () {
        $servidor = "localhost";
        //$basedatos = "db_inf640iot";
        //$basedatos = "seervic2_fisica";
        $usuario= "root";
        $clave = "";    
    
    
    $tabla="dht11";
    $basedatos = "INF640";
    //$basedatos="servici2_fisica";
    //$tabla="datos";

    
    
    $conexion = mysqli_connect($servidor,$usuario,$clave );
    mysqli_select_db($conexion,$basedatos);
    mysqli_query($conexion,"SET NAMES 'utf8'");
    
    $resultado=mysqli_query($conexion,"SELECT UNIX_TIMESTAMP(fecha_hora), temperatura FROM " .$tabla );
        
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