<?php
    session_start();

	require("dbConnect.php");
    $db = get_db();

    try {
        $cFrom = htmlspecialchars($_POST["cFrom"]);
        $cTo = htmlspecialchars($_POST["cTo"]);
        $seats = htmlspecialchars($_POST["seats"]);
        $price = htmlspecialchars($_POST["price"]);
        $date = htmlspecialchars($_POST["date"]);
        var_dump($date);
        $time = htmlspecialchars($_POST["time"]);
        
        // $statement = $db->prepare(
        //     'INSERT INTO user_rider (username, password, contact) VALUES (:username, :password, :contact)');
        // $statement->bindValue(':username', $username);
        // $statement->bindValue(':password', $password);
        // $statement->bindValue(':contact', $contact);
        // $statement->execute();

        // $_SESSION["loggedIn"] = true;
        // $_SESSION["username"] = $username;
    }
    catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }
    
    header("Location: ride-board.php");
    die();
?>