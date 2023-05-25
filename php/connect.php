<?php
   try{
      
      $host = "localhost";
      $dbName = "data";
      $user = "root";
      $password = "";
      
      $connect = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
      $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // if ($connect) {
      //    echo "<h1>Database is connected.</h1>";
      // } else {
      //    echo "Database is not connected yet!<br>Please connect to the database.";
      // }

   } catch (PDOException $error){
      echo $error->getMessage();
   }
?>