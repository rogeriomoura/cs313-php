<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Josh's Assignment Directory</title>
    <link rel="icon" type="image/ico" href="https://cdn3.iconfinder.com/data/icons/round-icons-vol-2/512/j-512.png">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='directory.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='layout.css'>
    <script src=checkout.js></script>
    </head>
    <body>
        <header>
            <h1>Browse to your heart's content!</h1>
        </header>
        <?php 
        $_SESSION["stuff1"];
        $_SESSION["stuff2"];
        $_SESSION["stuff3"];
        ?>
        <?php
        if(isset($_POST["stuff1"]))
            $_SESSION["stuff1"] += 1;
        if(isset($_POST["stuff2"]))
            $_SESSION["stuff2"] += 1;
        if(isset($_POST["stuff3"]))
            $_SESSION["stuff3"] += 1;
        if(isset($_POST["stuff4"]))
            $_SESSION["stuff4"] += 1;
        if(isset($_POST["stuff5"]))
            $_SESSION["stuff5"] += 1;
        if(isset($_POST["stuff6"]))
            $_SESSION["stuff6"] += 1;
        ?>
        <section>
            <nav>
                <ul>
                    <?php if($_SESSION["stuff1"] > 0) { ?>
                    <li>Stuff1: <?=$_SESSION["stuff1"]?></li>
                    <?php } ?>
                    <?php if($_SESSION["stuff2"] > 0) { ?>
                    <li>Stuff1: <?=$_SESSION["stuff2"]?></li>
                    <?php } ?>
                    <?php if($_SESSION["stuff3"] > 0) { ?>
                    <li>Stuff1: <?=$_SESSION["stuff3"]?></li>
                    <?php } ?>
                    <?php if($_SESSION["stuff4"] > 0) { ?>
                    <li>Stuff1: <?=$_SESSION["stuff4"]?></li>
                    <?php } ?>
                    <?php if($_SESSION["stuff5"] > 0) { ?>
                    <li>Stuff1: <?=$_SESSION["stuff5"]?></li>
                    <?php } ?>
                    <?php if($_SESSION["stuff6"] > 0) { ?>
                    <li>Stuff1: <?=$_SESSION["stuff6"]?></li>
                    <?php } ?>
                </ul>
            </nav>
            <article>
                <p class="p2"><a href="viewcart.php"><button>View your cart</button></a></p>
                <form method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Lights" style="width:100%">
                                    <div class="caption">
                                        <p><button type="submit" name="stuff1">Lorem ipsum donec id elit non mi porta gravida at eget metus.</button></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Nature" style="width:100%">
                                    <div class="caption">
                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Fjords" style="width:100%">
                                    <div class="caption">
                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Lights" style="width:100%">
                                    <div class="caption">
                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Nature" style="width:100%">
                                    <div class="caption">
                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="thumbnail">
                                <a href="#" target="_blank">
                                <img src="#" alt="Fjords" style="width:100%">
                                    <div class="caption">
                                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </form>
                <p class="p1"><a href="checkout.php"><button>Checkout</button></a></p>
            </article>
        </section>
        <footer>
        <?php
            phpinfo();
            phpversion();
            // set default timezone
            echo "<br>";
            date_default_timezone_set('America/Boise'); // MST

            $info = getdate();
            $date = $info['mday'];
            $month = $info['mon'];
            $year = $info['year'];
            $hour = $info['hours'];
            $min = $info['minutes'];
            $sec = $info['seconds'];

            $current_date = "$date/$month/$year";
            $current_time = "$hour:$min:$sec";
            echo "$current_date";
            echo "<br>";
            echo "$current_time";
        ?>
        </footer>
    </body>
</html>