<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Movie</title>
</head>
<body>
    <h1>Add New Movie</h1>
    <form action="process_movie.php" method="post">
        <label>Movie Title:</label><br>
        <input type="text" name="title" placeholder="Enter Movie Title" required><br><br>

        <label>Release Year:</label><br>
        <input type="number" name="release_year" placeholder="Enter Release Year" required><br><br>

        <label>Duration (in minutes):</label><br>
        <input type="number" name="duration" placeholder="Enter Duration" required><br><br>

        <label>Rating (0-10):</label><br>
        <input type="number" step="0.1" name="rating" placeholder="Enter Rating" required><br><br>

        <button type="submit">Add Movie</button>
    </form>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>
