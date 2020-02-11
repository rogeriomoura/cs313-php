<?php
    require "../../dbConnect.php";
    $db = get_db();

    $events = $db->prepare("SELECT name, description, image FROM w5_event");
    $events->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W5 events activity</title>
</head>
<body>
    <h1>Events</h1><br>
    <table>
        <tr>
            <td>Name</td>
            <td>Description</td>
            <td>Picture</td>
        </tr>
        <?php
            while ($row = $events->fetch(PDO::FETCH_ASSOC)){
                $name = $row["name"]; $description = $row["description"]; $image = $row["image"]; ?>
                <tr>
                    <td><?=$name?></td>
                    <td><?=$description?></td>
                    <td><img src="<?=$image?>" alt="image"></a></td>
                </tr>
            <? }?>
    </table>
</body>
</html>