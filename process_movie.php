<?php
include 'db/config.php';

$title = $_POST['title'];
$release_year = $_POST['release_year'];
$duration = $_POST['duration'];
$rating = $_POST['rating'];

$sql = "INSERT INTO movies (title, release_year, duration, rating) 
        VALUES ('$title', '$release_year', '$duration', '$rating')";

$result = pg_query($conn, $sql);

if ($result) {
    echo "Movie added successfully. <a href='index.php'>Back to Home</a>";
} else {
    echo "Error: " . pg_last_error($conn);
}
?>
