<?php
   require "../connect.php" 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../style.css">

   <title>PHP Data Object | PDO</title>
</head>

<body>
   <section class="main">
      <h1>
         <?php
            // $data = $connect->prepare("INSERT INTO USERS(NAME, AGE) VALUES(?, ?)");
            // $data->execute(array(
            //    'Kanwal',
            //    39
            // ));
            
            echo $connect->lastInsertId();   
            
         ?>
      </h1>

   </section>
</body>
</html>
