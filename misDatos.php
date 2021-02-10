

 <?php include_once 'includes/templates/headerUser.php';?>

    <section class="site-domicilio">
        <div class="contenedor">
            <div class="site-base">
                <form action="#" id="form-mis-datos">
                    <div class="campos-form mis-datos">
                            <section class="separar-contenido">
                                <label for="cuenta">Datos Cuenta</label>
                                    <div class="campo">
                                        <i class="fas fa-id-badge"></i>
                                        <input type="text" placeholder="Id Cuenta" name="idCuenta" id="id-cuenta">
                                    </div>
                                    <div class="campo">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Nombre" name="nombre" id="nombre-cuenta">
                                    </div>
                                        
                                    <div class="campo">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Apellido Paterno" name="paterno-cuenta" id="paterno-cuenta" >
                                    </div>

                                    <div class="campo">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Apellido Materno" name="materno-cuenta" id="materno-cuenta">
                                    </div>

                                    <div class="campo">
                                        <i class="fas fa-mail-bulk"></i>
                                        <input type="email" placeholder="Correo" name="codigo postal" id="email-cuenta">
                                    </div>

                                    <!-- <div class="campo">
                                        <i class="fas fa-map-marked-alt"></i>
                                        <input type="text" placeholder="Tipo User" name="Tipo User">
                                    </div> -->
                            </section> <!--Datos cuenta -->

                            <section class="separar-contenido">
                                <label for="cuenta">Cliente</label>
                                    <div class="campo">
                                        <i class="fas fa-id-badge"></i>
                                        <input type="text" placeholder="Id Cliente" name="idCliente" id="id-cliente" >
                                    </div>
                                    <div class="campo">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Nombre" name="nombre"  id="nombre-cliente">
                                    </div>
                                        
                                    <div class="campo">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Apellido Paterno" name="ap" id="ap-cliente">
                                    </div>

                                    <div class="campo">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Apellido Materno" name="materno" id="am-cliente">
                                    </div>

                            </section> <!--Datos Cliente -->

                             <section class="separar-contenido">
                                        <label for="domicilio">Domicilio</label>
                                            <div class="campo">
                                                <i class="fas fa-user"></i>
                                                <input type="text" placeholder="Nombre" name="nombre" id="domicilio" >
                                            </div>
                                            <div class="campo">
                                                <i class="fas fa-user"></i>
                                                <input type="text" placeholder="Apellido Paterno" name="paterno" id="ap-domicilio" >
                                            </div>
                                                
                                            <div class="campo">
                                                <i class="fas fa-user"></i>
                                                <input type="text" placeholder="Apellido Materno" name="materno" id="am-domicilio">
                                            </div>
                
                                            <div class="campo">
                                                <i class="fas fa-mail-bulk"></i>
                                                <input type="number" placeholder="Codipo Postal" name="codigo postal" id="cp-domicilio">
                                            </div>
                
                                            <div class="campo">
                                                    <i class="fas fa-map-marked-alt"></i>
                                                    <input type="text" placeholder="Estado" name="Estado" id="edo-domicilio">
                                            </div>
                    
                                            <div class="campo">
                                                    <i class="fas fa-city"></i>
                                                    <input type="text" placeholder="Ciudad" id="ciudad-domicilio">
                                            </div>
                                            <div class="campo">
                                                    <i class="fas fa-house-user"></i>
                                                    <input type="text" placeholder="Nombre Calle" id="calle-domicilio">
                                            </div>
                    
                                            <div class="campo">
                                                    <i class="fas fa-sort-numeric-up-alt"></i>
                                                    <input type="text" placeholder="Numero" id="numero-domicilio">
                                            </div>
                                            <div class="campo">
                                                    <i class="fas fa-archway"></i>
                                                    <input type="text" placeholder="Acentamiendo / Colonia" id="colonia-domicilio">
                                            </div>
                             </section> <!--Domicilio-->
                            
                            <button type="submit" class="btn btn-primary">Editar</button>
                            <button type="submit" class="btn btn-info">Guardar</button>
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