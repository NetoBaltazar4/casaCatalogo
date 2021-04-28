<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>La Casa del catalogo</title>
</head>

<body>

    <header class="site-header">
        <div class="contenedor">
            <div class="navbar navbar-expand-md">
               
                <a href="index.php">
                    <img src="img/La casa del catalogo2.0.png" alt="Logo Casa del catalogod" width="150" class="mx-4">
                </a>

                <button class="navbar-toggler navbar-toggler-right button-hamburguesa" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars menu-hamburguesa"></i>  
                </button>


                <div class=" row collapse navbar-collapse  centrar-texto mt-4" id="navbarTogglerDemo01">
                    
                    <!-- <div class="row justify-content-xs-center mt-5"> -->
                        <div class=" col-9 col-sm-10 col-md-10">
                            <form action="#">
                                <input type="text" name="buscar" id="buscar" class="search"
                                    placeholder="Busca tu catalogo favorito...">
                            </form> <!--Buscador-->
                        </div>
                        <div class="col-3 col-sm-2 col-md-2">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-6 iconos">
                                    <a href="login.php">
                                        <i class="fas fa-user user"></i>
                                    </a>
                                </div> <!--perfil-->
    
                                <div class="col-6 col-sm-6 col-md-6 iconos">
                                    <a href="#">
                                        <i class="fas fa-shopping-bag bag"></i>
                                    </a>
                                </div> <!--Bolsa-->
    
                            </div>
    
                        </div> <!--Iconos-->

                    <!-- </div> -->
                   
                   
                </div>
         
            </div>

        </div>

    </header>


    <div class="navbar navbar-expand-md   barra">
        <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
            <div class="contenedor">
                <nav class="nav row  centrar-texto">
                    <div class="col-md-2 mb-3">
                        <a href="index.php">Inicio</a>
                    </div>

                    <div class="col-md-2 mb-3">
                        <a href="dama.php">Damas</a>
                    </div>

                    <div class="col-md-2 mb-3">
                         <a href="caballero.php">Caballero</a>
                    </div>

                    <div class="col-md-2 mb-3">
                        <a href="ninos.php">Niños</a>
                    </div>

                    <div class="col-md-2 mb-3">
                        <a href="rebajas.php">Rebajas</a>
                    </div>
                    <div class="col-md-2 mb-3">
                        <a href="contacto.php">Contacto</a>
                    </div>
                   
                </nav>
            </div>
    
        </div>

    </div>
   