<?php
    session_start();

	require("dbConnect.php");
    $db = get_db();

    if ($_SESSION["loggedIn"] == true) {
        header("Location: ride-board.php");
    }
    else {
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        $contact = htmlspecialchars($_POST["contact"]);
        $type = $_POST["type"];
        var_dump($type);

        // $driver_statement = $db->prepare('SELECT id FROM user_driver WHERE username = :username AND password = :password');
        // $driver_statement->bindValue(':username', $username);
        // $driver_statement->bindValue(':password', $password);
        // $driver_statement->execute();

        // while ($dRow = $driver_statement->fetch(PDO::FETCH_ASSOC)){
        //     $driver_id = $dRow["id"];
        // }

        // $rider_statement = $db->prepare('SELECT id FROM user_rider WHERE username = :username AND password = :password');
        // $rider_statement->bindValue(':username', $username);
        // $rider_statement->bindValue(':password', $password);
        // $rider_statement->execute();

        // while ($rRow = $rider_statement->fetch(PDO::FETCH_ASSOC)){
        //     $rider_id = $rRow["id"];
        // }

        // if ($rider_id > 0 || $driver_id > 0 ){
        //     $_SESSION["loggedIn"] = true;
        //     $_SESSION["username"] = $username;
        // }
        
        // header("Location: ride-board.php");
    }
?>