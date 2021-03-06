    <?php include_once 'includes/templates/header.php';?>

    <section class="contenedor">
        <div class="site-contacto">
            <h3 class="centrar-texto sign-up" ><span>SIGN </span>UP</h3>
            <div class="logo-registrar">
                <img src="Img/La casa del catalogo2.0.png" alt="Logo casa del catalogo" width="20%">
            </div>
            
            <div class="contacto">
                    <form action="validarRegistro.php" id="formulario" class="formulario-registrar" method="post">
                            <div class="row justify-content-center">
                                <div class="campo-contacto col-md-12">
                                    <i class="far fa-user"></i>
                                    <input type="text" id="nombre-registrar" placeholder="Nombre" name="nombre" class="fake">
                                </div>
                                <div class="campo-contacto col-md-12">
                                    <i class="far fa-user"></i>
                                    <input type="text" id="ap-registrar" placeholder="Apellido Paterno" name="ap-registrar" class="fake">
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="campo-contacto col-md-12">
                                        <i class="far fa-user"></i>
                                        <input type="text" id="am-registrar" placeholder="Apellido Materno" name="am-registrar" class="fake">
                                </div>
                            </div>
                          
                            <div class="row justify-content-center">
                                <div class="campo-contacto col-md-12">
                                    <i class="fas fa-at"></i>
                                    <input type="email" id="email-registrar" placeholder="Email" name="email" class="fake">
                                </div>
                                <div class="campo-contacto col-md-12">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" id="password-registrar" placeholder="Password" name="password" class="password-registrar fake">
                                    <i class="fas fa-eye-slash mostrar-password" id="mostrar-password"></i>
                                </div>
                                
                            </div>

                            <div class="row justify-content-center">
                                <div class="campo-contacto col-md-12">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" id="password-confirmar" placeholder="Confirmar password" name="password-confir" class="password-confirmar fake">
                                    <i class="fas fa-eye-slash mostrar-confirmar-password" id="mostrar-confirmar-password"></i>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="boton-registrar">
                                    <button type="submit" id="btn-registrar" class="btn btn-dark" name="submit" >Registrar</button>
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