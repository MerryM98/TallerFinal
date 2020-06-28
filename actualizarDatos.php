<?php

include('BaseDatos.php');

if(isset($_POST["btnActualizar"])){
    //Traer datos del formulario
    $correo=$_POST["ActualizarDatos"];
    
    //creo objeto tipo base de datos(conexion)
    $operacionBaseDatos= new BaseDatos();

    //consulta para  los datos 
    $consulta="UPDATE usuario SET nombre='carlos' WHERE id=1";

    //llamar a la clase base de datos y voy a utiliar su metodo para alterar
    //(insertar o escribir dentro de la DB)

    $resultado=$operacionBaseDatos->alterarBaseDatos($consulta);

     //validar el resultado
     if($resultado){
        echo("<br>");
        echo("transaccion exitosa, datos Actualizados");
    }
    else{
        echo("<br>");
        die("error en la transaccion");

    }

    
}else{
    echo("Nose ha presionado");
}


?>

?>