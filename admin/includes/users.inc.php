<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['submit'])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    include "../../classes/dbh.php";

    include "../classes/users.class.php";
    include "../classes/users.contr.php";


    $signup = new UsersController($username,$email,$name,$password,$confirmPassword);

    $signup->signUpUser();

}
?>