<?php
include 'db/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $movie_id = $_POST['movie_id'];
    $title = $_POST['title'];
    $release_year = $_POST['release_year'];
    $duration = $_POST['duration'];
    $rating = $_POST['rating'];

    $query = "UPDATE movies SET title = '$title', release_year = $release_year, duration = $duration, rating = $rating WHERE movie_id = $movie_id";
    $result = pg_query($conn, $query);

    if ($result) {
        echo "Movie updated successfully! <a href='index.php'>Back to Home</a>";
    } else {
        echo "Error updating movie: " . pg_last_error($conn);
    }
}
?>
