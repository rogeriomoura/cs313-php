<?php
    session_start();

	require("dbConnect.php");
    $db = get_db();

    $_SESSION["loggedIn"];
    $_SESSION["username"];
    $_SESSION["contact"];

    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $statement = $db->prepare('SELECT id FROM user WHERE id = :personId');
    $statement->bindValue(':personId', $personId, PDO::PARAM_INT);
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $id = $row["id"];
        $first = $row["first_name"];
        $last = $row["last_name"];
        $food_id = $row["food_type"];

        $fStatement = $db->prepare("SELECT * FROM w6_food WHERE id = $food_id");
        $fStatement->execute();
        while ($fRow = $fStatement->fetch(PDO::FETCH_ASSOC)){
            $food = $fRow['food'];
        }
        echo "<h1>$first $last's favorite food is $food</h1>";
    }
    ?>