<?php

require_once('dbCon.php');

Class CrudMovie extends dbCon {

    private $movie_id;
    private $movie_name;
    private $movie_photo;
    private $movie_description;
    private $movie_time;
    private $release_date;
    private $dbConn;

    public function __construct($movie_id='',$movie_name='',$movie_photo='',$movie_description='',$movie_time='',$release_date='') {
        $this->movie_id = $movie_id;
        $this->movie_name = $movie_name;
        $this->movie_photo = $movie_photo;
        $this->movie_description = $movie_description;
        $this->movie_time = $movie_time;
        $this->release_date = $release_date;
        $this->dbConn = $this->connDB();
    }

    //Seters and geters
    public function setMovie_id($movie_id){
        $this->movie_id = $movie_id;
    }

    public function getMovie_id(){
        return $this->movie_id;
    }

    public function setMovie_name($movie_name){
    $this->movie_name = $movie_name;
    }

    public function getMovie_name(){
        return $this->movie_name;
    }

    public function setMovie_photo($movie_photo){
        $this->movie_photo = $movie_photo;
    }

    public function getMovie_photo(){
        return $this->movie_photo;
    }

    public function setMovie_description($movie_description){
        $this->movie_description = $movie_description;
    }

    public function getMovie_description(){
        return $this->movie_description;
    }

    public function setMovie_time($movie_time){
    $this->movie_time = $movie_time;
    }

    public function getMovie_time(){
        return $this->movie_time;
    }

    public function setRelease_date($release_date){
        $this->release_date = $release_date;
    }

    public function getRelease_date(){
        return $this->release_date;
    }

    //Insert Data
    public function insertMovieData(){
        try{
            $sql = "INSERT INTO movie(movie_name,movie_photo,movie_description,movie_time,release_date) VALUES (?,?,?,?,?)";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute([$this->movie_name, $this->movie_photo, $this->movie_description, $this->movie_time, $this->release_date]);
            echo "<script>
            alert('The data was send successfully!'); document.location='../movie.php';
            </script>";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Show all movies function
    public function showMovieData(){
        try{
            $sql = "SELECT * FROM movie";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();
            return $results;
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Show movies by ID function
    public function showMoviesById(){
        try{
            $sql = "SELECT * FROM movie where movie_id=?";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute([$this->movie_id]);
            $movieData = $stmt->fetchAll();
            return $movieData;
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Edit movie data function
    public function editMovieData(){
        try{
            $sqlStmt = "UPDATE movie SET movie_name=?, movie_description=?, movie_time=?, release_date=? WHERE movie_id=?";
            $stmt = $this->dbConn->prepare($sqlStmt);
            $stmt->execute([$this->movie_name, $this->movie_description, $this->movie_time, $this->release_date, $this->movie_id]);
            echo "<script>
            alert('The data was edited successfully!'); document.location='../movie.php';</script>";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Delete movie data function
    public function deleteMovieData(){
        try{
            $sql = "DELETE FROM movie where movie_id=?";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute([$this->movie_id]);
            $movieData = $stmt->fetchAll();
            return $movieData;
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
}
?>