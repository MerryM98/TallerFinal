<?php


    class BaseDatos{


        //atributos
        private $servidor="localhost";
        private $usuario="root";
        private $clave="";
        private $nombreBaseDatos="db_tienda";
        private $conexion; //almacena la conexion a la base de datos 

        //constructor
        public function __construct(){}

        //metodos 
        public function conectarConBaseDatos(){
            //configurar la conexion 
            $this->conexion= mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->clave,
                $this->nombreBaseDatos
            );

            //verificar la conexion
            if(!($this->conexion)){
                die('Error de conexión: ' );
            }else{
                echo("conexion exitosa");

            }

        }
        //2 ESCRIBIR EN LA BASE DE DATOS 
    public function alterarBaseDatos($consultaSQL){

        $this->conectarConBaseDatos();
        $resultado=$this->conexion->query($consultaSQL);
        return ($resultado);
        $this->conexion->close();
    }

    //3 lectura en la BaseDeDatos(Buscar)

    public function ConsultarEnBaseDatos($consultaSQL){

        $this->conectarConBaseDatos();
        $resultado=$this->conexion->query($consultaSQL);
         
        $arregloFilas=array();
        foreach($resultado as $registros){            
            $arregloFilas[]=$registros;        
        }

        echo("<br>"); 
        echo("<br>"); 
        
        return($arregloFilas);
        $this->conexion->close();
    }
    


}

?>