<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing query with PHP</title>
    <?php
        require "../web/dbConnect.php";
        $db = get_db();
    ?>
</head>
<body>
<h1>This is the test querying data with PHP</h1>
<?php 
    foreach ($db->query('SELECT username, password FROM users') as $row)
    {
      echo 'user: ' . $row['username'];
      echo ' password: ' . $row['password'];
      echo '<br/>';
    }
?>
    
</body>
</html>