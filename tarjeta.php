
   
    <?php include_once 'includes/templates/headerAdmin.php';?>

    <!-- Tipo de header que se colocara en esta seccion  -->

    <section class="site-domicilio">
        <div class="contenedor">
            <div class="site-base">
                <h4 class="centrar-texto">Ingresa los datos correspondientes de la tarjeta</h4>
                <form action="#" id="formulario-tarjeta"></form>
                    <div class="tarjeta-campos">
                        <div class="img-tarjeta">
                            <i class="fas fa-credit-card"></i>
                        </div>
                            <div class="form-style">
                                <select name="tipo-tarjeta" id="tarjeta-tipo">
                                    <option value="0">Selecciona el tipo de tarjeta</option>
                                    <option value="1">Credito</option>
                                    <option value="2">Debito</option>
                                </select>
                                
                            </div>
                            <div class="form-style">
                                
                                <input type="number" placeholder="Numero de tarjeta">
                            </div>
                                
                            <div class="form-style input">
                                
                                <input type="text" placeholder="Nombre titular" name="titular" id="titular">
                            </div>

                            <div class="form-style input">
                                
                                <input type="text" placeholder="Apellido Paterno" name="ap-tarjeta" id="ap-tarjeta">
                            </div>

                            <div class="form-style input">
                                
                                <input type="text" placeholder="Apellido Materno" name="am-tarjeta" id="am-tarjeta">
                            </div>

                            <div class="form-style input">
                                <select name="mes-tarjeta" id="mes-tarjeta">
                                    <option value="0">MM</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="6">06</option>
                                    <option value="7">07</option>
                                    <option value="8">08</option>
                                    <option value="9">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="form-style input">
                                <select name="year-tarjeta" id="year-tarjeta">
                                    <option value="0">AAAA</option>
                                    <option value="1">2020</option>
                                    <option value="2">2021</option>
                                    <option value="3">2022</option>
                                    <option value="4">2023</option>
                                    <option value="5">2024</option>
                                    <option value="6">2025</option>
                                    <option value="7">2026</option>
                                    <option value="8">2027</option>
                                    <option value="9">2028</option>
                                    <option value="10">2029</option>
                                    <option value="11">2030</option>
                                </select>
                              
                            </div>
                            <div class="form-style input">
                                <input type="text" placeholder="Codigo" maxlength="3">
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