<?php

require_once('../classes/crudMovie.php');

if(isset($_POST['submit'])){


$targetDir = "../../uploads/";
$imageName = basename($_FILES["movie_photo"]["name"]);
$targetFilePath = $targetDir . $imageName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (isset($_POST["submit"]) && !empty($_FILES["movie_photo"]["name"])) {
    echo "phase 1";
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf','jfif');
//    $theCourseId = $_POST['theCourseId'];
    if (in_array($fileType, $allowTypes)) {
        echo "phase 2";
        // Upload file to server
        if (move_uploaded_file($_FILES["movie_photo"]["tmp_name"], $targetFilePath)) {

            // Insert image file name into database
            echo "hajde perhajr";die;
            $insert = $conn->query("INSERT INTO coursesimage (theCourseId, imageName) VALUES ('" . $theCourseId . "', '" . $imageName . "')");
            if ($insert) {
                $_SESSION['status'] = "The file " . $imageName . " has been uploaded successfully.";
//                header('Location:../index.php');
            } else {
                $_SESSION['status'] = "File upload failed, please try again.";
//                header('Location:../index.php');
            }
        } else {
            $_SESSION['status'] = "Sorry, there was an error uploading your file.";
//            header('Location:../index.php');

        }
    } else {
        $_SESSION['status'] = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
//        header('Location:../index.php');
    }
} else {
    $_SESSION['status'] = 'Please select a file to upload.';
    echo  "huh";
//    header('Location:../index.php');
}



////        $name = $_REQUEST['movie_photo'];
//
//        $image_file = $_FILES['movie_photo']['name'];
//        $type = $_FILES['movie_photo']['type'];
//        $size = $_FILES['movie_photo']['size'];
//        $temp = $_FILES['movie_photo']['tmp_name'];
//
//        $path="uploads/".$image_file;
//
////        if (empty($name)){
////            $errorMsg = "Please enter name";
////            echo "name";
////        }
//        if(empty($image_file)){
//            $errorMsg="Please Select Image";
//            echo "select";
//        }
//        else if($type=="image/jpg" || $type=="image/jpeg" || $type=="image/png" || $type=="image/gif"){
//            if (!file_exists($path)){
//                if ($size < 5000000){
//                    echo "jello";
//                    move_uploaded_file($temp, "uploads/" . $image_file);die;
//                }
//                else{
//                    $errorMsg = "your File to large please upload 5MB size";
//                }
//            }
//            else{
//                $errorMsg = "File already exists... Check upload folder";
//            }
//        }
//        else{
//            $errorMsg = "Upload Jpg, jpeg, png & gif file formate... check file extension";
//            echo "else";
//        }
//
//        if (!isset($errorMsg)){
//            echo "baba";
//            $insert_stmt=$db-> prepare('INSERT INTO tbl_file(name,image) VALUES (:fname, :fimage)');
//            $insert_stmt->bindParam(':fname', $name);
//            $insert_stmt->bindParam(':fimage', $image_file);
//
//            if ($insert_stmt->execute()){
//                $insertMsg="File upload successfully......";
//                header("refresh:3;index.php");
//            }
//        }


//
//    $targetDirImage = "../../uploads/";
//    $movie_photo = basename($_FILES["movie_photo"]["name"]);
//
//    $targetFilePath = $targetDirImage . $movie_photo;
//
//    move_uploaded_file($_FILES["movie_photo"]["tmp_name"], $targetFilePath);
//
//    $movie = new crudMovie();
//    $movie->setMovie_name($_POST['movie_name']);
//    $movie->setMovie_photo($movie_photo);
//    $movie->setMovie_description($_POST['movie_description']);
//    $movie->setMovie_time($_POST['movie_time']);
//    $movie->setRelease_date($_POST['release_date']);
//    $movie->insertMovieData();
//
//    echo "<script>
//    alert('dhenat jane Regjistruar me sukses');
//    document.location='../movie.php'</script>"; }


/////////////////////


    }





?>