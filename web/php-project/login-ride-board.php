<?php
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
    <script src="reference.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Ride Board</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div>
        <h1 class="centered">Welcome to Ride Board</h1>
        <div class="row p-3">
            <div class="col">
                <form action="" method="POST" class="needs-validation" novalidate>
                    <h3 class="centered">Login</h3>
                    <div class="form-row">
                        <label for="username">Username:</label><input class="form-control" type="text" name="username" id="username">
                    </div>
                    <div class="form-row">
                        <label for="password">Password:</label><input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div>
                        <br><input type="submit" value="Login" class="btn btn-primary" name="loginButton">
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>