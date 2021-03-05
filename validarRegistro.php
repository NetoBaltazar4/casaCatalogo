
<?php require_once 'includes/templates/header.php';?>

<?php if(isset($_POST['submit'])): 

///variables globales 
     $banNombre = 0;
     $banAp = 0;
     $banAm = 0;
     $banEmail = 0;
     $banPassword = 0;
/////Validacion del nombre 
     if(isset($_POST['nombre'])){
          $nombre = $_POST['nombre'];
          if(preg_match('/^([A-ZÁÉÍÓÚ a-záéíóú]{4,20})*$/',$nombre)){
                 $nombreFilter = filter_var($nombre, FILTER_SANITIZE_STRING);
                 if(strlen($nombreFilter)>0 && trim($nombreFilter)){
                    //   echo 'Paso la validacion: '.$nombreFilter;
                      $banNombre = 1;

                 }else{
                    echo 'Ingresa tu nombre correctamente';
                    return;
                 }

               ////VALIDACION FUERTE
               // if((filter_has_var(INPUT_POST,'nombre') && (strlen(filter_input(INPUT_POST,'nombre'))>0))){
               //      echo 'Tu nombre es: '.$nombre;


               // }
               

          }else{
               //Enviar mensaje al usuario del nombre esta mal escrito
               echo 'Favor de ingresar tu nombre';
               return;

          }

     }

     if(isset($_POST['ap-registrar'])){
          $ap = $_POST['ap-registrar'];
          if(preg_match('/^([A-ZÁÉÍÓÚ a-záéíóú]{4,20})*$/', $ap)){
               $apFilter = filter_var($ap, FILTER_SANITIZE_STRING);
               if(strlen($apFilter)>0 && trim($apFilter)){
                    // echo 'Paso la validacion del apellido: '.$apFilter;
                    $banAp = 1;

               }else{
                    echo 'Ingresa tu Apellido correctamente';
                    return;
               }
          }else{
               echo 'Favor de ingresar tu Apellido Paterno Correctamente';
               return;

          }
     }

     //////VAlidando el apellido materno
     if(isset($_POST['am-registrar'])){
          $am=$_POST['am-registrar'];
          if(preg_match('/^([A-ZÁÉÍÓÚ a-záéíóú]{4,20})*$/', $am)){
               $amFilter = filter_var($am, FILTER_SANITIZE_STRING);

               if(strlen($amFilter) && trim($amFilter)){
                    // echo 'Paso la validacion '.$amFilter;
                    $banAm = 1;
               }else{
                    echo 'Ingresa tu Apellido correctamente';
                    return;
               }
          }else{
               echo 'Favor de ingresar tu apellido correctamente';
               return;
          }

     }

     ////Validando Email
     if(isset($_POST['email'])){
          $email = $_POST['email'];
          if(preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)){
               $emailFilter = filter_var($email, FILTER_SANITIZE_STRING);
               if(strlen($emailFilter)>0 && trim($email)){
                    // echo 'Paso la validacion del correo';
                    $banEmail = 1;

               }else{
                    echo 'ingrese un correo valido';
                    return;
               }
               

          }else{
               echo 'Ingresa un correo valido';
               return;
          }
     }
     
     /////Validar Password
     if(isset($_POST['password'])){
          $password = $_POST['password'];
          if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&.;:,]).{8,20}$/',$password)){
          //     echo 'Contrasenia correcta';
              $banPassword = 1;

          }else{
               echo 'Ingresa una contrasenia valida';
               return;
          }
     }

     if($banNombre == 1 && $banAp == 1  && $banAm == 1 && $banEmail == 1 && $banPassword == 1){

          try{
               /////Mandamos llamr la conexion a base de datos 
               require_once('includes/funciones/conexion.php');
               $sql = 'SELECT * from registro_cuenta WHERE id_cuenta = (SELECT MAX(id_cuenta) from registro_cuenta)';
               $resp = $conn->query($sql);
               $idCuenta = $resp->fetch_assoc();

               ///Se obtiene  el ultimo registro agregado a la base de datos de registrar cuenta
               $id =  $idCuenta['id_cuenta'];
               $id = $id+1;
               $nombre = $_POST['nombre'];
               $ap_user = $_POST['ap-registrar'];
               $am_user = $_POST['am-registrar'];
               $email = $_POST['email'];
               $password = $_POST['password'];

               $stmt = $conn->prepare("INSERT INTO registro_cuenta (id_cuenta,nombre_user,ap_user,am_user,email_user,password_user) VALUES (?,?,?,?,?,?)");
               $stmt->bind_param("isssss",$id, $nombre,$ap_user,$am_user,$email,$password);
               $stmt->execute();
               $stmt->close();
                  
             
               $conn->close();


          }catch(Exception $e){

               $error = $e->getMesage();
              

          }

     }


?>
     <pre>
          <?php
               // var_dump($_POST);
          ?>
     </pre>
<?php endif;?>

<?php require_once 'includes/templates/footer.php';?>
