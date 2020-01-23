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
    <title>Check Out Cart</title>
</head>
<body class="text-center">
    <header>
        <h1>Shopping Cart:</h1>
    </header>
    <div class="row p-3">
        <div class="col p-3"><p>Shirt</p></div>
        <div class="col p-3"><p>Quantity: <?php echo $_SESSION["shirts"] ?></p></div>
    </div>
    <div class="row p-3">
        <div class="col p-3"><p>Pants</p></div>
        <div class="col p-3"><p>Quantity: <?php echo $_SESSION["pants"] ?></p></div>
    </div>
    <div class="row p-3">
        <div class="col p-3"><p>Shorts</p></div>
        <div class="col p-3"><p>Quantity: <?php echo $_SESSION["shorts"] ?></p></div>
    </div>
</body>
</html>