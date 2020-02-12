<?php
    require("../../dbConnect.php");
    $db = get_db();

    $displayQuery = 
            "SELECT s.book, s.chapter, s.verse, s.content, t.name
            FROM scriptures s
            INNER JOIN scripture_topics st ON s.id = st.scripture_id
            INNER JOIN topics t ON t.id = st.topic_id
            ORDER BY t.name";
    
    $displayStatement = $db->prepare($displayQuery);
    $displayStatement->execute();
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