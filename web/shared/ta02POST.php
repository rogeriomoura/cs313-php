<?php 

    $name = htmlspecialchars($_POST["nameForPHP"]);
    $email = htmlspecialchars($_POST["emailForPHP"]);
    $major = htmlspecialchars($_POST["majorForPHP"]);
    // $visitedContinents = implode(' ', htmlspecialchars($_POST["visitedContinents"]));
    $comments = htmlspecialchars($_POST["comments"]);
    
    echo "Name: $name <br><br>";
    echo "Email: $email <br><br>";
    echo "Major: $major <br><br>";
    echo "Visited Countries: <br>";
    $continents = array("NA" => "North America", "SA" => "South America", "EU" => "Europe", "AS" => "Asia", "AU" => "Austrailia", "AF" => "Africa", "AN" => "Antarctica");
    foreach(htmlspecialchars($_POST["visitedContinents"]) as $value)
    {
        echo "$continents[$value]<br>";
    }
    echo "<br>Comments: $comments";
    echo "<br>";
    // echo "Test: <br>";
    // echo "Visited $visitedContinents <br>";
    // foreach($visitedContinents as $n) {
    //     echo "Ha: $n";
    // }
?>