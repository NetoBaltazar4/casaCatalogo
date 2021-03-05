    <?php include_once 'includes/templates/header.php'; ?>


    <main class="seccion">
        <div class="contenedor">
            <h1 class="centrar-texto spot">Rebajas de tus productos favoritos</h1>
            <div class="row separador centrar-texto">

                <div class="col-sm-12 col-md-12">
                    <a href="pdf/¡LIQUIDACIÓN DEVENDI! AM20.pdf" target="_blank">
                        <img src="img/catalogo/Devendi.png" alt="Catalogo andrea">
                    </a>

                    <div class="descripcion-contenido">
                        <p>rebajas</p>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <a href="#site-formulario">
                            <i class="fas fa-caret-square-down"></i>
                            Encargar pedido
                        </a>
                    </div>
                </div><!--.rebajas-->
                

               
            </div>

        </div>
    </main> <!--contenido principal-->

       <div class="site-formulario" id="site-formulario">
        <div class="contenedor">
               <div class="contenido-formulario">
                    <h2 class="centrar-texto">llena el formulario para realizar tu pedido</h2>
                   <div class="style-campo">
                    <form  id="formulario-index" action="includes/funciones/validaciones.php" method="post">
                        <div class="campos">
                            <div class="row">
                                <div class="col-md-12">
                                <select name="marcasel" id="marcasel">
                                        <option disabled selected  value="">Selecciona una marca</option>
                                        <?php include ("includes/funciones/conexion.php");
                                        $result = mysqli_query($conn, "SELECT DISTINCT marca FROM catalogo");
                                        while($extraido= mysqli_fetch_array($result)){
                                        ?>
                                        <option value="<?php echo "".$extraido['marca'] ?>" name = "marcaRes" ><?php echo "".$extraido['marca'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                    <input type="text" placeholder="Ingresa el modelo" id="modelo" name="modelo">
                               


                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                 <label for="talla" class="talla">Selecciona la talla</label>
                                    <select name="lista-talla" id="lista-talla">
                                    <option disabled selected  value="2">Selecciona el rango</option>
                                        <?php include ("includes/funciones/conexion.php");
                                        $result = mysqli_query($conn, "SELECT DISTINCT corrida FROM catalogo");
                                        while($extraido= mysqli_fetch_array($result)){
                                        ?>
                                        <option value="<?php echo "".$extraido['corrida'] ?>" name = "tallaRes" ><?php echo "".$extraido['corrida'] ?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>

                                    <p class="precio"><span id="precio" name="precio">$
                                    <span id="precio2" name="precio2"></span>
                                    </span>
                                    </p>
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
    <script src="js/js/acciones.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>