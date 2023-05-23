<?php
   session_start();

   $_SESSION["name"] = "Mukesh";
   $_SESSION["age"] = 21;
   $_SESSION["gender"] = "mail";

   // session_unset();
   // session_destroy();

   // echo "Now Sesion is destryed!";
?>
