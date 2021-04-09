
 <?php require_once 'includes/templates/headerAdmin.php'; ?>

    <section class="site-contenido">
        <div class="contenedor">
            <div class="menu">
               <div class="row centrar-texto"">
                   <div class="col-md-3">
                       <a href="#">
                         <i class="fas fa-user-friends"></i>
                        <p>gestionar Clientes</p>
                       </a>
                   </div><!--GESTIONAR CLIENTES-->
                   <div class="col-md-3">
                        <a href="gestionarProductos.html">
                         <i class="fas fa-store"></i>
                        <p>gestionar Productos</p>
                        </a>
                    </div><!--GESTIONAR PRODUDTOS-->
                    <div class="col-md-3">
                        <a href="#">
                         <i class="fas fa-hand-holding-usd"></i>
                        <p>gestionar ventas</p>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                         <i class="fas fa-cloud"></i>
                        <p> Respaldar y restaurar</p>
                        </a>
                    </div><!--RESPALDAR Y RESTAURAR-->
                </div>
               </div>

            </div>
        </div>
    </section>


    <?php include_once 'includes/templates/footerAdmin.php';?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/js/headerAdmin.js"></script>
</body>
</html>