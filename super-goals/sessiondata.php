<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/style.css">
   <title>Document</title>
   
   <style>
      .cotainer{
         position: relative;
         top: 0;
         left: 0;
      }
      span{
         font-size: 20px;
         font-weight: bold;
         color: #d02733;
         position: absolute;
         letter-spacing: 1px;
         top: 20px;
         left: 20px;
      }   
   </style>
</head>
<body>
   <div class="container">
      
      <span>
         <?php 
            date_default_timezone_set('Asia/Karachi');
            echo date("h:ma"). "<br/>". date('d-M-Y'); 
         ?>
      </span>
      <h2>
         <?php
            echo 
               $_SESSION['name']."<br/>".
               $_SESSION["age"]."<br>".
               $_SESSION['gender'];
         ?>
      </h2>
   </div>
</body>
</html>