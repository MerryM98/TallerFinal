<?php

include('BaseDatos.php');

if(isset($_POST["btnEnviar"])){

    //recibo los datos del formulario
    $nombre=$_POST["nombreUsuario"];
    $apellido=$_POST["ApellidosUsuario"];
    $documento=$_POST["DocumentoUsuario"];
    $correo=$_POST["emailUsuario"];
    $password=$_POST["passUsuario"];   
    
    //creo objeto tipo base de datos(conexion)
    $operacionBaseDatos= new baseDatos();

   // $operacionBaseDatos->conectarConBaseDatos();
    // creo la consulta 
    $consulta="INSERT INTO usuario(nombre, apellido, documento, correo, password) VALUES ('$nombre','$apellido','$documento','$correo','$password')";

    //llamar a la clase base de datos y voy a utiliar su metodo para alterar
    //(insertar o escribir dentro de la DB)
    $resultado=$operacionBaseDatos->  alterarBaseDatos($consulta);

    //validar el resultado
    if($resultado){
        echo("<br>");
        echo("transaccion exitosa, datos agregados");
    }
    else{
        echo("<br>");
        die("error en la transaccion");

    }


}else{
    echo("no se ha presionado");    
}



?>