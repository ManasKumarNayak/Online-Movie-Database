<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Movie</title>
</head>
<body>
    <h1>Add New Movie</h1>
    <form action="process_movie.php" method="post">
        <input type="text" name="title" placeholder="Movie Title" required><br>
        <input type="number" name="release_year" placeholder="Release Year" required><br>
        <input type="number" name="duration" placeholder="Duration (mins)" required><br>
        <input type="number" step="0.1" name="rating" placeholder="Rating (0-10)" required><br>
        <button type="submit">Add Movie</button>
    </form>
</body>
</html>
