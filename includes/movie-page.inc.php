<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
    $movie_id = $_POST["movie_id"];

    include "../classes/dbh.php";
    include "../classes/movie-page.class.php";
    include "../classes/movie-page.contr.php";

    $moviePage = new MoviePageContr($movie_id);
    $moviePageCall = $moviePage->getMovies();
    header('Content-Type: application/json; charset=utf-8');
    echo $moviePageCall;




?>