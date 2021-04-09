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
  } else if(isset($_POST['passANDemail'])){
    $buscaTalla=$_POST['passANDemail'];
    $var2='passANDemail';

    if(strcmp($buscaTalla, $var2) === 0){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $consulta = mysqli_query($conn,"SELECT  nombre_user FROM registro_cuenta WHERE email_user = '$email' AND password_user = '$password'");

    $extraido= mysqli_fetch_array($consulta);
    if(empty($extraido)){
      echo "MAL";
      //print_r ($extraido);
    } else{
      echo json_encode($extraido);
    }
  }
  } else if(isset($_POST['obtenerEmail'])){
 
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
    

  } else if (isset($_POST['ventaMenu'])) {

    $opcionPrecio=$_POST['ventaMenu'];
    $var1='ventaMenu';

  if(strcmp($opcionPrecio, $var1) === 0){

    $consulta = mysqli_query($conn,"SELECT t2.nombreCliente,t3.modeloVenta,t3.dia,t3.mes,t3.anio,t3.id_venta FROM compra AS t1 INNER JOIN cliente AS t2 ON t1.id_cliente_compra = t2.id_cliente INNER JOIN venta AS t3 ON t1.id_venta = t3.id_venta AND t3.visto = 1;");
   
    if(empty($consulta)){
      $dato = "next";
      echo json_encode($dato);
    } else{
      while($row = mysqli_fetch_array($consulta)) 
      { 
          $nombreCliente=$row['nombreCliente'];
          $modeloVenta=$row['modeloVenta'];
          $dia=$row['dia'];
          $mes=$row['mes'];
          $anio=$row['anio'];
          $idventa=$row['id_venta'];
          
      
          $clientes[] = array('nombreCliente'=> $nombreCliente, 'modeloVenta'=> $modeloVenta, 'dia'=> $dia, 'mes'=> $mes,
                              'anio'=> $anio, 'idventa'=> $idventa);
      
      }

      if(empty($clientes)){
        $dato = "next";
      echo json_encode($dato);
      } else {
        $json_string = json_encode($clientes);
      echo $json_string;
      }
      
          
    }
  }
     
  } else if (isset($_POST['ventaMenuActualiza'])) {

    $opcionPrecio=$_POST['ventaMenuActualiza'];
    $var1='ventaMenuActualiza';

  if(strcmp($opcionPrecio, $var1) === 0){

    $id=intval($_POST['id']);

    $consulta = mysqli_query($conn,"UPDATE venta SET visto = 0 WHERE id_venta = $id;");
   
  }
     
  }
?>