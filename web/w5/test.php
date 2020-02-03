<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing query with PHP</title>
</head>
<body>
<h1>This is the test querying data with PHP</h1>
<?php 
    try{

        $dbUrl = getenv('DATABASE_URL');

        $dbOpts = parse_url($dbURL);

        $dbHost = $dbOpts["host"];
        echo "This is the dbHost: " . $dbHost . "<br>";
        $dbPort = $dbOpts["port"];
        echo "This is the dbPort: " . $dbPort . "<br>";
        $dbUser = $dbOpts["user"];
        echo "This is the dbUser: " . $dbUser . "<br>";
        $dbPassword = $dbOpts["pass"];
        echo "This is the dbPassword: " . $dbPassword . "<br>";
        $dbName = ltrim($dbOpts["path"],'/');
        echo "This is the dbName: " . $dbName . "<br>";

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<p>Database set up!</p><br>";

    }catch(PDOException $ex){

        echo 'Error!: ' . $ex->getMessage();
        die();

    }

    foreach ($db->query('SELECT username, password FROM users') as $row)
    {
      echo 'user: ' . $row['username'];
      echo ' password: ' . $row['password'];
      echo '<br/>';
    }
?>
    
</body>
</html>