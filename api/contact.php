<?php
include "_database.php";

$conn = connectToDatabase();

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$message = $_POST['message'];

$statement = $conn->prepare("INSERT INTO messages VALUES (NULL, ?)");
$statement->bind_param("s", $message);

if ($statement->execute() === TRUE) {
  header("Location: contact.html?sent=1");
  die();
} else {
  echo "Error: " . $statement->error;
}

$statement->close();
$conn->close();
