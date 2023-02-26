<?php

    require_once('../classes/crudMovie.php');

    $movieData = new crudMovie();

    if (isset($_GET['movie_id'])){
        $movieData->setMovie_id($_GET['movie_id']);
        $movieData->deleteMovieData();
        echo "<script>
        alert('The data was deleted successfully!');
        document.location='../movie.php'</script>";
    }

?>