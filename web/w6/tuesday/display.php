<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            $personId = $_GET["personId"];
            echo $personId;
            $statement = $db->prepare('SELECT * FROM w6_user WHERE id = :personId');
            var_dump($statement);
            $statement->bindValue(':personId', $personId, PDO::PARAM_INT);
            $statement->execute();
            var_dump($statement);
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
               echo "In here!";
               $id = $row["id"];
               $first = $row["first"];
               $last = $row["last"];
               $food_id = $row["food"];

               $fStatement = $db->prepare("SELECT * FROM w6_food WHERE id = $food_id");
               $fStatement->execute();
               var_dump($fStatement);
               while ($fRow = $fStatement->fetch(PDO::FETCH_ASSOC)){
                  echo "Second while";
                  $food = $fRow['food'];
               }
               echo "<h1>$first $last's favorite food is $food</h1>";
            }
            // retrieve url parameter
            // execute query to pull up data from that id
            // execute another query to get food data
            // display name and favorite food
         ?>

		</div>
	</body>
</html>