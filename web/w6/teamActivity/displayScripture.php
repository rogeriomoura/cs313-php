<?php
    require("../../dbConnect.php");
    $db = get_db();

    $query = 
            "SELECT s.book, s.chapter, s.verse, s.content, t.name
            FROM scriptures s
            INNER JOIN scripture_topics st ON s.id = st.scripture_id
            INNER JOIN topics t ON t.id = st.topic_id";
    
    $statement = $db->prepare($query);
    $statement->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Scripture</title>
</head>
<body>
    <h1>Here are the scriptures and the different topics</h1>
    <table>
        <tr>
            <td>Scripture</td>
            <td>Content</td>
            <td>Topics</td>
        </tr>
        <?php
            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
                $book = $row["book"];
                $chapter = $row["chapter"];
                $verse = $row["verse"];
                $content = $row["content"];
                $topic = $row["name"]; ?>
                <tr>
                    <td><?php echo "$book $chapter:$verse" ?></td>
                    <td><?php echo "$content" ?></td>
                    <td><?php echo "$topic" ?></td>
                </tr>
      <?php } ?>
    </table>
</body>
</html>