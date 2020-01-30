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
    <div class="p-3">
        <div class="container">
            <h1>Please fill the information bellow, all fields are required!</h1>
            <form action="" method="post">
                <div class="form-row">
                    <div class="col">
                        <label for="name">Name:</label><br>
                        <input class="form-control" type="text" name="name" id="name"><br>
                    </div>
                    <div class="col">
                        <label for="contact">Contact:</label><br>
                        <input class="form-control" type="text" name="contact" id="contact"><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="cFrom">City from:</label><br>
                        <input class="form-control" type="text" name="cFrom" id="cFrom"><br>
                    </div>
                    <div class="col">
                        <label for="cTo">City to:</label><br>
                        <input class="form-control" type="text" name="cTo" id="cTo"><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="seats">Available seats:</label><br>
                        <input class="form-control" type="text" name="seats" id="seats"><br>
                    </div>
                    <div class="col">
                        <label for="price">Price per person:</label><br>
                        <input class="form-control" type="text" name="price" id="price">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>