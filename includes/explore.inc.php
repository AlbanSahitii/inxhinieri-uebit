<?php


    include "../classes/dbh.php";
    include "../classes/explore.class.php";
    include "../classes/explore.contr.php";

    $explore = new ExploreContr();
    $exploreCall = $explore->getMovies();
    header('Content-Type: application/json; charset=utf-8');
    echo $exploreCall;


?>
