<?php include 'db/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Online Movie Database</h1>
    <a href="add_movie.php">Add New Movie</a>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Year</th>
            <th>Duration</th>
            <th>Rating</th>
            <th>Details</th>
        </tr>
        <?php
        $result = pg_query($conn, "SELECT * FROM movies");
        while ($row = pg_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['title']}</td>
                    <td>{$row['release_year']}</td>
                    <td>{$row['duration']}</td>
                    <td>{$row['rating']}</td>
                    <td><a href='movie_details.php?id={$row['movie_id']}'>View</a></td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
