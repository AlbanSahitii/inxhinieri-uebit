<?php

    include 'includes/header.php';

    include 'includes/navbar.php';

    require_once 'classes/crudMovie.php';

    $movie = new crudMovie();
    $allMovie=$movie->showMovieData();

    ?>

    <div class="main">
        <form method="POST" action="includes/addMovie.php">
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
                <th>Movie Id</th>
                <th>Movie Name</th>
                <th>Movie Length</th>
                <th>Release Date</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($allMovie as $key=>$row) {
            ?>
            <tr>
                <td><?= $row['movie_id']; ?></td>
                <td><?= $row['movie_name']; ?></td>
                <td><?= $row['movie_time']; ?></td>
                <td><?= $row['release_date']; ?></td>
                <td><?= $row['movie_description']; ?></td>
                <td>
                    <a href="includes/editMovieData.php?movie_id=<?= $row['movie_id']; ?>">
                        <button id="edit_btn">Edit</button>
                    </a>
                    <a href="includes/deleteMovieData.php?movie_id=<?= $row['movie_id']; ?>">
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