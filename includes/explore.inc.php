<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    include "../classes/dbh.php";
    include "../classes/explore.class.php";
    include "../classes/explore.contr.php";

    $explore = new ExploreContr($user_id);
    $exploreCall = $explore->getMovies();
    header('Content-Type: application/json; charset=utf-8');
    echo $exploreCall;


?>
