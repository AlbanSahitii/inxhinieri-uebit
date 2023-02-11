<?php
if(isset($_POST['submit'])) {
    // Marrja e te dhenave 
    $email = $_POST["email"];
    $password = $_POST["password"];

    include "../classes/dbh.php";
    include "../classes/login.class.php";
    include "../classes/login.contr.php";
    // inicializimi i klasave

    $login = new LoginContr($email,$password);
    // running
    $isUserLoggedIn = $login->logInUser();

    header('Content-Type: application/json; charset=utf-8');
    echo $isUserLoggedIn;
}
?>