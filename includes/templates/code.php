<?php
                     try{

                        require_once('includes/funciones/conexion.php');
                    //Generar el id aleatorio
                       // $id = 45678;
                        // $nombreUser = $_POST['nombre'];

                    //     echo $nombreUser;
                         $sql = "SELECT * FROM registro_cuenta";
                         $resultado = $conn->query($sql);

                        }catch(\Exception $e){
                            echo $e->getMessage();
                        }
                 ?>

                     <?php $evento = $resultado->fetch_assoc();?>


                    <pre>
                      <?php  echo $evento['nombre_user']?>
                    </pre>
                

                <?php
                     $conn->close();
                ?>
