<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="assets/css/home.css"/>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <?php
    include("templates/navbar.php");
    ?>
    <div class="right-container">
        <div id="profile_page_up">
            <div id="profile_page_up_img">
                <img src="assets/image/profile_picture_luffy.jpg" alt="">
            </div>
            <div id="profile_page_up_name">
                <p><?= $_SESSION['username'] ?></p>
            </div>
        </div>
        <div>
            <div>
                <h1>Movies watched</h1>
            </div>
            <div class="watch-list"></div>
            <div class="load-movies"></div>
        </div>
    </div>
</div>
<script src="assets/js/profile.js"></script>
</body>
</html>
