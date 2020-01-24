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
    <title>Checkout</title>
</head>
<body class="text-center">
    <?php 
        $_SESSION["street"];
        $_SESSION["city"];
        $_SESSION["state"];
        $_SESSION["zip"];
    ?>
    <header>
        <h1>Checkout:</h1>
    </header>
    <?php 
        if(isset($_POST['submit'])) { 
            
        }
    ?>
    <form method="post">
        <div class="row">
            <div class="col"></div>
            <div class="col"><label for="street">Street: </label> <input type="text" name="street" size="30"><br></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col"><label for="city">City: </label> <input type="text" name="city"><br></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col"><label for="state">State: </label> <input type="text" name="state"><br></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col"><label for="zip">ZIP Code: </label> <input type="text" name="zip"></div>
            <div class="col"></div>
        </div>
    </form>
    <div class="row">
        <div class="col"><button><a href="view-cart.php">View Cart</a></button></div>
        <div class="col"><button><a href="confirmation.php">Confirmation Page</a></button></div>
    </div>
</body>
</html>