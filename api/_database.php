<?php

function connectToDatabase()
{
  $servername = "localhost:3306";
  $username = "root";
  $password = "1234";
  $database = "siwa_hotel";

  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}
