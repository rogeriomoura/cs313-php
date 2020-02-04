<?php
    require "./../dbConnect.php";
    $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>W05 Team Activity</title>
</head>
<body>
<h1>Scripture Resources</h1>

<form method="post">
    <input type="text" name="bookName" id="bookName">
    <input type="submit" value="Submit">
</form>

<?php 
    if(isset($_POST['submit'])) {
        $bookName = $_POST["bookName"];
        $scriptures = $db->prepare("SELECT * FROM scriptures WHERE book = $bookName");
        $scriptures->execute();
    
        while ($fRow = $scriptures->fetch(PDO::FETCH_ASSOC)) {
            $book = $fRow["book"];
            $chapter = $fRow["chapter"];
            $verse = $fRow["verse"];
            $content = $fRow["content"];
            
            
            echo "<p>In <b>$book $chapter:$verse</b> it is written that, '$content'</p>";
        }
    }

?>
</body>
</html>