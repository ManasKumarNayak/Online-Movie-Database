<?php include 'db/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie Details</title>
</head>
<body>
    <?php
    if (isset($_GET['id'])) {
        $movie_id = $_GET['id'];

        // Fetch movie details from database
        $result = pg_query($conn, "SELECT * FROM movies WHERE movie_id = $movie_id");
        $movie = pg_fetch_assoc($result);

        if ($movie) {
            echo "<h1>{$movie['title']}</h1>";
            echo "<p><strong>Year:</strong> {$movie['release_year']}</p>";
            echo "<p><strong>Duration:</strong> {$movie['duration']} mins</p>";
            echo "<p><strong>Rating:</strong> {$movie['rating']}/10</p>";
        } else {
            echo "<p>Movie not found.</p>";
        }
    } else {
        echo "<p>Invalid request.</p>";
    }
    ?>
    <br><a href="index.php">Back to List</a>
</body>
</html>
