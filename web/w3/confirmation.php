<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="shopping-cart.css">
    <title>Confirmation Page</title>
</head>
<body class="text-center">
    <header>
        <h1>Confirmation:</h1>
    </header>
    <div class="row">
        <div class="col">
            <p>Items:</p>
            <?php if(isset($_SESSION["shirts"]) && $_SESSION["shirts"] > 0) { ?>
                <p>Shirts: <?=$_SESSION["shirts"]?></p>
            <?php } ?>
            <?php if(isset($_SESSION["pants"]) && $_SESSION["pants"] > 0) { ?>
                <p>Pants: <?=$_SESSION["pants"]?></p>
            <?php } ?>
            <?php if(isset($_SESSION["shorts"]) && $_SESSION["pants"] > 0) { ?>
                <p>Shorts: <?=$_SESSION["shorts"]?></p>
            <?php } ?>
        </div>
        <div class="col">
            <p>Address:</p>
            <?php if(isset($_SESSION["street"])) { ?>
                <p>Street: <?=$_SESSION["street"]?></p>
            <?php } ?>
            <?php if(isset($_SESSION["city"])) { ?>
                <p>City: <?=$_SESSION["city"]?></p>
            <?php } ?>
            <?php if(isset($_SESSION["state"])) { ?>
                <p>State: <?=$_SESSION["state"]?></p>
            <?php } ?>
            <?php if(isset($_SESSION["zip"])) { ?>
                <p>ZIP Code: <?=$_SESSION["zip"]?></p>
            <?php } ?>
        </div>
    </div>
</body>
</html>