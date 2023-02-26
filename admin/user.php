<?php

include 'includes/header.php';
include 'includes/navbar.php';

//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//
//include 'classes/dbh.php';
//include 'classes/users.class.php';
//include 'classes/usersview.class.php';
//include 'classes/userscontr.class.php';
//
//$usersObj = new UsersView();
//$usersObj->showUser("alban");

//$usersObj2 = new UsersContr();
//$usersObj2->createUser("zgjim@gmail.com", "zgjim1234", "nomi", "Zgjim Grajqevci", "admin");


?>
    <div class="main">
        <form method="POST" action="includes/users.inc.php">

            <label for="name">Full name:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">

            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <label for="password2">Confirm password:</label>
            <input type="password" id="password2" name="confirmPassword">

            <input type="submit" name="submit" value="Submit">
        </form>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Full name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Zgjim Grajqevci</td>
                <td>zgjimgrajqevci</td>
                <td>grajqevccizgjim03@gmail.com</td>
                <td>
                    <button id="edit_btn"><a href="">Edit</a></button>
                    <button id="delete_btn"><a href="">Delete</a></button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Alban Sahiti</td>
                <td>albanisahiti</td>
                <td>alban sahilit@gmail.com</td>
                <td>
                    <button id="edit_btn"><a href="">Edit</a></button>
                    <button id="delete_btn"><a href="">Delete</a></button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tanjiro Kamado</td>
                <td>kamaddooo</td>
                <td>tanjirokamado@gmail.com</td>
                <td>
                    <button id="edit_btn"><a href="">Edit</a></button>
                    <button id="delete_btn"><a href="">Delete</a></button>
                </td>
            </tr>
            </tbody>
        </table>



    </div>
</div>

<?php

include 'includes/footer.php';

?>