<?php

    include "../classes/dbh.php";
    include "../classes/upcommming.class.php";
    include "../classes/upcomming.contr.php";

    $explore = new UpcommingContr();
    echo    $explore->getMovies();
    header('Content-Type: application/json; charset=utf-8');



?>
