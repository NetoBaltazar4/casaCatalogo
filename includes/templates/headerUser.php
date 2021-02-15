<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styleUser.css">

</head>

<body>

    <header class="site-header">
        <div class="contenedor">
            <div class="row centar-texto align-items-center">
                <div class=" col-sm-3 col-md-2">
                    <a href="index.php">
                        <img src="img/La casa del catalogo2.0.png" alt="Logo Casa del catalogo">
                    </a>

                </div>

                <!-- <div class="col-sm-3 col-md-2">
                    <select name="lista-catalogos" id="lista-catalogos" class="lista-catalogo">
                        <option value="dama">Dama</option>
                        <option value="caballero">Caballero</option>
                        <option value="nino">Niños</option>
                        <option value="catalogo">Catalogos</option>
                    </select>
                </div> -->

                <div class="col-sm-3 col-md-8">

                    <form action="#">
                        <input type="text" name="buscar" id="buscar" class="search"
                            placeholder="Busca tu catalogo favorito...">
                    </form>
                </div>

                <div class="col-sm-3 col-md-2">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 iconos">
                            <div class="two columns u-pull-right">
                                <ul>
                                    <li class="submenu-bolsa">
                                        <i class="fas fa-shopping-bag bag"></i>
                                        <div class="bolsa">
                                            <h4>Mi Bolsa</h4>
                                            <table class="lista-bolsa u-full-width">
                                                <thead>
                                                    <tr>
                                                        <th>Catalogo</th>
                                                        <th>Informacion</th>
                                                        <th>Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>
                                                            <img src="Img/catalogo/Devendi.png" width="100">
                                                        </td>
                                                        <td> <span> Modelo: lasr - Precio: 120 - Marca: Andrea</span></td>
    
    
                                                        <td>
                                                            <a href="#" class="borrar-curso btn btn-danger" data-id="${curso.id}">X</a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="Img/catalogo/Devendi.png" width="100">
                                                        </td>
                                                        <td> <span> Modelo: lasr - Precio: 120 - Marca: Andrea</span></td>
    
    
                                                        <td>
                                                            <a href="#" class="borrar-curso btn btn-danger" data-id="${curso.id}">X</a>
                                                        </td>
                                                    </tr>
                                                   
    
                                                </tbody>
                                                
                                            </table>
                                            <div class="boton-bolsa">
                                               <a href="miBolsa.php" id="btn-mi-bolsa" class="btn btn-success">Mi bolsa</a>

                                            </div>
                                           
                                        </div>
                                    </li>
                                </ul>

                            </div>
                           
                        </div> <!--icono de bolsa-->

                        <div class="col-sm-12 col-md-4 iconos">
                            <div class="two columns u-pull-right">
                                <ul>
                                    <li class="submenu-notifi">
                                        <i class="fas fa-bell notifi"></i>
                                        <div class="notificacion">
                                            <h4>Notificaciones</h4>
                                            <table class=" u-full-width">
                                                <thead>
                                                    <tr>
                                                        <th>Catalogo</th>
                                                        <th>Informacion</th>
                                                        <th>fecha entrega</th>
                                                        <th></th>
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>
                                                            <img src="Img/catalogo/Devendi.png" width="100">
                                                        </td>
                                                        <td>Modelo: lasr - Precio: 120 - Marca: Andrea</td>
                                                        <td>28- Noviembre - 2020</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <img src="Img/catalogo/Devendi.png" width="100">
                                                        </td>
                                                        <td>Modelo: lasr - Precio: 120 - Marca: Andrea</td>
                                                        <td>28- Noviembre - 2020</td>
                                                    </tr>



                                                    
                                                   
    
                                                </tbody>
                                                
                                            </table>
    
                                        </div>
    
                                    </li>
                                </ul>

                            </div>
                           
                           
                        </div> <!--icono de  norificacion-->

                        <div class=" col-sm-12 col-md-4 iconos">
                            <div class="mi-cuenta">
                                <div class="submenu-cuenta">
                                    <div class="nombre-user">
                                        <!---Aqui es donde se genera el nombre del usuario-->
                                        <p>EB</p>
                                    </div>
        
                                    <div class="cuenta-user" id="cuenta-user">
                                        <table class="lista-cuenta" id="lista-cuenta">
                                            <thead>
                                                <tr>
                                                    <ul>
                                                        Configuración
                                                       <li><a href="misDatos.php"><i class="fas fa-user-cog"></i>Mis datos</a></li>
                                                       <li><a href="tarjeta.php"><i class="fas fa-credit-card"></i>Mi Targeta</a></li>
                                                       <li><a href="#"><i class="fas fa-info-circle"></i>  Ayuda</a> </li>
                                                    </ul>
                                    
                                                </tr>
                                                <tr>
                                                    <ul>
                                                        Compras
                                                        <li> <a href="misCompras.php"><i class="fas fa-shopping-bag"></i> Mis compras</a></li>
                                                    </ul>                                                    </tr>
                                                <tr>
                                                    <ul>
                                                        Cerrar Sesión
                                                        
                                                        <li><a href="#"><i class="fas fa-sign-out-alt"></i>Salir</a></li>

                                                    </ul>
                                                </tr>
                                                
                                            </thead>

                                        </table>

                                    </div>

                                </div>
                        </div> <!--.mi-Cuenta-->

                         
                        </div> <!--Icono de perfil-->                     
                        

                    </div>

                </div>
            </div>

        </div>

    </header>

    <div class="barra">
        <div class="contenedor">
            <nav class="nav">
                <a href="index.php">Inicio</a>
                <a href="dama.php">Dama</a>
                <a href="caballero.php">Caballero</a>
                <a href="ninos.php">Niños</a>
                <a href="rebajas.php">Rebajas</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>
    </div>
