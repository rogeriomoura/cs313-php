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
                <form action="" method="POST" class="needs-validation container" novalidate>
                    <h3 class="centered">Login</h3>
                    <div class="form-row">
                        <label for="username">Username:</label>
                        <input class="form-control" type="text" name="username" id="username">
                    </div>
                    <div class="form-row">
                        <label for="password">Password:</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <br>
                    <div class="text-center">
                        <input type="submit" value="Login" class="btn btn-primary" name="loginButton">
                    </div>
                </form>
            </div>
            <div class="col">
                <form action="" method="post" class="needs-validation container" novalidate>
                    <h3 class="centered">Create New User</h3>
                    <div class="form-row">
                        <label for="username">Username:</label>
                        <input class="form-control" type="text" name="username" id="username">
                    </div>
                    <div class="form-row">
                        <label for="password">Password:</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="form-row">
                        <label for="confirmPassword">Confirm Password:</label>
                        <input class="form-control" type="password" name="cPassword" id="cPassword">
                    </div>
                    <div class="form-row">
                        <label for="contact">Contact:</label>
                        <input class="form-control" type="text" name="contact" id="contact">
                    </div>
                    <div>
                        <p>Are you a DRIVER or a RIDER?</p><br><br>
                        <input type="radio" name="type" id="driver"><label for="driver">Driver</label><br>
                        <input type="radio" name="type" id="rider"><label for="rider">Rider</label>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Register" class="btn btn-primary" name="registerButton">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>