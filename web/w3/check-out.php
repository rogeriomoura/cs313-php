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
    <?php 
        $_SESSION["shirtsTotal"] = $_SESSION["shirts"] * 7;
        $_SESSION["pantsTotal"] = $_SESSION["pants"] * 15;
        $_SESSION["shortsTotal"] = $_SESSION["shorts"] * 10;
    ?>

    <header>
        <h1>Shopping Cart:</h1>
    </header>

    <?php 
        if(isset($_POST['minusShirt'])) { 
            $_SESSION["shirts"] -= 1;
        }
        if(isset($_POST['plusShirt'])) { 
            $_SESSION["shirts"] += 1;
        }

        if(isset($_POST['minusPants'])) { 
            $_SESSION["pants"] -= 1;
        }if(isset($_POST['plusPants'])) { 
            $_SESSION["pants"] += 1;
        }

        if(isset($_POST['minusShorts'])) { 
            $_SESSION["shorts"] -= 1;
        }if(isset($_POST['plusShorts'])) { 
            $_SESSION["shorts"] += 1;
        }
    ?>
    <form method="post">
        <?php if ($_SESSION["shirts"] > 0) { ?>
            <div class="row">
                <div class="col"><p>Shirt</p></div>
                <div class="col"><p>Total: $<?=$_SESSION["shirtsTotal"]?>.00</p></div>
                <div class="col"><button type="submit" name="minusShirt">-</button></div>
                <div class="col"><p>Quantity: <?=$_SESSION["shirts"]?></p></div>
                <div class="col"><button type="submit" name="plusShirt">+</button></div>
            </div>
        <?php } ?>
        
        <?php if ($_SESSION["pants"] > 0) { ?>
            <div class="row">
                <div class="col"><p>Pants</p></div>
                <div class="col"><p>Total: $<?=$_SESSION["pantsTotal"]?>.00</p></div>
                <div class="col">
                    <button type="submit" name="minusPants">-</button>
                    <p>Quantity: <?=$_SESSION["pants"]?></p>
                    <button type="submit" name="plusPants">+</button>
                /div>
            </div>
        <?php } ?>

        <?php if ($_SESSION["shorts"] > 0) { ?>
            <div class="row">
                <div class="col"><p>Shorts</p></div>
                <div class="col"><p>Total: $<?=$_SESSION["shortsTotal"]?>.00</p></div>
                <div class="col">
                    <button type="submit" name="minusShorts">-</button>
                    <p>Quantity: <?=$_SESSION["shorts"]?></p>
                    <button type="submit" name="plusShorts">+</button>
                </div>
            </div>
        <?php } ?>
    </form>
        <div class="row">
            <div class="col"><button><a href="shopping-cart.php">Keep Shopping</a></button></div>
            <div class="col"><button><a href="check-out-final.php">Proceed to Check Out</a></button></div>
        </div>
</body>
</html>