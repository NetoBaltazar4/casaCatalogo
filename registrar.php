    <?php include_once 'includes/templates/header.php';?>

    <section class="contenedor">
        <div class="site-contacto">
            <h3 class="centrar-texto sign-up" ><span>SIGN </span>UP</h3>
            <div class="logo-registrar">
                <img src="Img/La casa del catalogo2.0.png" alt="Logo casa del catalogo" width="20%">
            </div>
            <div class="contacto">
                    <form action="#" id="formulario" class="formulario-registrar">
                            <div class="row justify-content-center">
                                <div class="campo-contacto col-md-12">
                                    <i class="far fa-user"></i>
                                    <input type="text" id="nombre-registrar" placeholder="Nombre" name="nombre">
                                </div>
                                <div class="campo-contacto col-md-12">
                                    <i class="far fa-user"></i>
                                    <input type="text" id="ap-registrar" placeholder="Apellido Paterno" name="ap-registrar">
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="campo-contacto col-md-12">
                                        <i class="far fa-user"></i>
                                        <input type="text" id="am-registrar" placeholder="Apellido Materno" name="am-registrar">
                                </div>
                            </div>
                          
                            <div class="row justify-content-center">
                                <div class="campo-contacto col-md-12">
                                    <i class="fas fa-at"></i>
                                    <input type="email" id="email-registrar" placeholder="Email" name="email">
                                </div>
                                <div class="campo-contacto col-md-12">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" id="password-registrar" placeholder="password" name="password">
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="campo-contacto col-md-12">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" id="password-confirmar" placeholder="Confirmar password" name="password">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="boton-registrar">
                                    <button type="submit" id="btn-registrar" class="btn btn-dark">Registrar</button>
                                </div>
                
                            </div>
                    </form>
                </div>


        </div>
    </section>

    <?php include_once 'includes/templates/footer.php';?>
  

    <script src="js/js/registrar.js" type="module"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>