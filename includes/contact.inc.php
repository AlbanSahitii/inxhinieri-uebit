<?php

if(isset($_POST['submit'])) {
    // Marrja e te dhenave 
    $email = $_POST["email"];
    $subject = $_POST["subject"];


    include "../classes/dbh.php";
    include "../classes/contact.class.php";
    include "../classes/contact.contr.php";

    // inicializimi i klasave

    $contactus = new ContactUsContr($email, $subject);
    // running
    $contactus->contactUs($email,$subject);
    header("Location: ../contact.php?mailsent");
}
?>
