<?php

    require_once('../classes/crudMovie.php');

    $movieData = new crudMovie();
    $movieId = $_GET['movie_id'];
    $movieData->setMovie_id($movieId);

    if(isset($_POST['edit'])){
        $movieData->setMovie_name($_POST['movie_name']);
        $movieData->setMovie_description($_POST['movie_description']);
        $movieData->setMovie_time($_POST['movie_time']);
        $movieData->setRelease_date($_POST['release_date']);
        echo $movieData->editMovieData();
        echo "<script>
        alert('Data was edited successfully'); 
        document.location='../movie.php';
        </script>";
    }

    $editMovieData = $movieData->showMoviesById();
    $row = $editMovieData[0];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulari i Regjistrimit</title>
    <link rel="stylesheet" href="../assets/css/forms.css">
</head>
<body>

    <form action="" method="POST" >
        <label for="movie_name">Movie Name:</label>
        <input type="text" id="movie_name" name="movie_name" value="<?= $row['movie_name'];?>" required>

        <label for="movie_description">Movie Description:</label>
        <textarea id="movie_description" name="movie_description" required><?= $row['movie_description'];?></textarea>

        <label for="movie_time">Movie Time:</label>
        <input type="time" id="movie_time" name="movie_time" value="<?= $row['movie_time']; ?>">

        <label for="release_date">Release Date</label>
        <input type="date" id="release_date" name="release_date" value="<?= $row['release_date']?>"> <br>

        <input type="submit" name="edit" value="Edit">
    </form>
</body>
</html>