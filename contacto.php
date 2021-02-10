    <?php include_once 'includes/templates/header.php'; ?>

    <section class="contenedor">
        <div class="site-contacto">
            <h3 class="centrar-texto">llena el formulario de contacto y un asesor te atendera en brevedad</h3>
            <div class="contacto">
                <form action="#" id="formulario">
                    <div class="row justify-content-center">
                        <div class="campo-contacto col-md-12">
                            <i class="far fa-user"></i>
                            <input type="text" id="nombre-contacto" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="campo-contacto col-md-12">
                            <i class="far fa-user"></i>
                            <input type="text" id="apellido-contacto" placeholder="Apellido" name="apellido">
                        </div>
                    </div>
                       
                    <div class="row justify-content-center">
                        <div class="campo-contacto col-md-12">
                            <i class="fas fa-at"></i>
                            <input type="email" id="email-contacto" placeholder="Email" name="email">
                        </div>
                        <div class="campo-contacto col-md-12">
                        <i class="fas fa-phone"></i>
                            <input type="tel" id="phone-contacto" placeholder="Telefono / Celular" name="phone">
                        </div>

                    </div>
    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="icono-mensaje">
                                    <i class="fas fa-envelope"></i>
                                    <textarea placeholder="Mensaje" id="mensaje"></textarea>
                                </div>
                            </div>
                        </div>
                      
                        <div class="row justify-content-center">
                            <button type="submit" id="btnEnviar" class="btn btn-dark">Enviar</button>
                        </div>
                        
                </form>
        </div>
         

        </div>
    </section>


    <?php include_once 'includes/templates/footer.php'; ?>


    <script src="js/js/contacto.js" type="module"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>