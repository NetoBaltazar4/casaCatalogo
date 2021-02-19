<?php

     $conn = mysqli_connect('localhost:3307','root','');
     $db = 'catalogo';

     if(!$conn){
          echo $error -> $conn->connect_error;
     }

     mysqli_select_db($conn,$db);

?>