<?php 
  include("conexion.php");
  $talla=$_POST['talla'];
  $marca=$_POST['marca'];
  $modelo=$_POST['modelo'];
   
       $consulta = mysqli_query($conn,"SELECT precio FROM catalogo WHERE marca = '$marca' AND modelo = '$modelo' AND corrida = '$talla'");

       $extraido= mysqli_fetch_array($consulta);
       if(empty($extraido)){

       } else{
        echo "".$extraido['precio'];
       }
       
      
?>