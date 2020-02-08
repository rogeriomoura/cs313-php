<?php
    require "../dbConnect.php";
    $db = get_db();
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
    <title>Search a Ride</title>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="p-3">
        <div class="container">
            <h1>Searching a Ride</h1>
            <h2>Please fill the information bellow, all fields are required!</h2>
            <form action="" method="post" class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col">
                        <label for="cityFrom">City From:</label><br>
                        <input class="form-control" type="text" name="cityFrom" id="cityFrom" required placeholder="Rexburg"><br>
                    </div>
                    <div class="col">
                        <label for="cityTo">City To:</label><br>
                        <input class="form-control" type="text" name="cityTo" id="cityTo" required placeholder="Salt Lake City"><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="date">Date:</label><br>
                        <input class="form-control" type="date" name="date" id="date" required min="<?=date('Y-m-d')?>"><br>
                    </div>
                    <div class="col">
                        <label for="time">Time of departure:</label><br>
                        <select class="form-control" name="time" id="time" required><br>
                            <option value="6a">06:00 AM</option>
                            <option value="6:30a">06:30 AM</option>
                            <option value="7a">07:00 AM</option>
                            <option value="7:30a">07:30 AM</option>
                            <option value="6p" selected>06:00 PM</option>
                            <option value="6:30p">06:30 PM</option>
                            <option value="7p">07:00 PM</option>
                            <option value="7:30p">07:30 PM</option>
                            <option value="tbd">TBD</option>
                        </select>
                    </div>
                </div>
                <input type="submit" value="Search" class="btn btn-primary" id="submitSearch">
            </form>
            <?php
                
            ?>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>