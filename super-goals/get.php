<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/style.css">

   <title><?php echo "get"; ?></title>
</head>

<?php 
   $topic = "Super Goals"; 

   $name = "";
   $mail = "";
   if(isset($_GET["name"]) AND isset($_GET["mail"])){
      $name = $_GET["name"];
      $mail = $_GET["mail"];
     
   }         
?>

<body>

   <h1>
      <?php echo "$topic";?>
   </h1>
   <div class="container">
      <h2>   
         <!-- <a href ="get.php?lang=php" target="_blank" >Hello</a> -->
         <?php
            echo "Name: ". $name ."<br>". "email: $mail"; 
         ?>
      </h2>
   </div>
   
</body>
</html>