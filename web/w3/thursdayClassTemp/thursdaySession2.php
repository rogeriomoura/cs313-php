<?php 
   // start session
   session_start();
   // save session variables into local variables
   $c = $_SESSION["favcolor"];
   $a = $_SESSION["favanimal"];
?>
<h1>Your favorite animal is <?=$a?> and your favorite color is <?=$c?></h1>

<?php if(isset($_SESSION["pictureUrl"])){ ?>
   <h3>Again, just for kicks, from a form!</h3>
   <img src="<?=$_SESSION["pictureUrl"]?>" alt="A Cookie!";>
<?php } ?>