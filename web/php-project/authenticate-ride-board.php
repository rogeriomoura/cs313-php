<?php
    session_start();

	require("dbConnect.php");
    $db = get_db();

    $_SESSION["loggedIn"];
    $_SESSION["username"];
    $_SESSION["contact"];

    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $driver_statement = $db->prepare('SELECT id FROM user_driver WHERE username = :username AND password = :password');
    $driver_statement->bindValue(':username', $username);
    $driver_statement->bindValue(':password', $password);
    $driver_statement->execute();

    while ($dRow = $driver_statement->fetch(PDO::FETCH_ASSOC)){
        $driver_id = $dRow["id"];
    }

    $rider_statement = $db->prepare('SELECT id FROM user_rider WHERE username = :username AND password = :password');
    $rider_statement->bindValue(':username', $username);
    $rider_statement->bindValue(':password', $password);
    $rider_statement->execute();

    while ($rRow = $rider_statement->fetch(PDO::FETCH_ASSOC)){
        $rider_id = $rRow["id"];
    }
    var_dump($rider_id);
    var_dump($driver_id);

    if ($rider_id > 0 || $driver_id > 0 ){
        $_SESSIOM["loggedIn"] = true;
        $_SESSION["username"] = $username;
        $_SESSIOM["password"] = $password;
    }

    $message = "wrong answer";
    echo "<script type='text/javascript'>alert('$message');</script>";
    //header("Location: ride-board.php");
?>