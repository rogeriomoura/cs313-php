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
    <title>Shopping Cart</title>
</head>
<body class="text-center">

    <?php
        $_SESSION["shirts"] = 0;
        $_SESSION["pants"] = 0;
        $_SESSION["shorts"] = 0;
    ?>
    <header>
        <h1>For sale:</h1>
    </header>

    <?php
        if(isset($_POST['buttonShirt'])) { 
            $_SESSION["shirts"] += 1;
            // alert("HERE");
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
            <div class="col p-3"><p>Shirt</p></div>
            <div class="col p-3"><p name="shirtPrice">price: $7.00</p></div>
            <div class="col p-3"><button type="submit" name="buttonShirt">Add to cart</button></div>
            <div class="col p-3"><?php echo "This is SESSION[shirts]" . $_SESSION["shirts"] ?></div>
        </div>
        <div class="row p-3">
            <div class="col p-3"><p>Pants</p></div>
            <div class="col p-3"><p name="pantsPrice">price: $15.00</p></div>
            <div class="col p-3"><button type="submit" name="buttonPants">Add to cart</button></div>
            <div class="col p-3"><?php echo "This is SESSION[pants]" . $_SESSION["pants"] ?></div>
        </div>
        <div class="row p-3">
            <div class="col p-3"><p>Shorts</p></div>
            <div class="col p-3"><p name="shortsPrice">price: $10.00</p></div>
            <div class="col p-3"><button type="submit" name="buttonShorts">Add to cart</button></div>
            <div class="col p-3"><?php echo "This is SESSION[shorts]" . $_SESSION["shorts"] ?></div>
        </div>
        <button action="">Check Shopping Cart</button>
    </form>
</body>
</html>