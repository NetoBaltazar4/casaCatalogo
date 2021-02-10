

    <?php include_once 'includes/templates/headerUser.php';?>

    <section class="site-domicilio">
        <div class="contenedor">
            <div class="site-base">
                <form action="#" id="form-mi-bolsa">
                   <h4 class="centrar-texto">Mi Bolsa</h4>
                   <div class="contenedor-mi-bolsa">
                        <div class="linea-bolsa">
                            <label for="#">Pedido 1</label>
                            <div class="row mi-bolsa align-items-center">
                                <div class="col-md-2 img-cata">
                                    <img src="img/catalogo/andreaCatalogo.png" alt="img catalogo" width="70%">
                                </div>
                                <div class="col-md-8">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero praesentium ratione, 
                                        unt aperiam delectus itaque at voluptates quisquam corrupti aut eaque
                                        consequatur rerum aliquid, reprehenderit quo! Nemo labore hic blanditiis.
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" id="btn-eliminar-compra" class="btn btn-danger">X</button>
                                    <button type="submit" id="btn-eliminar-compra" class="btn btn-success">Pagar</button>

                                </div>
                            </div>  


                            <label for="">Pedido 2</label>
                            <div class="row mi-bolsa align-items-center">
                                <div class="col-sm-4 col-md-2 img-cata">
                                    <img src="img/catalogo/andreaCatalogo.png" alt="img catalogo" width="70%">
                                </div>
                                <div class="col-sm-4 col-md-8 ">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero praesentium ratione, 
                                        unt aperiam delectus itaque at voluptates quisquam corrupti aut eaque
                                        consequatur rerum aliquid, reprehenderit quo! Nemo labore hic blanditiis.
                                    </p>
                                </div>
                                <div class=" col-sm-4 col-md-2">
                                    <button type="submit" id="btn-eliminar-compra" class="btn btn-danger">X</button>
                                    <button type="submit" id="btn-eliminar-compra" class="btn btn-success">Pagar</button>

                                </div>
                            </div>  
                            
                            <div class="total-pagar">
                                
                                <form action="#">
                                    <div class="row  justify-content-end">
                                        <div class="col-md-3 col-sm-6">
                                           <button class="btn btn-success" type="submit" id="total-pagar">Total Pagar</button>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <input type="text" placeholder="$ 120.00">
                                        </div>

                                    </div>
                                   

                                </form>

                            </div>
                        </div>
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