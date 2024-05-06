<?php
// insert.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_page";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from AJAX POST request
$name = $_POST['name'];
$enumber = $_POST['eno'];
$totalQuestion = $_POST['totalQuestion'];
$attemptQuestion=$_POST['attemptQuestion'];
$correctQuestion=$_POST['correctQuestion'];
$wrongAnswers=$_POST['wrongAnswers'];
// $totalmarks=$_POST['totalmarks'];
// Insert data into database
$sql = "INSERT INTO result (username, enumber, totalQuestion, attemptQuestion, correctQuestion, wrongAnswers) VALUES ('$name', '$enumber','$totalQuestion','$attemptQuestion','$correctQuestion','$wrongAnswers')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
