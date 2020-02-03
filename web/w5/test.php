<?php 
try{

    $dbURL('DATABASE_URL');

    $dbOpts = paser_url($dbURL);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOExeption $e){

    echo "<h1>This is the error:</h1><br>";
    echo $e->getMessage();
    die();
    
}


?>