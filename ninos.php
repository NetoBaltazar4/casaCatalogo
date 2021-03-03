<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
       $(function(){
           $("#lista-talla").change(function(){
           
            if(!$('#marcasel').val()){
                alert("Selecciona una marca");
            } 
            else if(!$('#modelo').val()){
                alert("Ingresa un modelo");
            } else{

               var tallares = $("#lista-talla option:selected").text();
               var marcares = $("#marcasel option:selected").text();
               var modelo = $("#modelo").val();
              
               $.ajax({
                    type:"POST",
                    url:"includes/funciones/datos.php",
                    data: "talla="+tallares+"&marca="+marcares+"&modelo="+modelo,
                    
                    success:function(r){
                        if(Object.entries(r).length==0){
                            alert("Error al ingresar los datos");
                        }
                        $('#precio').html("$ "+r);
                    }
                });  

            }   
            
           })

           $("#marcasel").change(function(){
            if(!$('#modelo').val()){
                alert("Ingresa un modelo");
            } else{
                $('#lista-talla').removeAttr('disabled');
            }
           })
           
           $("#modelo").blur(function(){
            
    		if(!$('#modelo').val()){
                alert("Ingresa un modelo");
            } else if(!$('#marcasel').val()){
                alert("Selecciona una marca");
            } else{
                
                
                $('#lista-talla').removeAttr('disabled');
            }
	       })
       });
    </script>
    </head>
    <?php include_once 'includes/templates/header.php';?>

    <main class="seccion">
        <div class="contenedor">
            <h1 class="centrar-texto spot">Todo para niños a un solo click</h1>
            <div class="row separador centrar-texto">

                <div class="col-sm-12 col-md-12">
                    <a href="pdf/¡LIQUIDACIÓN DEVENDI! AM20.pdf" target="_blank">
                        <img src="img/catalogo/Devendi.png" alt="Catalogo andrea">
                    </a>

                    <div class="descripcion-contenido">
                        <p>niños</p>
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
                </div><!--.ninos-->
                

               
            </div>

        </div>
    </main> <!--contenido principal-->



    <div class="site-formulario" id="site-formulario">
        <div class="contenedor">
               <div class="contenido-formulario">
                    <h2 class="centrar-texto">llena el formulario para realizar tu pedido</h2>
                   <div class="style-campo">
                    <form  id="formulario-index">
                    <div class="campos">
                            <div class="row">
                                <div class="col-md-12">
                                    <select name="marca" id="marca">
                                        <option disabled selected  value="">Selecciona una marca</option>
                                        <?php include ("includes/funciones/conexion.php");
                                        $result = mysqli_query($conn, "SELECT DISTINCT marca FROM catalogo");
                                        while($extraido= mysqli_fetch_array($result)){
                                        
                                        ?>
                                        <option value="AND"><?php echo "".$extraido['marca'] ?></option>
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
                                    <select name="lista-talla" id="lista-talla" disabled>
                                      <?php include ("includes/funciones/conexion.php");
                                        $result = mysqli_query($conn, "SELECT DISTINCT corrida FROM catalogo");
                                        while($extraido= mysqli_fetch_array($result)){
                                        ?>
                                        <option value="" name = "tallaRes" ><?php echo "".$extraido['corrida'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                    <p class="precio"><span id="precio" name="precio">$</span></p>
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>