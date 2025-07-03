<?php include 'db/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie List</title>
</head>
<body>
    <h1>Movie List</h1>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Year</th>
            <th>Duration</th>
            <th>Rating</th>
            <th>Actions</th>
        </tr>
        <?php
        $result = pg_query($conn, "SELECT * FROM movies");
        while ($row = pg_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['title']}</td>
                    <td>{$row['release_year']}</td>
                    <td>{$row['duration']} mins</td>
                    <td>{$row['rating']}/10</td>
                    <td>
                        <a href='edit_movie.php?id={$row['movie_id']}'>Edit</a> | 
                        <a href='delete_movie.php?id={$row['movie_id']}'>Delete</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
