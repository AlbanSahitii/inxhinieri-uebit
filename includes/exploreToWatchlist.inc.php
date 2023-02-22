<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    $movie_id = $_POST['movie_id'];
    $watched_status = $_POST['watched_status'];

    include "../classes/dbh.php";
    include "../classes/exploreToWatchlist.class.php";
    include "../classes/exploreToWatchlist.contr.php";

    $exploreToWatchlist = new exploreToWatchlistController($user_id,$movie_id,$watched_status);
    $exploreToWatchlist->callDatabase();

?>



