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
            
            if ($type = "driver") {
                $statement = $db->prepare(
                    'INSERT INTO user_driver (username, password, contact) VALUES (:username, :password, :contact)');
                $statement->bindValue(':username', $username);
                $statement->bindValue(':password', $password);
                $statement->bindValue(':contact', $contact);
                $statement->execute();

                $_SESSION["loggedIn"] = true;
                $_SESSION["username"] = $username;
            }
            else if ($type = "rider") {
                $statement = $db->prepare(
                    'INSERT INTO user_rider (username, password, contact) VALUES (:username, :password, :contact)');
                $statement->bindValue(':username', $username);
                $statement->bindValue(':password', $password);
                $statement->bindValue(':contact', $contact);
                $statement->execute();

                $_SESSION["loggedIn"] = true;
                $_SESSION["username"] = $username;
            }
            else {
                throw "Type doesn't match";
            }
        }
        catch (Exception $ex) {
	        echo "Error with DB. Details: $ex";
	        die();
        }
        
        header("Location: ride-board.php");
        die();
    }
?>