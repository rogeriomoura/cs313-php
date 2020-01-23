<?php
   // Start the session
   session_start();
?>
<!DOCTYPE html>
<html>
   <body>
      <?php
         // remove previous session variable
         session_unset();
         // Set session variables
         $_SESSION["favcolor"] = "green";
         $_SESSION["favanimal"] = "dolphin";
         // echo that variables have been set
         if(!isset($_SESSION["favcolor"])) {
            echo "Fav color has not been set.";
         }
         else {
            echo "Fav color has been set to " . $_SESSION["favcolor"];
         }
         if(!isset($_SESSION["favanimal"])) {
            echo "Fav animal has not been set.";
         }
         else {
            echo "Fav color has been set to " . $_SESSION["favanimal"];
         }
?>
      <a href="thursdaySession2.php">Check the variables on another page</a>

      <?php // set session variables using a form ?>
   </body>
</html>