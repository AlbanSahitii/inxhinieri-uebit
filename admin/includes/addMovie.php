<?php

require_once('../classes/crudMovie.php');

if(isset($_POST['submit'])){

//    var_dump($_POST);die;
    $movie = new crudMovie();
    $movie->setMovie_name($_POST['movie_name']);
    $movie->setMovie_description($_POST['movie_description']);
    $movie->setMovie_time($_POST['movie_time']);
    $movie->setRelease_date($_POST['release_date']);
    $movie->insertMovieData();

    echo "<script>
    alert('dhenat jane Regjistruar me sukses');
    document.location='../movie.php'</script>"; }
?>