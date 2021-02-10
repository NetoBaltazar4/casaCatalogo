
    <?php include_once 'includes/templates/headerUser.php';?>

    <section class="site-domicilio">
        <div class="contenedor">
            <div class="site-base">
                <h4 class="centrar-texto">Ingresa los datos del domicilio al que llegara tu pedido</h4>
                <form action="#" id="formulario-domicilio"></form>
                    <div class="campos-form">
                            <div class="campo">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Nombre" name="nombre">
                            </div>
                            <div class="campo">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Apellido Paterno" name="paterno">
                            </div>
                                
                            <div class="campo">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Apellido Materno" name="materno">
                            </div>

                            <div class="campo">
                                <i class="fas fa-mail-bulk"></i>
                                <input type="number" placeholder="Codipo Postal" name="codigo postal">
                            </div>

                        <div class="campo">
                                <i class="fas fa-map-marked-alt"></i>
                                <input type="text" placeholder="Estado" name="Estado">
                        </div>

                            <div class="campo">
                                <i class="fas fa-city"></i>
                                <input type="text" placeholder="Ciudad">
                            </div>
                            <div class="campo">
                                <i class="fas fa-house-user"></i>
                                <input type="text" placeholder="Nombre Calle">
                            </div>

                            <div class="campo">
                                <i class="fas fa-sort-numeric-up-alt"></i>
                                <input type="text" placeholder="Numero">
                            </div>
                            <div class="campo">
                                <i class="fas fa-archway"></i>
                                <input type="text" placeholder="Acentamiendo / Colonia">
                            </div>

                            <button type="submit" class="btn btn-secondary">Aceptar</button>
                    </div>
                </form>
            </div>
        </div>

    </section>

    <?php include_once 'includes/templates/footer.php';?>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>