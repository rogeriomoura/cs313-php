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
    <title>Ride Board</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div>
        <h1 class="centered">What are you looking for?</h1>
        <div class="row p-3">
            <div class="col"></div>
            <div class="col centered border">
                <img src="../images/driver.png" alt="offer ride" class="rounded img-resize-90">
                <br>
                <p>Offer Ride</p>
            </div>
            <div class="col centered border">
                <img src="../images/rider.png" alt="search ride" class="rounded img-resize-90">
                <br>
                <p>Search Ride</p>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>