<?php

    include 'includes/header.php';
    include 'includes/navbar.php';

    ?>

    <div class="main">
        <form method="POST" action="includes/movie.inc.php">
            <label for="movie_name">Movie Name:</label>
            <input type="text" id="movie_name" name="movie_name" required>

            <label for="movie_description">Movie Description:</label>
            <textarea id="movie_description" name="movie_description" required></textarea>

            <label for="movie_time">Movie Time:</label>
            <input type="time" id="movie_time" name="movie_time">

            <label for="release_date">Release Date</label>
            <input type="date" id="release_date" name="release_date"> <br>

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