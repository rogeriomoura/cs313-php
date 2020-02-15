<?php
    session_start();

	require("dbConnect.php");
    $db = get_db();

    $username = $_SESSION["username"];

    try {
        $cFrom = htmlspecialchars($_POST["cFrom"]);
        $cTo = htmlspecialchars($_POST["cTo"]);
        $seats = htmlspecialchars($_POST["seats"]);
        $price = htmlspecialchars($_POST["price"]);
        $date = htmlspecialchars($_POST["date"]);
        $time = htmlspecialchars($_POST["time"]);
        
        $statement = $db->prepare(
            'INSERT INTO rides (cityfrom, cityto, seats, date, time, price, driver_id)
             VALUES (:cFrom, :cTo, :seats, :date, :time, :price, (SELECT id FROM user_driver WHERE username = :username))');
        $statement->bindValue(':cFrom', $cFrom);
        $statement->bindValue(':cTo', $cTo);
        $statement->bindValue(':seats', $seats);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
        $statement->bindValue(':time', $time);
        $statement->bindValue(':username', $username);
        $statement->execute();
    }
    catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }
    
    header("Location: ride-board.php");
    die();
?>