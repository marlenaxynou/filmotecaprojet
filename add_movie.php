<?php
$conn = mysqli_connect("localhost","root","root","filmoteca");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO movies (title, year, synopsis, director, genre) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $title, $year, $synopsis, $director, $genre);

$title = $_POST['title'];
$year = $_POST['year'];
$synopsis = $_POST['synopsis'];
$director = $_POST['director'];
$genre = $_POST['genre'];
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: index.php");
exit();
?>