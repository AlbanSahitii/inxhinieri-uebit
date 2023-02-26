<?php

require_once('dbCon.php');

Class CrudUser extends dbCon {

    private $user_id;
    private $user_email;
    private $user_password;
    private $username;
    private $user_fullname;
    private $user_role;
    private $dbConn;

    public function __construct($user_id='',$user_email='',$user_password='',$username='',$user_fullname='', $user_role='') {
        $this->user_id = $user_id;
        $this->user_email = $user_email;
        $this->user_password = $user_password;
        $this->username = $username;
        $this->user_fullname = $user_fullname;
        $this->user_role = $user_role;
        $this->dbConn = $this->connDB();
    }

    //Seters and geters
    public function setUser_id($user_id){
        $this->user_id = $user_id;
    }

    public function getUser_id(){
        return $this->user_id;
    }

    public function setUser_email($user_email){
        $this->user_email = $user_email;
    }

    public function getUser_email(){
        return $this->user_email;
    }

    public function setUser_password($user_password){
        $this->user_password = $user_password;
    }

    public function getUser_password(){
        return $this->user_password;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUser_fullname($user_fullname){
        $this->user_fullname = $user_fullname;
    }

    public function getUser_fullname(){
        return $this->user_fullname;
    }

    public function setUser_role($user_role){
        $this->user_role = $user_role;
    }

    public function getUser_role(){
        return $this->user_role;
    }


    //Insert Data
    public function insertUserData(){
        try{
            $sql = "INSERT INTO users(user_email,user_password,username,user_fullname,user_role) VALUES (?,?,?,?,?)";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute([$this->user_email, $this->user_password, $this->username, $this->user_fullname, $this->user_role]);
            echo "<script>
            alert('The data was send successfully!'); document.location='../user.php';
            </script>";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Show all users function
    public function showUserData(){
        try{
            $sql = "SELECT * FROM users";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();
            return $results;
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Show users by ID function
    public function showUserById(){
        try{
            $sql = "SELECT * FROM users where user_id=?";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute([$this->user_id]);
            $userData = $stmt->fetchAll();
            return $userData;
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Edit user data function
    public function editUserData(){
        try{
            $sqlStmt = "UPDATE users SET user_email=?, user_password=?, username=?, user_fullname=?, user_role=? WHERE user_id=?";
            $stmt = $this->dbConn->prepare($sqlStmt);
            $stmt->execute([$this->user_email, $this->user_password, $this->username, $this->user_fullname, $this->user_role, $this->user_id]);
            echo "<script>
            alert('The data was edited successfully!'); document.location='../user.php';</script>";
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    //Delete user data function
    public function deleteUserData(){
        try{
            $sql = "DELETE FROM users where user_id=?";
            $stmt = $this->dbConn->prepare($sql);
            $stmt->execute([$this->user_id]);
            $userData = $stmt->fetchAll();
            return $userData;
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
}
?>