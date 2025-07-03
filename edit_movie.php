<?php
include 'db/config.php';

if (isset($_GET['id'])) {
    $movie_id = $_GET['id'];
    $query = "SELECT * FROM movies WHERE movie_id = $movie_id";
    $result = pg_query($conn, $query);
    $movie = pg_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Movie</title>
</head>
<body>
    <h1>Edit Movie Details</h1>
    <form action="update_movie.php" method="post">
        <input type="hidden" name="movie_id" value="<?php echo $movie['movie_id']; ?>">

        <label>Movie Title:</label><br>
        <input type="text" name="title" value="<?php echo $movie['title']; ?>" required><br><br>

        <label>Release Year:</label><br>
        <input type="number" name="release_year" value="<?php echo $movie['release_year']; ?>" required><br><br>

        <label>Duration (in minutes):</label><br>
        <input type="number" name="duration" value="<?php echo $movie['duration']; ?>" required><br><br>

        <label>Rating (0-10):</label><br>
        <input type="number" step="0.1" name="rating" value="<?php echo $movie['rating']; ?>" required><br><br>

        <button type="submit">Update Movie</button>
    </form>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
