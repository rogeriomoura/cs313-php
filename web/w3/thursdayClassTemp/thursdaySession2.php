<?php 
   // start session
   session_start();
   // save session variables into local variables
   $c = $_SESSION["favcolor"];
   $a = $_SESSION["favanimal"];
?>
<h1>Your favorite animal is <?=$a?> and your favorite color is <?=$c?></h1>
<?php ?>