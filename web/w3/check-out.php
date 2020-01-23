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
        <div class="row">
            <div class="col"><p>Shirt</p></div>
            <div class="col"><p>Total: <?php echo $_SESSION["shirts"] * 7; ?></p></div>
            <div class="col"><button type="submit" name="minusShirt">-</button></div>
            <div class="col"><p>Quantity: <?php echo $_SESSION["shirts"] ?></p></div>
            <div class="col"><button type="submit" name="plusShirt">+</button></div>
        </div>
        <div class="row">
            <div class="col"><p>Pants</p></div>
            <div class="col"><p>Total: <?php echo $_SESSION["pants"] * 15; ?></p></div>
            <div class="col"><button type="submit" name="minusPants">-</button></div>
            <div class="col"><p>Quantity: <?php echo $_SESSION["pants"] ?></p></div>
            <div class="col"><button type="submit" name="plusPants">+</button></div>
        </div>
        <div class="row">
            <div class="col"><p>Shorts</p></div>
            <div class="col"><p>Total: <?php echo $_SESSION["shorts"] * 10; ?></p></div>
            <div class="col"><button type="submit" name="minusShorts">-</button></div>
            <div class="col"><p>Quantity: <?php echo $_SESSION["shorts"] ?></p></div>
            <div class="col"><button type="submit" name="plusShorts">+</button></div>
        </div>
    </form>
        <div class="row">
            <form action="shopping-cart.php">
                <div class="col"><button type="submit">Keep Shopping</button></div>
            </form>
            <form action="check-out-final.php">
                <div class="col"><button type="submit">Continue to check out</button></div>
            </form>
        </div>
</body>
</html>