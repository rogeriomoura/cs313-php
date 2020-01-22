<!DOCTYPE html>

<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="ta02POST.php" method="post">
            <div>
                <label for="name">Name</label>
                <input name="nameForPHP" type="text" class="form-control" placeholder="Enter name">
                <label for="email">Email</label>
                <input name="emailForPHP" type="text" class="form-control" placeholder="Enter email">
            </div>
            <br>
            <div>
                
            <?php 
            $majors = array("CS" => "Computer Science", "WDD" => "Web Design and Development", "CIT" => "Computer Information Technology", "CE" => "Computer Engineering");
            foreach($majors as $i) {
                echo "<input type=\"radio\" name=\"majorForPHP\" value=\"$majors\">$i<br><br>";
            }
            ?>
                <!-- <input type="radio" name="majorForPHP" value="CS"> Computer Science<br>
                <input type="radio" name="majorForPHP" value="WDD"> Web Design and Development<br>
                <input type="radio" name="majorForPHP" value="CIT"> Computer Information Technology<br>
                <input type="radio" name="majorForPHP" value="CE"> Computer Engineering -->
          </div>
            <br>
            <div>
                <label for="comments">Comments:</label>
                <br>
                <textarea name="comments" rows="4" cols="50" placeholder="Comments Here..."></textarea>
            </div>
            <div>
            <!-- <?php
                // $continents = array("NA" => "North America", "SA" => "South America", "EU" => "Europe", "AS" => "Asia", "AU" => "Austrailia", "AF" => "Africa", "AN" => "Antarctica",);
            ?> -->
                <label for="visited countries">Select the continents you have visited before:</label><br>
                    <input type="checkbox" name="visitedContinents[]" value="NA"> North America <br>
                    <input type="checkbox" name="visitedContinents[]" value="SA"> South America <br>
                    <input type="checkbox" name="visitedContinents[]" value="EU"> Europe <br>
                    <input type="checkbox" name="visitedContinents[]" value="AS"> Asia <br>
                    <input type="checkbox" name="visitedContinents[]" value="AU"> Australia <br>
                    <input type="checkbox" name="visitedContinents[]" value="AF"> Africa <br>
                    <input type="checkbox" name="visitedContinents[]" value="AN"> Antarctica <br>      
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>