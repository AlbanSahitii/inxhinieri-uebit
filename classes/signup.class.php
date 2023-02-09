<?php
class SignUp extends Dbh{
    protected function setUser($userEmail, $userPassword, $username, $userFullName){
        $stmt =  $this->connect()->prepare('INSERT INTO users (user_email, user_password, username, user_fullname) VALUES (?,?,?,?);');

        if(!$stmt->execute(array($userEmail, $userPassword, $username, $userFullName))){
            $stmt = null;
            header("location: ../sign-up.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }


    protected function checkUser($username, $email){
        $stmt =  $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR user_email = ?');

        if(!$stmt->execute(array($username, $email))){
            $stmt = null;
            header("location: ../sign-up.php?error=stmtfailed");
            exit();
        }

        $result = "";
        if($stmt->rowCount() > 0 ){
            // kthehet false ne rast se ka user me ate email/username
            $result = false;
        } else {
            // kthehet true ne rast se nuk ka user me ate username/email
            $result = true;
        }

        return $result;
    }

}

?>