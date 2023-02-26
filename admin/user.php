<?php

include 'includes/header.php';
include 'includes/navbar.php';

require_once 'classes/crudUser.php';

$user = new crudUser();
$allUser=$user->showUserData();
//hello
?>
    <div class="main">
        <form method="POST" action="includes/addUser.php">

            <label for="role">Role:</label>
            <select id="role" name="user_role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <label for="name">Full name:</label>
            <input type="text" id="name" name="user_fullname" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="user_email" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="user_password" required>

            <input type="submit" name="submit" value="Submit">
        </form>
        <table>
            <thead>
            <tr>
                <th>User Id</th>
                <th>Full name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach ($allUser as $key=>$row) {

            ?>

            <tr>
                <td><?= $row['user_id']; ?></td>
                <td><?= $row['user_fullname']; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['user_email']; ?></td>
                <td><?= $row['user_role']; ?></td>
                <td>
                    <a href="includes/editUserData.php?user_id=<?= $row['user_id']; ?>">
                        <button id="edit_btn">Edit</button>
                    </a>
                    <a href="includes/deleteUserData.php?user_id=<?= $row['user_id']; ?>">
                        <button id="delete_btn">Delete</button>
                    </a>
                </td>
            </tr>

            <?php

                }

                ?>
            </tbody>
        </table>



    </div>
</div>

<?php

include 'includes/footer.php';

?>