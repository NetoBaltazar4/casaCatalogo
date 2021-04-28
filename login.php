
    <?php  include_once 'includes/templates/header.php';?>

    <section class="contenedor">
        <div class="site-contacto">
            <div class="imagen-logo">
                <img src="img/La casa del catalogo2.0.png" alt="logo" width="20%">
            </div>
            <div class="contacto">
                <form  id="formulario" method="post">
                    <div class="row justify-content-center">
                        <div class="campo-contacto col-md-12">
                            <i class="fas fa-at"></i>
                            <input type="email" id="email" placeholder="Email" name="email">                           
                        </div>
                        <div class="campo-contacto col-md-12 ">
                            <i class="fas fa-lock"></i>
                           <input type="password" id="password" placeholder="password" name ='password' class="password-login">
                           <i class="fas fa-eye-slash mostrar-password-login" id="password-login"></i>
                        </div>
                    </div>
                       
    
                    <div class="row justify-content-center">
                        <div class="boton-login">
                            <button type="submit" id="btn-login" class="btn btn-dark" name="submit">Login</button>
                        </div>
                    </div>
                      
                        <div class="seccion-info">
                            <div class="cuenta">
                                <p>No tienes cuenta? <span> <a href="registrar.php">Crear Cuenta</a></span> </p>
                            </div>
                            <div class="recuperar-password">
                                <p>Ovidaste tu contraseña? <span> <a href="#">Recuperar contraseña</a> </span> </p>
    
                            </div>
                        </div>
                      
                 <!-- Codigo php -->
                </form>
                

            </div>
        
        </div>
    </section>

    <?php include_once 'includes/templates/footer.php'; ?>
  

    <script src="js/js/login.js" type="module"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>