<?php
	require("dbConnect.php");
    $db = get_db();
    $topic = $_POST['topic'];
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="" method="post">
        Book: <input type="text" name="scripture">
        Chapter: <input type="text" name="chapter">
        Verse: <input type="text" name="verse">
        Content: <textarea name="content" rows="5" cols="20"></textarea>

        <?php 
            $statement = $db->prepare("SELECT * FROM topics");
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $id   = $row['id'];
                $name = $row['name'];
                echo "<input type='checkbox' name='topic[]' value='$id'> $name <br>";
            }
        ?>
        <input type="submit" name="submit" id="submit" value="Submit">
    </form>
</body>
</html>