<?php
    require "./../dbConnect.php";
    $db = get_db();
    $id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scripture Details</title>
</head>
<body>
    <h1>The scripture details:</h1>
    <?php
        $details = $db->prepare("SELECT content FROM scriptures WHERE id = '$id'");
        $details->execute();

        while ($fRow = $details->fetch(PDO::FETCH_ASSOC)) {
            $content = $fRow["content"];

            echo "<p>The scripture says: $content</p>";
        }
    ?>
</body>
</html>