<?php
    require_once('../classes/crudMovie.php');

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('../classes/crudMovie.php');
    require_once('./utils.php');

    if(isset($_POST['submit'])){
        $pathParts = pathinfo($_FILES["movie_photo"]["name"]);
        $imageName = generateUUID() . '.' . $pathParts['extension'];
        $uploadPath =  "/assets/image/movies/" . $imageName;
        $fullPath =  dirname(__FILE__) . "/../.." . $uploadPath;
        $tmp = $_FILES['movie_photo']['tmp_name'];


        if(move_uploaded_file($tmp, $fullPath)){

            $movie = new crudMovie();
            $movie->setMovie_name($_POST['movie_name']);
            $movie->setMovie_photo($uploadPath);
            $movie->setMovie_description($_POST['movie_description']);
            $movie->setMovie_time($_POST['movie_time']);
            $movie->setRelease_date($_POST['release_date']);
            $movie->insertMovieData();

            echo "<script>
            alert('dhenat jane Regjistruar me sukses');
            document.location='../movie.php'</script>";



        }else {
            echo "<script>
            alert('Info was not added');
            document.location='../movie.php'</script>";
        }


    }


?>