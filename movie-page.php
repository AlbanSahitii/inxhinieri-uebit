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
        <div id="movie_page_up">
            <div id="movie_page_up_thumbnail">
                <img src="assets/image/movie-page-thumbnail.jpeg" alt="">
            </div>
            <div id="movie_page_up_name">
                <h1>One piece: film red</h1>
            </div>
        </div>
        <div id="movie_page_down">
            <div id="movie_page_down_stats">
                <p id="movie_page_down_stats_length">2:20:00</p>
                <p id="movie_page_down_stats_divider">•</p>
                <p id="movie_page_down_stats_released">Released in 13-03-2022</p>

            </div>
            <div id="movie_page_description">
                <div id="movie_page_description_container">
                    <h2>Description</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut commodi consectetur, doloremque esse, et harum ipsam, iste laboriosam magni maxime nisi obcaecati porro repudiandae sint sit unde vero voluptatibus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/movie-page.js"></script>
</body>
</html>
