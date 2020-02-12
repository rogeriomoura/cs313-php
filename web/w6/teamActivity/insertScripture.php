<?php
	require("../../dbConnect.php");
    $db = get_db();
    
    $book = $_POST['book'];
    $chapter = $_POST['chapter'];
    $verse = $_POST['verse'];
    $content = $_POST['content'];
    $topics = $_POST['topic'];
    //var_dump($topic);
    
    try 
    {
        $query = 'INSERT INTO scriptures (book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content)';	
        $statement = $db->prepare($query);
        $statement->bindValue(':book', $book);
        $statement->bindValue(':chapter', $chapter);
        $statement->bindValue(':verse', $verse);
        $statement->bindValue(':content', $content);
        $statement->execute();

        $scriptureId = $db->lastInsertId('scriptures_id_seq');

        foreach ($topics as $topic){
            var_dump($topic);
            echo "<br>";
            echo "This is topic: " . $topic . "<br>";
            $stQuery = 'INSERT INTO scripture_topics (scripture_id, topic_id)
                        VALUES (:scriptureId, (SELECT id FROM topics WHERE name=\':topic\'))';
            $stQuery = $db->prepare($stQuery);
            $stQuery->bindValue(':scriptureId', $scriptureId);
            $stQuery->bindValue(':topic', $topic);
            $statement->execute();
        }
    }

    catch (Exception $ex)
    {
        echo "Error with DB. Details: $ex";
        die();
    }
    
    //header("Location: addScripture.php");
    die();
?>