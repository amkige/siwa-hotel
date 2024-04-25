<?php
include "_database.php";

$conn = connectToDatabase();

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$customer_name = $_POST['customer_name'];
$number_of_people = $_POST['number_of_people'];
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];
$conctact_number = $_POST['conctact_number'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$statement = $conn->prepare("INSERT INTO bookings VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)");
$statement->bind_param(
  "sisssss",
  $customer_name,
  $number_of_people,
  $checkin_date,
  $checkout_date,
  $conctact_number,
  $email,
  $comment
);

if ($statement->execute() === TRUE) {
  header("Location: /book.html?sent=1");
  die();
} else {
  echo "Error: " . $statement->error;
}

$statement->close();
$conn->close();
