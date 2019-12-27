<?php
    try{
      $conn = new PDO("mysql:host=localhost;dbname=scibase","root","");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "<p style='color: $color;'>Successful connection</p>";
    }
    catch(PDOException $e){
      echo $e->getMessage();
    }
?>
