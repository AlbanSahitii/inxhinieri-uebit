<?php
class ContactUs extends Dbh{

    protected function setContactUs($email, $subject){

        $stmt = $this->connect()->prepare("INSERT INTO contactus (email, message) VALUES (?,?)");

        if(!$stmt->execute(array($email, $subject))){
            $stmt = null;
            return false;
            exit();
        }
        $stmt = null;
        return true;
    }



    protected function checkUser($email){
        $stmt =  $this->connect()->prepare('SELECT email FROM users WHERE user_email = ?');

        if(!$stmt->execute(array($email))){
            $stmt = null;
            return false;
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