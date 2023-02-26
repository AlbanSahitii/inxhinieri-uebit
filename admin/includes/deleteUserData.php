<?php

    require_once('../classes/crudUser.php');

    $userData = new crudUser();

    if (isset($_GET['user_id'])){
        $userData->setUser_id($_GET['user_id']);
        $userData->deleteUserData();
        echo "<script>
        alert('The data was deleted successfully!');
        document.location='../user.php'</script>";
    }

?>