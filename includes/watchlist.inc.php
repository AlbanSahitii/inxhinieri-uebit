<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    include "../classes/dbh.php";
    include "../classes/watchlist.class.php";
    include "../classes/watchlist.contr.php";

    $watchlist = new WatchlistContr($user_id);
    $watchlistCall = $watchlist->getMovies();
    header('Content-Type: application/json; charset=utf-8');
    echo $watchlistCall;


?>
