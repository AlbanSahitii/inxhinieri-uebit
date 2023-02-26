<?php

require_once('../classes/crudUser.php');

if(isset($_POST['submit'])){

    $pwd = $_POST['user_password'];
    $user_password = password_hash($pwd, PASSWORD_DEFAULT);

//    var_dump($_POST);die;

    $user = new crudUser();
    $user->setUser_email($_POST['user_email']);
    $user->setUser_password($user_password);
    $user->setUsername($_POST['username']);
    $user->setUser_fullname($_POST['user_fullname']);
    $user->setUser_role($_POST['user_role']);
    $user->insertUserData();

    echo "<script>
    alert('dhenat jane Regjistruar me sukses');
    document.location='../User.php'</script>"; }
?>