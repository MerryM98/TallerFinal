<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    .imgRedonda {
        width:300px;
        height:300px;
        border-radius:150px;
    }

    footer .contenedor{
    display: flex;
    justify-content: center;
    text-decoration: none;


    
    }
    .container{
        background-color:#F08080;
        
    }
    header .container{
        background-color:#F08080;

    }
    </style>

</head>
<body class=" bg-light text-while">
    <header>
        <div class="container"> 
            <center>
            <img src="imagenes/jimin.jpg" class='imgRedonda'/>
            </center>
            <h1 class="text-center mt-5">REGISTRO DE USUARIOS</h1>
        </div>
    </header>
    <main>
    <div class="container" >
            <div class="row justify-content-center">
                <div class="col-4 ">
                <div class="d-flex justify-content-center">
					<br>	<br>
				</div>
                    <form action="agregarDatos.php" method="POST">
                        <div class="form-group">
                            <label  for="nombreUsuario">Nombres:</label>
          
                            <input type="text" class="form-control " id="nombreUsuario" name="nombreUsuario" placeholder="nombre" >   
                                                     
                        </div>

                        <div class="form-group">
                            <label for="ApellidosUsuario">Apellidos:</label>
                            <input type="text" class="form-control " id="ApellidosUsuario" name="ApellidosUsuario" placeholder="Apellido" >                           
                            
                        </div>

                        <div class="form-group">
                            <label for="DocumentoUsuario">Documento de identidad:</label>
                            <input type="number" class="form-control " id="DocumentoUsuario" name="DocumentoUsuario" placeholder="cédula" >                           
                            
                        </div>

                        <div class="form-group">
                            <label for="emailUsuario">Email:</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="email" class="form-control " id="emailUsuario" name="emailUsuario"  placeholder="example@gmail.com" >                           
                            
                        </div>

                        <div class="form-group">
                            <label for="passUsuario">Contraseña</label>
                            <input type="password" class="form-control  " id="passUsuario" name="passUsuario" placeholder="Contraseña" >                           
                            
                        </div>
                                               
                        <button type="submit" class="btn btn-success btn-block" id="btnEnviar" name="btnEnviar" >Enviar</button>     
                    </form>
                    
                    <form action="ConsultarDatos.php" method="POST" class="mt-5 mb-5">
                        <div class="form-group">
                             <label for="DocumentoBuscar">Buscar</label>
                             <input type="number" class="form-control " id="DocumentoBuscar" name="DocumentoBuscar" >                           
                            
                        </div>                                               
                            <button type="submit" class="btn btn-primary btn-block" id="btnBuscar" name="btnBuscar" >Buscar</button>                        
                    </form>

                    <form action="ActualizarDatos.php" method="POST" class="mt-5 mb-5">
                        <div class="form-group">
                            <label for="ActualizarDatos"> Actualizar Correo</label>
                            <input type="email" class="form-control " id="ActualizarDatos" name="ActualizarDatos" >                           
                        </div>                                               
                        <button type="submit" class="btn btn-primary btn-block" id="btnEnviar" name="btnActualizar" >Actualizar</button>
                    </form>

                    <form action="EliminarDatos.php" method="POST" class="mt-5 mb-5">
                        <div class="form-group">
                            <label for="DocumentoEliminar"> Eliminar</label>
                            <input type="number" class="form-control " id="DocumentoEliminar" name="DocumentoEliminar" >                           
                        </div>                                               
                        <button type="submit" class="btn btn-primary btn-block" id="btnEnviar" name="btnEliminar" >Eliminar</button>
                    </form>
                </div>
            </div>
    </div>
    </main>
    <footer>
        <div class="contenedor">
                <p class="copy"> &Mery </p>       
        </div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>