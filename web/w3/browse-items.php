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
    <title>Browse Items</title>
</head>
<body class="text-center">

    <?php
        $_SESSION["shirts"];
        $_SESSION["pants"];
        $_SESSION["shorts"];
    ?>
    <header>
        <h1>For sale:</h1>
    </header>

    <?php
        if(isset($_POST['buttonShirt'])) { 
            $_SESSION["shirts"] += 1;
        }
        if(isset($_POST['buttonPants'])) { 
            $_SESSION["pants"] += 1;
        }
        if(isset($_POST['buttonShorts'])) { 
            $_SESSION["shorts"] += 1;
        }
    ?>
    <form method="post">
        <div class="row p-3">
            <div class="col"></div>
            <div class="col"><p>Shirt</p></div>
            <div class="col"><p name="shirtPrice">price: $7.00</p></div>
            <div class="col"><button type="submit" name="buttonShirt">Add to cart</button></div>
            <div class="col"><p>Quantity: <?=$_SESSION["shirts"]?></p></div>
            <div class="col"></div>
        </div>
        <div class="row p-3">
            <div class="col"></div>
            <div class="col"><p>Pants</p></div>
            <div class="col"><p name="pantsPrice">price: $15.00</p></div>
            <div class="col"><button type="submit" name="buttonPants">Add to cart</button></div>
            <div class="col"><p>Quantity: <?=$_SESSION["pants"]?></p></div>
            <div class="col"></div>
        </div>
        <div class="row p-3">
            <div class="col"></div>
            <div class="col"><p>Shorts</p></div>
            <div class="col"><p name="shortsPrice">price: $10.00</p></div>
            <div class="col"><button type="submit" name="buttonShorts">Add to cart</button></div>
            <div class="col"><p>Quantity: <?=$_SESSION["shorts"]?></p></div>
            <div class="col"></div>
        </div>
    </form>
    <form action="view-cart.php">
        <button type="submit">Check Shopping Cart</button>
    </form>
</body>
</html>