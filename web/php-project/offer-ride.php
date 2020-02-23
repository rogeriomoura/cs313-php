<?php
    session_start();

    require "../dbConnect.php";
    $db = get_db();

    if ($_SESSION["loggedIn"] != true) {
        header("Location: login-ride-board.php");
    }
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
    <script src="reference.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Offer a Ride</title>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="p-3 wrapper">
        <div class="container">
            <h1>Offering a Ride</h1>
            <h2>Please fill the information bellow, all fields are required!</h2>
            <form action="register-ride.php" method="post" class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col">
                        <label for="cFrom">City from:</label><br>
                        <input class="form-control" type="text" name="cFrom" id="cFrom" required placeholder="Rexburg"><br>
                    </div>
                    <div class="col">
                        <label for="cTo">City to:</label><br>
                        <input class="form-control" type="text" name="cTo" id="cTo" required placeholder="Salt Lake"><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="seats">Available seats:</label><br>
                        <select class="form-control" name="seats" id="seats" required><br>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="price">Price per person:</label><br>
                        <input class="form-control" type="text" name="price" id="price" required placeholder="$20.00"><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="date">Date:</label><br>
                        <input class="form-control" type="date" min="<?=date('Y-m-d')?>" name="date" id="date" required><br>
                    </div>
                    <div class="col">
                        <label for="time">Time of departure:</label><br>
                        <select class="form-control" name="time" id="time" required><br>
                            <option value="06:00:00">06:00 AM</option>
                            <option value="06:30:00">06:30 AM</option>
                            <option value="07:00:00">07:00 AM</option>
                            <option value="07:30:00">07:30 AM</option>
                            <option value="18:00:00" selected>06:00 PM</option>
                            <option value="18:30:00">06:30 PM</option>
                            <option value="19:00:00">07:00 PM</option>
                            <option value="19:30:00">07:30 PM</option>
                        </select>
                    </div>
                </div>
                <input type="button" value="Back" class="btn btn-primary" id="backButton">  <input type="submit" value="Submit" class="btn btn-primary" id="submitOffer"><br><br>
            </form>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>