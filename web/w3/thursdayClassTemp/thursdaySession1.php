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
            echo "Fav color has not been set.<br>";
         }
         else {
            echo "Fav color has been set to " . $_SESSION["favcolor"] . "<br>";
         }
         if(!isset($_SESSION["favanimal"])) {
            echo "Fav animal has not been set.<br>";
         }
         else {
            echo "Fav color has been set to " . $_SESSION["favanimal"] . "<br>";
         }
?>
      <a href="thursdaySession2.php">Check the variables on another page</a>

      <h3>Just for kick, let'stry this with a form!</h3>
      <form action="" method="post">
         <input type="text" name="picture">
         <input type="submit" name="submit" value="Submit!">
      </form>
      <?php
         if(isset($_POST["submit"])) {
            $_SESSION["pictureUrl"] = $_POST["picture"];
         }
      ?>
   </body>
</html>