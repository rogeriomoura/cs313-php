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

        $dbUrl = getenv('postgres://eyaoviyieczixg:c6da97e297f4987fcc6e391961f3a70aa68c6891fda84c58f7c1ffa7f6ac440d@ec2-3-215-41-107.compute-1.amazonaws.com:5432/d2tvor00fcafoq');

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

        echo "<h1>This is the error:</h1><br>";
        echo $ex->getMessage();
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