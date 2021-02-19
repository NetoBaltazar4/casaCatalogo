

<?php if(isset($_POST['submit'])): 
     $id = 5678;
     $nombre = $_POST['nombre'];
     $ap_user = $_POST['ap-registrar'];
     $am_user = $_POST['am-registrar'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     echo $nombre.$ap_user.$am_user.$email.$password;


     try{

          require_once('includes/funciones/conexion.php');
          $stmt = $conn->prepare("INSERT INTO registro_cuenta (id_cuenta,nombre_user,ap_user,am_user,email_user,password_user) VALUES (?,?,?,?,?,?)");
          $stmt->bind_param("isssss",$id, $nombre,$ap_user,$am_user,$email,$password);
          $stmt->execute();
          $stmt->close();
          $conn->close();



     }catch(Exception  $e){

          $error = $e->getMesage();


     }


?>
     <pre>
          <?php
               var_dump($_POST);
          ?>
     </pre>
<?php endif;?>
