<?php
	require("../../dbConnect.php");
    $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Scripture</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="insertScripture.php" method="post">
        Book: <input type="text" name="book"><br>
        Chapter: <input type="text" name="chapter"><br>
        Verse: <input type="text" name="verse"><br>
        Content: <textarea name="content" rows="5" cols="20"></textarea><br>

        <?php 
            $statement = $db->prepare("SELECT * FROM topics");
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $id   = $row['id'];
                $name = $row['name'];
                echo "<input type='checkbox' name='topic[]' value='$id'> $name <br>";
            }
            echo "<input type='checkbox' name='other' value='other'>
            <input type='text' name='otherTopic' id='otherTopic' placeholder='Other'>";
        ?>
        <input type="submit" name="submit" id="submit" value="Submit">
    </form>


    <?php
        $displayQuery = 
        "SELECT s.book, s.chapter, s.verse, s.content, t.name
        FROM scriptures s
        INNER JOIN scripture_topics st ON s.id = st.scripture_id
        INNER JOIN topics t ON t.id = st.topic_id
        ORDER BY t.name";

        $displayStatement = $db->prepare($displayQuery);
        $displayStatement->execute();
    ?>
    <h1>Here are the scriptures and the different topics</h1>
    <table>
        <tr>
            <td>Scripture</td>
            <td>Content</td>
            <td>Topics</td>
        </tr>
        <?php
            while($dRow = $displayStatement->fetch(PDO::FETCH_ASSOC)){
                $d_book = $dRow["book"];
                $d_chapter = $dRow["chapter"];
                $d_verse = $dRow["verse"];
                $d_content = $dRow["content"];
                $d_topic = $dRow["name"]; ?>
                <tr>
                    <td><?php echo "$d_book $d_chapter:$d_verse" ?></td>
                    <td><?php echo "$d_content" ?></td>
                    <td><?php echo "$d_topic" ?></td>
                </tr>
      <?php } ?>
    </table>
</body>
</html>