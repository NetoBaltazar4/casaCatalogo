    <?php include_once 'includes/templates/header.php'; ?>

  <!--  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Img/Carousel/promocionCklass.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Img/Carousel/otroCklass.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Img/Carousel/promocionCklass.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->


    <main class="seccion">
        <div class="contenedor">
            <h1 class="centrar-texto">Los mejores catalogos de esta temporada</h1>
            <div class="row separador align-items-center">
                <div class="col-sm-12 col-md-3 catalogo">

                    <a href="http://cdn-img.andrea.com/mx/25/263/index.html" target="_blank">
                        <img src="img/catalogo/andreaCatalogo.png" alt="Catalogo andrea">
                    </a>
                    <a href="#site-formulario">
                        <i class="fas fa-caret-square-down"></i>
                        Encargar pedido
                    </a>
                </div>
                <div class="col-sm-12 col-md-3 catalogo">
                    <a href="pdf/¡LIQUIDACIÓN DEVENDI! AM20.pdf" target="_blank">
                        <img src="img/catalogo/Devendi.png" alt="Catalogo andrea">
                    </a>
                    <a href="#site-formulario">
                        <i class="fas fa-caret-square-down"></i>
                        Encargar pedido
                    </a>
                </div>
                <div class="col-sm-12 col-md-3 catalogo">
                    <a href="http://cdn-img.andrea.com/mx/25/42/index.html" target="_blank">
                        <img src="img/catalogo/andreaCatalogo.png" alt="Catalogo andrea">
                    </a>
                    <a href="#site-formulario">
                        <i class="fas fa-caret-square-down"></i>
                        Encargar pedido
                    </a>

                </div>

                <div class="col-sm-12 col-md-3 catalogo">
                    <a href="http://cdn-img.andrea.com/mx/25/241/index.html" target="_blank">
                        <img src="img/catalogo/andreaCatalogo.png" alt="Catalogo andrea">
                    </a>
                    <a href="#site-formulario">
                        <i class="fas fa-caret-square-down"></i>
                        Encargar pedido
                    </a>

                </div>


            </div>

            <div class="row separador">
                <div class=" col-sm-12 col-md-3 catalogo">

                    <a href="http://cdn-img.andrea.com/mx/25/263/index.html" target="_blank">
                        <img src="img/catalogo/andreaCatalogo.png" alt="Catalogo andrea">
                    </a>
                    <a href="#site-formulario">
                        <i class="fas fa-caret-square-down"></i>
                        Encargar pedido
                    </a>
                </div>
                <div class=" col-sm-12 col-md-3 catalogo">
                    <a href="pdf/¡LIQUIDACIÓN DEVENDI! AM20.pdf" target="_blank">
                        <img src="img/catalogo/Devendi.png" alt="Catalogo andrea">
                    </a>
                    <a href="#site-formulario">
                        <i class="fas fa-caret-square-down"></i>
                        Encargar pedido
                    </a>

                </div>
                <div class=" col-sm-12 col-md-3 catalogo">
                    <a href="http://cdn-img.andrea.com/mx/25/42/index.html" target="_blank">
                        <img src="img/catalogo/andreaCatalogo.png" alt="Catalogo andrea">
                    </a>
                    <a href="#site-formulario">
                        <i class="fas fa-caret-square-down"></i>
                        Encargar pedido
                    </a>

                </div>

                <div class=" col-sm-12 col-md-3 catalogo">
                    <a href="http://cdn-img.andrea.com/mx/25/241/index.html" target="_blank">
                        <img src="img/catalogo/andreaCatalogo.png" alt="Catalogo andrea">
                    </a>
                    
                    <a href="#site-formulario">
                        <i class="fas fa-caret-square-down"></i>
                        Encargar pedido
                    </a>
                
                </div>
                

            </div>

            <div class="todos-catalogos">
                <a href="#" class="boton btn btn-primary">Todos los catálogos</a>
            </div>

        </div>
    </main> <!--contenido principal-->


    <div class="site-formulario" id="site-formulario">
        <div class="contenedor">
               <div class="contenido-formulario">
                    <h2 class="centrar-texto">llena el formulario para realizar tu pedido</h2>
                   <div class="style-campo">
                    <form  id="formulario-index">
                        <div class="campos">
                            <div class="row">
                                <div class="col-md-12">
                                    <select name="marca" id="marca">
                                        <option disabled selected  value="">Selecciona una marca</option>
                                        <?php include ("includes/funciones/conexion.php");
                                        $result = mysqli_query($conn, "SELECT DISTINCT marca FROM catalogo");
                                        while($extraido= mysqli_fetch_array($result)){
                                        
                                        ?>
                                        <option value="AND"><?php echo "".$extraido['marca'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                    <input type="text" placeholder="Ingresa el modelo" id="modelo">


                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="talla" class="talla">Selecciona la talla</label>
                                    <select name="lista-talla" id="lista-talla">
                                     
                                    </select>

                                    <p class="precio"><span>$</span></p>
                                </div>

                            </div>
                            <div class="boton-enviar">
                                <button type="submit" id="btnEnviar" value="consultar" class="btn btn-primary button-enviar">Enviar</button>
                                <button type="submit" id="btnBolsa" value="consultar" class="btn btn-success button-enviar">Bolsa</button>

                            </div>

                        </div>
                    </form>

                   </div>
                   
               </div>
        </div>

    </div> <!--.site formulario-->

    <?php include_once 'includes/templates/footer.php';?>

    <script src="js/js/index.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>