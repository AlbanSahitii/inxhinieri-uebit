<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../classes/crudMovie.php');
require_once('./utils.php');

if(isset($_POST['submit'])){
    $pathParts = pathinfo($_FILES["movie_photo"]["name"]);
    $imageName = generateUUID() . '.' . $pathParts['extension'];
    $uploadPath =  "/assets/image/movies/" . $imageName;
    $fullPath = __DIR__ . "/../.." . $uploadPath;
    $tmp = $_FILES['movie_photo']['tmp_name'];


    if(move_uploaded_file($tmp, $fullPath)){
        echo 'Successfully uploaded to ' . $fullPath;


    }else {
        echo "Not moved";
    }

}


?>