<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="first.css">
      <title>Rogerio Moura</title>
    </head>
    <body>
      <header class="container-fluid headerBox centered">
        <div>
          <h1>Welcome to Rogerio Moura's Online Portfolio</h1>
        </div>
        <div class="row">
          <a class="col shadow centered buttonBox border" href="assignments.php">Assignments</a>
          <a class="col shadow centered buttonBox border" href="Rogerio-Moura-resume.pdf">Resume</a>
          <a class="col shadow centered buttonBox border" href="under-construction.php">Ride Share</a>
        </div>
      </header>
      <div class="container-fluid centered">
        <h1 class="p-3">Rio & Kristen</h1>
        <br>
        <img src="images/image1.jpg" alt="A picture of Rio and his wife Kristen" class="rounded img-resize-30-l">
        <p>I've met my beautiful wife at BYU-I. It was a nice game night with some friends when their fhe sisters, a BYU-I term
         for an assigned group of friends by the church, invited them over to eat some soup. I happen to be there and go with 
         them crashing their soup night, and that happen to be the apartment that Kristen was living that semester. After doing 
         their dishes to look cool and impress the girls, we went back to play some board games.<br>After a few months of seenig 
         her every now and then I decided to invite her on a date!<br>We dated for about 4 months before I told her I wanted her 
         to be my eternal companion and marry me. Luckly she saw something special in me that I cannot understand, but she said 
         yes! We got married in the LDS Mt. Timpanogos Temple, UT, and had our reception up in Montana, in her hometown.</p>
      </div>
      <footer class="row container-fluid centered">
        <div class="col">
          <?php date_default_timezone_set("America/Boise"); ?>
          <p>Today is <?php echo date("l"); ?></p>
          <p>The time is <?php echo date("h:ia"); ?></p>
        </div>
      </footer>
    </body>
</html>