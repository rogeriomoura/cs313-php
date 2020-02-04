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

        echo "<p>$first_name $last_name is my $relationship_id</p>";
    }

    foreach ($db->query('SELECT * FROM w5_family_members') as $row)
    {
      echo 'user: ' . $row['username'];
      echo ' password: ' . $row['password'];
      echo '<br/>';
    }
?>
    
</body>
</html>