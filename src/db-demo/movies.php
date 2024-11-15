<?php

$host = "db";
$username = "root";
$password = "password";
$dbname = "sakila";

$mysqli = new mysqli($host, $username, $password, $dbname);


// Samma exempel med prepared statement:

// $sql = "
// SELECT film.film_id, film.title, film.description, film.release_year
// FROM film
// WHERE film_id = ? LIMIT 100";

// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param("i", $_GET["film_id"]);
// $stmt->execute();

// $movieResult = $stmt->get_result();

// $movies = $movieResult->fetch_all(MYSQLI_ASSOC); // $result->fetch_all(MYSQLI_ASSOC);

// $stmt->close();

// $mysqli->close();

$sql = "
SELECT film.film_id, film.title, film.description, film.release_year
FROM film
LIMIT 100";

$result = $mysqli->query($sql);

$movies = $result->fetch_all(MYSQLI_ASSOC);

$result->close();

$mysqli->close();

?>

<ul>
    <?php
    foreach ($movies as $movie): ?>
        <li><?= $movie['title'] ?></li>
    <?php endforeach; ?>