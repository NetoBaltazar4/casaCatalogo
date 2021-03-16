<?php 
  include("conexion.php");
   
    if (isset($_POST['opcionPrecio'])) {

      $opcionPrecio=$_POST['opcionPrecio'];
      $var1='opcionPrecio';

    if(strcmp($opcionPrecio, $var1) === 0){
      
      $talla=$_POST['talla'];
      $marca=$_POST['marca'];
      $modelo=$_POST['modelo'];

        $consulta = mysqli_query($conn,"SELECT precio FROM catalogo WHERE marca = '$marca' AND modelo = '$modelo' AND corrida = '$talla'");

       $extraido= mysqli_fetch_array($consulta);
       if(empty($extraido)){
         echo "MAL";
       } else{
        echo "".$extraido['precio'];
       }
    }
       
    } 
    else if(isset($_POST['buscaTalla'])){

      $buscaTalla=$_POST['buscaTalla'];
      $var2='buscaTalla';

      if(strcmp($buscaTalla, $var2) === 0){

      $marca=$_POST['marca'];
      $modelo=$_POST['modelo'];

      $consulta = mysqli_query($conn,"SELECT DISTINCT corrida FROM catalogo WHERE marca = '$marca' AND modelo = '$modelo'");

      $extraido= mysqli_fetch_array($consulta);
      if(empty($extraido)){
        echo "MAL";
        //print_r ($extraido);
      } else{
        echo json_encode($extraido);
      }
    }
  } else if(isset($_POST['passANDemail'])){

   
    $email = $_POST['email'];
    $password = $_POST['password'];

    $consulta = mysqli_query($conn,"SELECT email_user,password_user FROM registro_cuenta WHERE email_user = '$email' AND password_user = '$password'");

    $extraido= mysqli_fetch_array($consulta);
    if(empty($extraido)){
      echo "MAL";
      //print_r ($extraido);
    } else{
      echo json_encode($extraido);
    }
   
  }else if(isset($_POST['obtenerEmail'])){
 
    $buscaTalla=$_POST['obtenerEmail'];
    $var2='obtenerEmail';


    if(strcmp($buscaTalla, $var2) === 0){

    $email = $_POST['email'];

    $consulta = mysqli_query($conn,"SELECT email_user FROM registro_cuenta WHERE email_user = '$email'");

    $extraido= mysqli_fetch_array($consulta);
    if(empty($extraido)){
      echo "MAL";
      //print_r ($extraido);
    } else{
      echo json_encode($extraido);
    }

    }
    

  }
?>