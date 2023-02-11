<?php
class Login extends Dbh{

    protected function getUser($userEmail, $userPassword){
        // getting hashed password
        $stmt =  $this->connect()->prepare('SELECT user_password FROM users WHERE user_email = ?');
        $stmtRole = $this->connect()->prepare('SELECT user_role FROM users WHERE user_email = ?');
        $getRole = $stmtRole->fetchAll(PDO::FETCH_ASSOC);
        $role = $getRole[0]['user_role'];

        //error handling
        if(!$stmt->execute(array($userEmail)) || !$stmtRole->execute(array($userEmail))){
            $stmt = null;
            return false;
            exit();
        }

        // error handling
        if($stmt->rowCount() == 0){
            $stmt = null;
            return false;
            exit(); 
        }
        if($stmtRole->rowCount() == 0){
            $stmt = null;
            return false;
            exit(); 
        }
        // fetching and verifying the password with database output
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($userPassword,$pwdHashed[0]["user_password"]);

        // if condition for checking the password if it was the same as user input
        if($checkPwd == false){
            $stmt = null;
            return false;
        }else if ($checkPwd == true){
            $stmt =  $this->connect()->prepare('SELECT * FROM users WHERE user_email = ? AND user_password = ?;');

            if(!$stmt->execute(array($userEmail,$pwdHashed[0]["user_password"]))){
                $stmt = null;
                return false;
                exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                return false;
                exit(); 
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["user_id"] = $user[0]['user_id'];
            $_SESSION["user_email"] = $user[0]['user_email'];
            $_SESSION["user_password"] = $user[0]['user_password'];
            $_SESSION["username"] = $user[0]['username'];
            $_SESSION["user_fullname"] = $user[0]['user_fullname'];
            $_SESSION["user_photo"] = $user[0]['user_photo'];
            $_SESSION["user_role"] = $user[0]['user_role'];
            
            return json_encode($user);
        }

    }
}

?>