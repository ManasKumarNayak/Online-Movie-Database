<?php
$host = "localhost";
$dbname = "movie_db";
$username = "postgres"; // Your PostgreSQL username
$password = "postgres"; // Replace with actual password

$conn = pg_connect("host=$host dbname=$dbname user=$username password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
?>
