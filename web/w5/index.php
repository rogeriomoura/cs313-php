<?php
    require "./../dbConnect.php";
    $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing query with PHP W05</title>
</head>
<body>
<h1>This is the test querying data with PHP</h1>
<?php 
    $family_members = $db->prepare("SELECT * FROM w5_family_members");
    $family_members->execute();

    while ($fRow = $family_members->fetch(PDO::FETCH_ASSOC)) {
        $first_name = $fRow["first_name"];
        $last_name = $fRow["last_name"];
        $relationship_id = $fRow["relationship_id"];

        $relationships = $db->prepare("SELECT description FROM w5_relationships WHERE id = $relationship_id");
        $relationships->execute();
        while ($rRow = $relationships->fetch(PDO::FETCH_ASSOC)){
            $relationship = $rRow["description"];
        }
        echo "<p>$first_name $last_name is my $relationship ($relationship_id)</p>";
    }

    foreach ($db->query('SELECT * FROM w5_family_members') as $row)
    {
      echo 'first name: ' . $row['first_name'];
      echo ' last name: ' . $row['last_name'];
      echo '<br/>';
    }
?>
    
</body>
</html>