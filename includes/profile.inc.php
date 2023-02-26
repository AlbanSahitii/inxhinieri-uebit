<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    $user_id = $_SESSION['user_id'];
    include "../classes/dbh.php";
    include "../classes/profile.class.php";
    include "../classes/profile.contr.php";

    $profile = new ProfileController($user_id);
    $profileCall = $profile->getMovies();
    header('Content-Type: application/json; charset=utf-8');
    echo $profileCall;


?>
