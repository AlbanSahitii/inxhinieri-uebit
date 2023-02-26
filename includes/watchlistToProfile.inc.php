<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    $movie_id = $_POST['movie_id'];
    $watched_status = $_POST['watched_status'];

    include "../classes/dbh.php";
    include "../classes/watchlistToProfile.class.php";
    include "../classes/watchlistToProfile.contr.php";

    $WatchlistToProfile = new WatchlistToProfileContr($movie_id,$user_id,$watched_status);
    $WatchlistToProfile->sendInfo();
?>



