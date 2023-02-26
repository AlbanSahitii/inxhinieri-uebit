<?php

require_once('../classes/crudMovie.php');

if(isset($_POST['submit'])){

//
//    $target_dir = "uploads/";
//    $target_file = $target_dir . basename($_FILES["movie_photo"]["name"]);
//    $uploadOk = 1;
//    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//
//// Check if image file is a actual image or fake image
//    if(isset($_POST["submit"])) {
//        $check = getimagesize($_FILES["movie_photo"]["tmp_name"]);
//        if($check !== false) {
//            echo "File is an image - " . $check["mime"] . ".";
//            $uploadOk = 1;
//        } else {
//            echo "File is not an image.";
//            $uploadOk = 0;
//        }
//    }
//
//// Check if file already exists
//    if (file_exists($target_file)) {
//        echo "Sorry, file already exists.";
//        $uploadOk = 0;
//    }
//
//// Check file size
//    if ($_FILES["movie_photo"]["size"] > 500000) {
//        echo "Sorry, your file is too large.";
//        $uploadOk = 0;
//    }
//
//// Allow certain file formats
//    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//        && $imageFileType != "gif" ) {
//        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//        $uploadOk = 0;
//    }
//
//// Check if $uploadOk is set to 0 by an error
//    if ($uploadOk == 0) {
//        echo "Sorry, your file was not uploaded.";
//// if everything is ok, try to upload file
//    } else {
//        if (move_uploaded_file($_FILES["movie_photo"]["tmp_name"], $target_file)) {
//            echo "The file ". htmlspecialchars( basename( $_FILES["movie_photo"]["name"])). " has been uploaded.";
//        } else {
//            echo "Sorry, there was an error uploading your file.";
//        }
//    }

//
//    $targetDirImage = "../../uploads/";
//    $movie_photo = basename($_FILES["movie_photo"]["name"]);
//
//    $targetFilePath = $targetDirImage . $movie_photo;
//
//    move_uploaded_file($_FILES["movie_photo"]["tmp_name"], $targetFilePath);

    $movie = new crudMovie();
    $movie->setMovie_name($_POST['movie_name']);
    $movie->setMovie_description($_POST['movie_description']);
    $movie->setMovie_time($_POST['movie_time']);
    $movie->setRelease_date($_POST['release_date']);
    $movie->insertMovieData();

    echo "<script>
    alert('dhenat jane Regjistruar me sukses');
    document.location='../movie.php'</script>";

}







?>