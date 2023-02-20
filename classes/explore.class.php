<?php
class Explore extends Dbh{

    function showMovies(){
        $stmt =  $this->connect()->prepare("SELECT * FROM movie");

        if(!$stmt->execute()){
            $stmt = null;
            return false;
            exit();
        }

        
        if($stmt->rowCount() == 0){
            $stmt = null;
            return false;
            exit(); 
        }
        $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($movies);


    }


}
?>