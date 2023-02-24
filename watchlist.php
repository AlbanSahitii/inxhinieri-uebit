
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script></head>
    <title>Watchlist</title>
  </head>
  <body>
    <div class="container">
      <?php
        include("templates/navbar.php");
        ?>
      <div class="right-container">
        <h1>Watchlist</h1>
        <hr />
        <div class="watch-list"></div>
      </div>
    </div>
    <script src="assets/js/watchlist.js" ></script>
  </body>
</html>
