<?php

include('BaseDatos.php');

if(isset($_POST["btnEliminar"])){
    //Traer datos del formulario
    $documento=$_POST["DocumentoEliminar"];
    
    //creo objeto tipo base de datos(conexion)
    $operacionBaseDatos= new BaseDatos();

    //consulta para eliminar los datos 
    $consulta="DELETE FROM usuario WHERE documento='$documento'";

    //llamar a la clase base de datos y voy a utiliar su metodo para alterar
    //(insertar o escribir dentro de la DB)

    $resultado=$operacionBaseDatos->alterarBaseDatos($consulta);

     //validar el resultado
     if($resultado){
        echo("<br>");
        echo("transaccion exitosa, datos Eliminados");
    }
    else{
        echo("<br>");
        die("error en la transaccion");

    }

    
}else{
    echo("Nose ha presionado");
}


?>