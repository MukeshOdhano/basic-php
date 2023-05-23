<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/style.css">

   <title><?php echo "POST"; ?></title>
</head>

<?php 
   $topic = "Super Goals"; 

     
?>

<body>

   <h1>
      <?php echo "$topic";?>
   </h1>
   <div class="container">
      <form method= "POST" action="/super-goals/post.php" >
         <div class="details">
            <label>Name:</label>
            <input type="text" placeholder="Name" name="name" />
         </div>

         <div class="details">
            <label>Email:</label>
            <input type="email" value="@gmail.com" placeholder="email" name="email" />
         </div>

         <input type="submit" name="submit">
      </form>
   </div>
   <div class="data">
      <h2>   
         <?php
            $name;
            $email;
            if(isset($_POST["submit"])){
               $name = $_POST["name"];
               $email = $_POST["email"];
               
               // echo "Name: ". $name ."<br/>Email: ". $email ."<br>";
               echo '<a href="get.php?name='. $name .'&mail='. $email. '" target="_blank">Get Data</a>';
            }
                
         ?>
         
      </h2>
   </div>
   
</body>
</html>