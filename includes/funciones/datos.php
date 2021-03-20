<?php 
  include("conexion.php");
   
       if (isset($_POST['opcionPrecio'])) {

      $opcionPrecio=$_POST['opcionPrecio'];
      $var1='opcionPrecio';

    if(strcmp($opcionPrecio, $var1) === 0){

      //Preparamos La Sentencia
      $sentencia = $conn->prepare("SELECT precio FROM catalogo WHERE marca = ?  AND modelo = ? AND corrida = ?");
      
      //Extraemos datos
      $talla=$_POST['talla'];
      $marca=$_POST['marca'];
      $modelo=$_POST['modelo'];

      //Indicamos los valores pasados por referencia
      $sentencia->bind_param("sss", $marca, $modelo, $talla);

      if($sentencia->execute()){
	
        //Alamacenaos los datos de la consulta
        $sentencia->store_result();
        
        if($sentencia->num_rows == 0){		
          echo "MAL";
        }
        
        //Indicamos la variable donde se guardaran los resultados
        $sentencia->bind_result($res);
        
        //listamos todos los resultados
        while($sentencia->fetch()){
          echo "$res";
        }
        
        //Cerramos la conexion
        $sentencia->close();
        
      } else {
        exit('Error al realizar la consulta: '.$sentencia->close());
      }
    }
       
    } else if(isset($_POST['buscaTalla'])){

      $buscaTalla=$_POST['buscaTalla'];
      $var2='buscaTalla';

      if(strcmp($buscaTalla, $var2) === 0){

      //Preparamos La Sentencia
      $sentencia = $conn->prepare("SELECT corrida FROM catalogo WHERE marca = ?  AND modelo = ?");

      //Extraemos datos
      $marca=$_POST['marca'];
      $modelo=$_POST['modelo'];

      //Indicamos los valores pasados por referencia
      $sentencia->bind_param("ss", $marca, $modelo);

      if($sentencia->execute()){
	
        //Alamacenaos los datos de la consulta
        $sentencia->store_result();
        
        if($sentencia->num_rows == 0){		
          echo "MAL";
        }
        
        //Indicamos la variable donde se guardaran los resultados
        $sentencia->bind_result($res);

        //Inicialisamos variable i en 0 para derle valor al arreglo en el ciclo while
        $i=0;

        //Creamos arreglo
        $rawdata = array();

        //listamos todos los resultados para guardarlos en el arreglo
        while($sentencia->fetch()){
          $rawdata[$i] = $res;
          $i++;
        }

        //Transformamos el arreglo a formato JSON y lo enviamos
        echo json_encode($rawdata);
        
        //Cerramos la conexion
        $sentencia->close();
        
      } else {
        exit('Error al realizar la consulta: '.$sentencia->close());
      }
     
    }
  }  else if(isset($_POST['passANDemail'])){

   
    $email = $_POST['email'];
    $password = $_POST['password'];

    $consulta = mysqli_query($conn,"SELECT email_user,password_user FROM registro_cuenta WHERE email_user = '$email' AND password_user = '$password'");

    $extraido= mysqli_fetch_array($consulta);
    if(empty($extraido)){
      $dato = "next";
      echo json_encode($dato);
      
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
      $dato = "next";
      echo json_encode($dato);
    //  echo "MAL";
      //print_r ($extraido);
    } else{
      echo json_encode($extraido);
    }

    }
    

  }
?>