    <?php include_once 'includes/templates/header.php'; ?>
    <main class="seccion">
        <div class="contenedor">
            <h1 class="centrar-texto spot">Encarga tu calzado favorito</h1>
            <div class="row separador align-items-center">
                <div class="col-sm-12 col-md-4">
                    <a href="pdf/¡LIQUIDACIÓN DEVENDI! AM20.pdf" target="_blank">
                        <img src="img/catalogo/Devendi.png" alt="Catalogo andrea">
                    </a>

                    <div class="descripcion-contenido">
                        <p>general</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <a href="#site-formulario">
                            <i class="fas fa-caret-square-down"></i>
                            Realizar pedido
                        </a>
                    </div>
                </div> <!--GENERAL-->
                
                <div class="col-sm-12 col-md-4">
                    <a href="pdf/¡LIQUIDACIÓN DEVENDI! AM20.pdf" target="_blank">
                        <img src="img/catalogo/Devendi.png" alt="Catalogo andrea">
                    </a>
                    <div class="descripcion-contenido">
                        <p>confort</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <a href="#site-formulario">
                            <i class="fas fa-caret-square-down"></i>
                            Realizar pedido
                        </a>
                    </div>
                </div> <!--CONFOTR-->

                <div class="col-sm-12 col-md-4">
                    <a href="pdf/¡LIQUIDACIÓN DEVENDI! AM20.pdf" target="_blank" class="">
                        <img src="img/catalogo/Devendi.png" alt="Catalogo andrea">
                    </a>

                    <div class="descripcion-contenido">
                        <p>urbano</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <a href="#site-formulario">
                            <i class="fas fa-caret-square-down"></i>
                            Realizar pedido
                        </a>
                    </div>
                </div> <!--.URBANO-->
            </div>


            <div class="row separador align-items-center">
                <div class="col-sm-12 col-md-4">
                    <a href="pdf/¡LIQUIDACIÓN DEVENDI! AM20.pdf" target="_blank" class="">
                        <img src="img/catalogo/Devendi.png" alt="Catalogo andrea">
                    </a>

                    <div class="descripcion-contenido">
                        <p>vestir</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <a href="#site-formulario">
                            <i class="fas fa-caret-square-down"></i>
                            Realizar pedido
                        </a>
                    </div>
                </div> <!--.VESTIR-->

                <div class="col-sm-12 col-md-4">
                    <a href="pdf/¡LIQUIDACIÓN DEVENDI! AM20.pdf" target="_blank" class="">
                        <img src="img/catalogo/Devendi.png" alt="Catalogo andrea">
                    </a>

                    <div class="descripcion-contenido">
                        <p>bota</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <a href="#site-formulario">
                            <i class="fas fa-caret-square-down"></i>
                            Realizar pedido
                        </a>
                    </div>
                </div> <!--.BOTA-->

                <div class="col-sm-12 col-md-4">
                    <a href="pdf/¡LIQUIDACIÓN DEVENDI! AM20.pdf" target="_blank" class="">
                        <img src="img/catalogo/Devendi.png" alt="Catalogo andrea">
                    </a>

                    <div class="descripcion-contenido">
                        <p>sandalias</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <a href="#site-formulario">
                            <i class="fas fa-caret-square-down"></i>
                            Realizar pedido
                        </a>
                    </div>
                </div> <!--.SANDALIAS-->

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
                                        <option value="AND">Andrea</option>
                                        <option value="DEB">Debendi</option>
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
  
    <?php include_once 'includes/templates/footer.php'; ?>
  

    <script  src="js/js/index.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>