<?php
class UpcommingClass extends Dbh{

    function showMovies(){

        $getMovies =  $this->connect()->prepare("SELECT movie_name,movie_photo,release_date FROM movie WHERE release_date > ?");

        $date = date("Y-m-d");
        if(!$getMovies->execute(array($date))){
            $getMovies = null;
            return false;
            exit();
        }

        
        if($getMovies->rowCount() == 0){
            $getMovies = null;
            return false;
            exit(); 
        }
        $movies = $getMovies->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($movies);


    }


}
?>


