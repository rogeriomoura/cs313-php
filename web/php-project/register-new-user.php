<?php
    session_start();

	require("dbConnect.php");
    $db = get_db();

    if ($_SESSION["loggedIn"] == true) {
        header("Location: ride-board.php");
    }
    else {
        try {
            $username = htmlspecialchars($_POST["username"]);
            $password = htmlspecialchars($_POST["password"]);
            $contact = htmlspecialchars($_POST["contact"]);
            $type = $_POST["type"];
            
            $statement = $db->prepare(
                'INSERT INTO user_:type (username, password, contact) VALUES (:username, :password, :contact)');
            $statement->bindValue(':type', $type);
            $statement->bindValue(':username', $username);
            $statement->bindValue(':password', $password);
            $statement->bindValue(':contact', $contact);
            $statement->execute();

            $_SESSION["loggedIn"] = true;
            $_SESSION["username"] = $username;
        }
        catch (Exception $ex) {
	        echo "Error with DB. Details: $ex";
	        die();
        }
        
        header("Location: ride-board.php");
        die();
    }
?>