<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styleAdmin.css">
</head>
<body>
    
    <header  class="site-header">
        <div class="contenedor">
            <div class="navbar navbar-expand-md">
                
                <a href="/">
                    <img src="img/La casa del catalogo2.0.png" alt="Logo de jalisco Sport" width="150">
                </a>


                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>  
                </button>


                <div  class="collapse navbar-collapse justify-content-md-end centrar-texto" id="navbarTogglerDemo01">
                    <div class="icono-mensaje">
                        <ul>
                            <li>
                                <div class="submenu-mensaje">
                                    <i class="fas fa-envelope"></i>
                                    <div class="mensaje" id="mensaje">
                                        <p>Productos por agotarse</p>
                                        <table class="lista-mensaje" id="lista-mensaje">
                                            <thead>
                                                <tr>
                                                    <th>Imagen</th>
                                                    <th>Matricula</th>
                                                    <th>Marca</th>
                                                    <th>Cantidad</th>
                                                    <th></th>
                                                </tr>
            
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                    IMG
                                                    </td>
                                                    <td>F25652P</td>
                                                    <td>Puma</td>
                                                    <td>1</td>
                                                    <td><a href="#" class="borrar-mensaje"> X</a> </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                
                                </div>
                            </li>
                        </ul>
                      
                    </div> <!--Icono de mensaje-->
                    <div class="icono-notificacion">
                        <ul>
                            <li>
                                <div class="submenu-nofiti">
                                    <i class="fas fa-bell notify"></i> 
                                    <div class="notificaion" id="notificacion">
                                        <p>Notificaciones</p>
                                        <div class="lista-notificacion" id="lista-notificacion">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>imagen</th>
                                                        <th>usuario</th>
                                                        <th>producto</th>
                                                        <th>fecha y hora</th>
                                                        <th></th>
                                                    </tr>
                
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="img/hombre/tenis/t1/Foto 18-05-20 18 55 06.jpg" alt="imagen del producto">
                                                        </td>
                                                        <td>BATE964</td>
                                                        <td>FASCRES</td>
                                                        <td>jueves 25 agosto 16:00</td>
                                                        <td><a href="#" class="borrar-mensaje"> X</a> </td>
            
                                                    </tr>
    
    
                                                  
                                                </tbody>
            
                                            </table>
            
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                        </ul> 
                    </div> <!--Icono de notificacion-->
                    <div class="icono-user">
                       <ul>
                           <li>
                            <div class="iconos-admin">
                                <div class="submenu-admin">
                                    <i class="fas fa-user user"> Admin</i>
                                    <div class="cuenta-admin" id="cuenta-admin">
                                        <p>Bienvenido Esteban</p>
                                        <div class="lista-admin">
                                            <table>
                                                <thead>
                                                        <tr>
                                                            <th><a href="#">Cerrar Sesion</a></th>
                                                        </tr>
                                                </thead>
                                               
                                            </table>
                                        </div>
        
                                    </div>
        
                                </div>
                            </div> <!--icono de Admin-->
                          
                           </li>
                       </ul>
                        
                    </div>

                </div>

              
            </div>
        </div>

    </header> <!--.site header-->

    <div class="navbar navbar-expand-md py-0 barra-admin">
        <div class="collapse navbar-collapse barra" id="navbarTogglerDemo01">
            <div class="contenedor">
                <nav class="navegacion-admin row justify-content-md-center centrar-texto ">
                    <div class="col-md-2">
                    <a href="indexAdmin.php">Inicio</a>
                    </div>
                    <div class="col-md-2">
                    <a href="gestionarClientes.php">Gestionar Clientes</a>
                    </div>
                    <div class="col-md-2">
                    <a href="gestionarProductos.php">Gestionar Productos</a>
                    </div>
                    <div class="col-md-2">
                    <a href="gestionarVentas.php">Gestionar Ventas</a>
                    </div>
                    <div class="col-md-2">
                    <a href="respaldarRestaurar.php">Respaldar y Restaurar</a>
                    </div>
                   
                </nav>
    
            </div>
    
        </div>

    </div>
  