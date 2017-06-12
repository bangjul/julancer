<?php
   session_start();

   if(session_destroy()) {
   		session_destroy();
      header("Location: /oilancer/index.php");
   	//echo "<br><br><br>Logout succes";
   }

?>