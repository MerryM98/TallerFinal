<?php

include('BaseDatos.php');

if(isset($_POST["btnBuscar"])){
    
    $documento=$_POST["DocumentoBuscar"];


    $consulta="SELECT nombre, apellido, documento, correo, password FROM usuario WHERE documento='$documento' ";
    
    $operacionBaseDatos= new BaseDatos();

    
    $resultado=$operacionBaseDatos->ConsultarEnBaseDatos($consulta);

    echo("<br>");
    print_r($resultado);
  
}else{
    echo("No se ha presionado"); 
}





?>