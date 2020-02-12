<?php
	require("../../dbConnect.php");
    $db = get_db();
    
    $book = $_POST['book'];
    $chapter = $_POST['chapter'];
    $verse = $_POST['verse'];
    $content = $_POST['content'];
    $topics = $_POST['topic'];
    $otherTopic = $_POST['otherTopic']; //name of the other topic
    $other = $_POST['other']; //textBox
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

        foreach ($topics as $topic_id){
            $stQuery = 'INSERT INTO scripture_topics (scripture_id, topic_id)
                        VALUES (:scriptureId, (SELECT id FROM topics WHERE id=:topic))';
            $stQuery = $db->prepare($stQuery);
            $stQuery->bindValue(':scriptureId', $scriptureId);
            $stQuery->bindValue(':topic', $topic_id);
            $stQuery->execute();
        }

        if (!empty($other)) {
            $tQuery = 'INSERT INTO topics (name) VALUES (:otherTopic)';
            $tStatement = $db->prepare($tQuery);
            $tStatement->bindValue(':otherTopic', $otherTopic);
            $tStatement->execute();

            $topicId = $db->lastInsertId('topics_id_seq');

            $otQuery = 'INSERT INTO scripture_topics (scripture_id, topic_id)
            VALUES (:scriptureId, (SELECT id FROM topics WHERE id=:topicId))';
            $otStatement = $db->prepare($otQuery);
            $otStatement->bindValue(':scriptureId', $scriptureId);
            $otStatement->bindValue(':topicId', $topicId);
            $otStatement->execute();
        }
    }

    catch (Exception $ex)
    {
        echo "Error with DB. Details: $ex";
        die();
    }
    
    header("Location: displayScripture.php");
    die();
?>