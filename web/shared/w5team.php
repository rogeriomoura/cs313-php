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
<p>Enter a book like John, D&C, D&C, Mosiah or Moroni.</p>
<p>The idea here is to query data back from a database.</p>

<form method="post">
    <input type="text" name="bookName" id="bookName">
    <input type="submit" value="Submit" name="submit">
</form>

<?php 
    if(isset($_POST["submit"])) {
        $bookName = $_POST["bookName"];
        $query = "SELECT * FROM scriptures WHERE book = '$bookName'";
        $scriptures = $db->prepare($query);
        $scriptures->execute();

        while ($fRow = $scriptures->fetch(PDO::FETCH_ASSOC)) {
            $book = $fRow["book"];
            $chapter = $fRow["chapter"];
            $verse = $fRow["verse"];
            // $content = $fRow["content"];
            $id = $fRow["id"];
            echo "book is $book";
            echo "<p>In <b>$book $chapter:$verse</b> for details click here: <a href=\"/shared/w5details.php?id=$id\">Details</a></p>";
        }
    }
?>
</body>
</html>