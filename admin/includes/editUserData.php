<?php

require_once('../classes/crudUser.php');

$userData = new crudUser();
$userId = $_GET['user_id'];
$userData->setuser_id($userId);

if(isset($_POST['edit'])){
    $pwd = $_POST['user_password'];
    $user_password = password_hash($pwd, PASSWORD_DEFAULT);

    $userData->setUser_email($_POST['user_email']);
    $userData->setUser_password($user_password);
    $userData->setUsername($_POST['username']);
    $userData->setUser_fullname($_POST['user_fullname']);
    $userData->setUser_role($_POST['user_role']);
    echo $userData->editUserData();
    echo "<script>
        alert('Data was edited successfully'); 
        document.location='../user.php';
        </script>";
}

$editUserData = $userData->showUserById();
$row = $editUserData[0];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulari i Regjistrimit</title>
    <link rel="stylesheet" href="../assets/css/forms.css">
</head>
<body>

<form action="" method="POST">

    <label for="role">Role:</label>
    <select id="role" name="user_role">
        <option value="<?= $row['user_role']; ?>"><?= $row['user_role']; ?></option>
        <option value="User">User</option>
        <option value="admin">Admin</option>
    </select>

    <label for="name">Full name:</label>
    <input type="text" id="name" name="user_fullname" value="<?= $row['user_fullname'];?>">

    <label for="email">Email:</label>
    <input type="text" id="email" name="user_email" value="<?= $row['user_email'];?>">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?= $row['username'];?>">

    <label for="password">Password:</label>
    <input type="password" id="password" name="user_password" required>

    <input type="submit" name="edit" value="Edit">
</form>
</body>
</html>