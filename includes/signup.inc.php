<?php
if(isset($_POST['submit'])) {
    // Marrja e te dhenave 
    $username = $_POST["username"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    include "../classes/dbh.php";
    include "../classes/signup.class.php";
    include "../classes/signup.contr.php";
    // inicializimi i klasave

    $signup = new SignUpController($username,$email,$name,$password,$confirmPassword);
    // running
    $signup->signUpUser();
    header("location: ../sign-up.php?error=none");
}
?>