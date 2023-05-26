<?php
   // session
   session_start();
   
   $name = "";
   $email = "";
   
   // post
   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST["email"];
   } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">

   <title>PHP Data Object | PDO</title>
</head>
<body>
   <div class="container">
      <?php
         echo "<form method='post' action='/post.php'>
            <label>Name
               <input type='text' name='name' placeholder='Name'/>
            </label>

            <label>Email
               <input type='email' name='email' placeholder='Emain' />
            </label>
         
            <input type='submit' name='submit' />
         </form>";
      ?>

      <div class="data">
         <?php
            echo "<h2>". 
                     $name."<br/>".$email
                  ."</h2>";
            if($name != ""){
               echo "<a href='get.php'>"."GO TO"."</a>";
            } else {
               echo "<h1>fill the form</h1>";
            }

            // session
            $_SESSION['NAME'] = $name;
            $_SESSION['EMAIL'] = $email;         
         ?>
      </div>
   </div>
</body>
</html>
